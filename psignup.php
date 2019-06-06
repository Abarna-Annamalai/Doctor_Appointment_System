<html>
<style>	
body{
	margin:0 auto;
	background-image: url("pat9.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}
.loginbox{
	width: 400px;
	height: 600px;
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
input[type="text"],input[type="password"],input[type="text"],input[text="password"]{
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
.btn-login {font-size: 18px;}
</style>
<body>
<div class="loginbox">
<img src="pat0002.png">

<form action="insert.php" method="post">
<div class="form-input">
<h3>Name:<input type="text" name="name" placeholder="Enter your name" required><br></div></h3>
<div class="form-input">
<h3>Password:<input type="password" name="password" placeholder="Enter Password" required ><br></div></h3>
<div class="form-input">
<h3>Age:  <input type="text" name="age" placeholder="Enter your age" required><br></div></h3>
<div class="form-input">
<h3>Address:  <input type="text" name="address" placeholder="Enter your address" required><br></div></h3>
<button type="submit" name="signin" class="btn-login">SignUp</button> 
</div>
</form>
</body>
</html>

