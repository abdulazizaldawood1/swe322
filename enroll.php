<?php include("header.php") ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style= "height:20px">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Landing.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link activate" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<div style="height:800px;background-image: url(assets/fit.jpg);">
<div class="container" >
	<div id="login-box" style="top: 300px;">
    <form action="applyclass.php" name = 'applyclass'  onsubmit="return validate()"  method = "post">
		<div class="logo">
			<h1 class="logo-caption" id = "part2"><span class="tweak" id = "part1">Apply</span> Class</h1>
		</div>
    <div class="alert alert-success" role="alert" id = "showapply" style="display:none" >
     You applied for the class successfully!
    </div>
		<div class="controls">
           
			<input type="text" name="username" placeholder="Username" class="form-control" style="width: 350px; height: 50px;font-size: 20px;"/>
			<button type="submit" class="btn btn-default btn-block btn-custom"  style="width: 350px; height: 50px;margin-top: 20px;font-style:italic;font-size:22px" onclick = "return confirmation()">Apply</button>
           
		</div>
        <div class="form-check" style = "margin-top:20px;margin-left:35%">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value = "Football">
        <label class="form-check-label" for="flexRadioDefault1" style = "color:white">
            swimming
        </label>
        </div>
        <div class="form-check" style = "margin-top:20px;margin-left:35%">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value = "Weight">
        <label class="form-check-label" for="flexRadioDefault2" style="color:white">
            Football
        </label>
        </div>
        <div class="form-check" style = "margin-top:20px;margin-left:35%">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value = "Sprint">
        <label class="form-check-label" for="flexRadioDefault3" style="color:white">
            cardio
        </label>
        </div>
        </form>
	</div>
</div>
<script>
  function confirmation(){
    document.getElementById("part1").innerText = "Success!";
    document.getElementById("showapply").style.display = "block";
    document.getElementById("showapply").alert();
    return true;
  }
</script>  
<?php
 
?></div>
<?php include("footer.php")?>