<?php
include_once 'db1.php';

$Name=$_POST['name'];
$Password=$_POST['password'];
$Age=$_POST['age'];
$Address=$_POST['address'];

$res=mysqli_query($conn,"INSERT into psignup1 values('$Name','$Password','$Age','$Address')");
if($res)
{
	echo "<script type='text/javascript'>alert('signed up successfully..!!');</script>";
	include "psignin.php";
}
?>
