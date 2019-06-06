<?php
?>
<html>
<body>
<div style="color: #66ffff; font-family: 'Lucida Calligraphy', sans-serif;font-size: 22px;">

		<form action="cardiology2.php" method="post" name="form" type="text/plain">
	
	</form>
</body>
</html>


<div class="table-title">

<h3>Appointment details Cardiology</h3>
</div>
<?php
if(isset($_POST['signin']))
{
session_start();
include_once "db1.php";
$x="select * from cardio";
$y=$conn->query($x);
$i=0;
if($y->num_rows>0)
{
	while($row = $y->fetch_assoc())
	{
		$Doctordetails[$i]=$row['dr'];
	$Name[i]=$row['name1'];
	
	   $i++;
	   echo "<table><tr><thead>Doctordetails</thead><thead>PatientDetails</thead></tr><tr><td>$Doctordetails[$i]</td><td>$Name[$i]</td></tr>";
	
	 echo "</table>";  
	}
	}

}
?>