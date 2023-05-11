<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>H&A Gym</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="assets/style.css">

</head>
<body style = "background-image: url(assets/fit.jpg);">

<div class="container">
	<div id="login-box" style="top: 300px;">
		<div class="logo">
			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
		</div>
		<div class="controls">
            <form action="Landing.php" name = 'login'  onsubmit="return validate()"  method = "post">
			<input type="text" name="username" placeholder="Username" class="form-control" style="width: 350px; height: 50px;font-size: 20px;"/>
			<input type="password" name="password" placeholder="Password" class="form-control" style="width: 350px; height: 50px;margin-top: 20px;font-size: 20px;"/>
			<button type="submit" class="btn btn-default btn-block btn-custom"  style="width: 350px; height: 50px;margin-top: 20px;">Login</button>
            </form>
            <button onclick="document.location.href = 'signup.php'" class="btn btn-success"  style="width: 350px; height: 50px;margin-top: 20px;">Signup</button>
		</div>
	</div>
</div>
<div id="particles-js"></div>

  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
<script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="assets/login-style/script.j"></script>
<script>
    function validate(){
        var username = document.forms['login']['username'].value;
        var password = document.forms['login']['password'].value;
        
        if(username == "" || password == ""){
            return false;
        } 
    }
</script>

</body>
</html>
