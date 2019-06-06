<?php
if(isset($_POST['submit']))
{
    include_once 'db1.php';
	$Doctordetails=$_POST['dr'];
	$Name=$_POST['name1'];
	$res=mysqli_query($conn,"INSERT into cardio VALUES ('$Doctordetails','$Name')");
if($res)

	{
        echo "<script type='text/javascript'>alert('Appointment booked successfully..!!');</script>";
	include "cardiology1.php";
    }
}
    ?>