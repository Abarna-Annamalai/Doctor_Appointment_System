<!DOCTYPE html>
<html>
<body>
<form action="home.php" method="post">
  <input type="submit" value="signout">
</form>

<style>

body{
	background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url("pat16.jpg");
   height: 100vh; 


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<h1>Appointment details - Cardiology</h1>
</body>
</html>

<?php
include "db1.php";
$x=mysqli_query($conn,"select * from cardio");
if(mysqli_num_rows($x)!=0)
{
	echo "<table border='3px'><tr><thead><td><h3>Doctor Details</h3></td><td><h3>Pateint Name</h3></td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	$Doctordetails = $r["Doctordetails"];
	$Name=$r["Name"];
	echo "<tr><td>$Doctordetails</td><td>$Name</td></tr>";
	}
	 echo "</table>";  

	exit();
}

?>


