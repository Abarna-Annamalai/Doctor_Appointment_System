<html>
<?php
if(isset($_POST['signin']))
{
session_start();
include_once "db1.php";
$d=trim($_POST["name"]);
$e=trim($_POST["password"]);
$x="select * from asignin where Name='$d' and BINARY Password='$e'";
$y=$conn->query($x);
if($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["name"]=$row["Name"];	
	$_SESSION["password"]=$row["Password"];
	echo "<script type='text/javascript'>alert('Signed in successfully!!!');</script>";
	echo "<script type='text/javascript'>window.location.href='front1.php';</script>";
	
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Name or Password!!!');</script>";
	include "home.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
</html>
