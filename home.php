<html>
<style>	
body
{
	background-image:url("pat0.jpg");
	height:100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.homebox{
	width: 400px;
	height: 500px;
	background-color: rgba(52,73,94,0.7);
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.homebox img{
	width: 120px;
	height: 120px;
	border-radius:50%;
	position:absolute;
	top:-60px;
	right: 35%;
	margin-bottom:30px;
	}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.homebox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.homebox input{
	width:100%;
	margin-bottom: 20px;
	}
	.homebox input[type="submit"]
	{
	    border: none;		
		outline: none;
		height: 40px;
		background : #000066;
		color: #fff;
		font-size: 20px;	
		border-radius:20px;
	}
	.logibox input[type="submit"]:hover
	{
		cursor: pointer;
		bac: #ffc107;
		color:#000;
			}
		
</style>
<body>
<h1><p>Welcome</p></h1>
<div class="homebox">
<img src="hosimg.png"  class "hosimg">
<h1><p>ADMIN</p></h1>
<form action="signin.php" method="post">
<input type="submit" value="signin"><br><br></form>
<h1><p>PATIENT</p></h1>
<form action="psignup.php" method="post"><br>
<input type="submit" value="signup"><br></form>
<form action="psignin.php" method="post"><br>
<input type="submit" value="signin"><br><br></form>
</div>
</body>
</html>

