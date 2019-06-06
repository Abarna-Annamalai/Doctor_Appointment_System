<html>
<head>
</head>
<?php
if(isset($_POST['signin']))
{
session_start();
include_once "db.php";
$c=trim($_POST["name"]);
$b=trim($_POST["password"]);
$c=trim($_POST["reenterpassword"]);
$x="select * from signup where patientname='$c' and BINARY password='$b' and BINARY reenterpassword='$c'";
$y=$conn->query($x);
if($y->num_rows>0)
{
	$row = $y->fetch_assoc();
	$_SESSION["name"]=$row["Name"];	
	$_SESSION["password"]=$row["Password"];
	echo "<script type='text/javascript'>window.location.href='buttons.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "signin.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
</body>
</html>
