
<html>
<style>	
body{
	margin:0 auto;
	background-image: url("pat8.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}
.loginbox{
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
.loginbox img{
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
	padding: 0 0 30px;
	text-align: center;
	font-size: 33px;
}
input[type="text"],input[type="password"]{
	height: 45px;
	width:300px;300px;
	font-size:18px;
	margin-bottom:20px;
	background-color:#fff;
	padding-left:40px;
}
.btn-login{
	padding: 15px 30px;
	color: #fff;
	border-radius: 4px;
	border: none;
	background-color: #80ced6;
	border-bottom: 4px solid  #80ced6;

}	
.btn-login {font-size: 20px;}
</style>
<body>
<div class="loginbox">
 <img src="adminimg.png">
<h1>ADMIN PAGE</h1>

<form action="linkp1.php" method="post">
<div class="form-input">
<h3><p>Username:</p></h3>
<input type="text" name="name" placeholder="Enter username" required><br></div>
<div class="form-input">
<h3><p>Password:</p></h3>
<input type="password" name="password"  placeholder="Enter password" required ></div>
<button type="submit" name="signin" class="btn-login">SignIn</button> 

</form>
</div>

</body>
</html>
