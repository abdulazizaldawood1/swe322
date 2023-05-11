<!DOCTYPE html>
<html lang="en">
<head>
  <title>This is the landing page!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assets/login-style/style.css">
  
  <style>
  .fakeimg {
    height: 100px;
    background-color: "cyan";
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Welcome to H&A Gym!</h1>
  <p>Be fit and healty and register to our classes now!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style= "height:20px;" >
  <div class="container-fluid">
    <ul class="navbar-nav" style = "margin-left:860px;margin-top:-100px;">
      <li class="nav-item" >
        <a class="nav-link" href="Landing.php" style = "color:cyan;font-Style:italic;font-size:50px;margin-left:-45px">Main Page</a>
</li>
        
    </ul>
   
  </div>
</nav>

<div style="height:800px;background-image: url(assets/fit.jpg);">
<div class="alert alert-success" role="alert" id = "showapply" style = "text-align:center">
     You have applied for the class successfully!
    </div>
</div>
<?php include("footer.php")?>