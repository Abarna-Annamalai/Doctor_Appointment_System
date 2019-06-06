<html>
<head>
</head>
<?php
if(isset($_POST['signin']))
{
session_start();
include_once "db1.php";
$c=trim($_POST["name"]);
$b=trim($_POST["password"]);
$x="select * from psignup1 where Name='$c' and BINARY Password='$b'";
$y=$conn->query($x);
if($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["name"]=$row["Name"];	
	$_SESSION["password"]=$row["Password"];
	echo "<script type='text/javascript'>alert('Signed in successfully!!!');</script>";
	echo "<script type='text/javascript'>window.location.href='front.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Name or Password!!!');</script>";
	include "psignup.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>
