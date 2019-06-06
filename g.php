<!DOCTYPE html>
<html>
<body>
<form action="home.php" method="post">
  <input type="submit" value="signout">
</form>

<style>

body{
	background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)),url("pat21.jpg");
   height: 100vh; 


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<h3>Patient History</h3>
</body>
</html>

<?php
include "db1.php";
	

//$s=$_POST["sno"];
$x=mysqli_query($conn,"select * from g");

if(mysqli_num_rows($x)!=0)
{
	
	echo "<table border='3px'><tr><thead><td><h3>Sno</h3></td><td><h3>Patient Name</h3></td><td><h3>Age</h3></td><td><h3>Contact</h3></td><td><h3>Patient Problem</h3></td><td><h3>Treatment</h3></td></thead></tr>";
	while($r=mysqli_fetch_array($x))
	{
	$sno = $r["sno"];
	$name=$r["name"];
	$age=$r["age"];
	$contact=$r["contact"];
	$problem=$r["problem"];
	$treatment=$r["treatment"];
	
	
	  echo "<tr><td>$sno</td><td>$name</td><td>$age</td><td>$contact</td><td>$problem</td><td>$treatment</td></tr>";
	}
	 echo "</table>";  

	exit();
}

?>


