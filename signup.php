<?php include("header.php") ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>H&A Gym</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="assets/style.css">

</head>
<body style = "background-image: url(assets/fit.jpg)">

<div class="container">
	<div id="login-box" style="top: 200px;">
		<div class="logo">
			<h1 class="logo-caption"><span class="tweak">Sign</span>up</h1>
		</div>
		<h2 class="logo-caption" id ="notify"><span class="tweak"></span></h2>
		<div class="controls">
            <form name = "signup" action="register.php" method = "post" onsubmit = "return validatesignup()">
			<input type="text" name="firstname" placeholder="First name" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<input type="text" name="lastname" placeholder="Last name" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<input type="text" name="username" placeholder="Username" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<input type="email" name="email" placeholder="Email" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<input type="password" name="password" placeholder="Password" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<input type="password" name="confirmpwd" placeholder="Conform Password" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<button type="submit" class="btn btn-default btn-block btn-custom"  style="width: 350px; height: 50px;margin-top: 20px;">Signup</button>
            </form>
			<button class="btn btn-warning"  style="width: 350px; height: 50px;margin-top: 20px;" onclick ="document.location.href = 'index.php'">To Login</button>
		</div>
	</div>
</div>
<div id="particles-js"></div>

  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="assets/logi.js"></script>
<script>
	function validatesignup(){
	var firstname = document.forms['signup']['firstname'].value;
	var lastname = document.forms['signup']['lastname'].value;
	var username = document.forms['signup']['username'].value;
	var email = document.forms['signup']['email'].value;
	var password = document.forms['signup']['password'].value;
	var confirmpwd = document.forms['signup']['confirmpwd'].value;
	if(confirmpwd !== password) {
		alert("You should input the same password!");
		return false;
	}
	if( firstname == "" || lastname == "" || username == "" || email == "" || password == "" || confirmpwd == ""){
		return false;
	}
	}
</script>
</body>
</html>