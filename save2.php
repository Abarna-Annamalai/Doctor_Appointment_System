<?php
if(isset($_POST['submit']))
{
    include_once 'db1.php';
	$Doctor_details=$_POST['dr'];
	$Name=$_POST['name1'];
	$res=mysqli_query($conn,"INSERT into dermatology1 VALUES ('$Doctor_details','$Name')");
	
if($res)

	{
        echo "<script type='text/javascript'>alert('Appointment booked successfully..!!');</script>";
	include "Dermatology.php";
    }
}
    ?>