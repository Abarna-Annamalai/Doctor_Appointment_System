<html>
<head>
</head>
<?php
if(isset($_POST['SignIn']))
{
session_start();
include "db.php";

$a=trim($_POST["uid"]);
$b=trim($_POST["pid"]);
$x="select * from mailid1 where user='$a' and BINARY pwd='$b'";
$y=$conn->query($x);
if($y->num_rows==1)
{
	$row = $y->fetch_assoc();
	$_SESSION["uid"] = $row["user"];
	$_SESSION["pwd"]=$row["pwd"];
		
		
	echo "<script type='text/javascript'>window.location.href='str.php';</script>";
	exit();
}
else
{
	echo "<script type='text/javascript'>alert('Wrong Username or Password!!!');</script>";
	include "log.php";
}
$conn->close();
}
else
	echo "<script type='text/javascript'>window.top.location.href='unauthorised.php';</script>";
?> 
<body>
<form action="homepage.php">
</body>
</html>