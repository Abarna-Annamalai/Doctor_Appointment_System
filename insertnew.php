<?php
include_once 'db.php';

$email=$_POST['e'];
$password=$_POST['p'];


$res=mysqli_query($conn,"INSERT into signup values('$email','$password')");

if($res)
{
	echo "<script type='text/javascript'>alert('signed up successfully..!!');</script>";
	include "signup.php";
}