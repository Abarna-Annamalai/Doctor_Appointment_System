<!DOCTYPE html>
<html>
<body>

<style>

body{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("cardio.jpg");
   height: 100vh; 


    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<table class="table-fill"  border="3px">
  <thead>
  <tr>
 
    <th class="text-left">Sno</th>
	<th class="text-left">Doctor_Name</th>
	<th class="text-left">Arrival_time</th>
	<th class="text-left">Experience</th>
	
   </tr>
   </thead>
</table>

</body>
</html>

<?php
include "db.php";
	

//$s=$_POST["sno"];
$x=mysqli_query($conn,"select * from cardiology");

if(mysqli_num_rows($x)!=0)
{
	while($r=mysqli_fetch_array($x))
	{
	$sno = $r['sno'];
	$doctor_name=$r['doctor_name'];
	$arrival_time=$r['arrival_time'];
	$experience=$r['experience'];
	
    
	echo '<tr>
	<td>'.$sno.'</td>
	<td>'.$doctor_name.'</td>
	<td>'.$arrival_time.'</td>
	<td>'.$experience.'</td>
	</tr>';
	}
	exit();
}
?>