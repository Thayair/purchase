<?php
	  	if (isset($_POST['log'])) {
	  		$email=$_POST['email'];
	  		$password=$_POST['password'];
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  		$results=$registerController->get();
	  		foreach ($results as $result) {
	  		$email1=$result['email'];
	  		$password1=$result['password'];
	  		
	  		
	  		if ($email==$email1 && $password==$password1) {
	  			header('location:home.php');
	  		}
	  		
		}	
	  	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>login</title>
	<link href="bootstrap.css" rel="stylesheet">
	
</head>
<body style="background-color:#F9F306;">
<div class="container mt-5 div">
<h1 style="text-align:center;padding-top:80px">Login Form</h1>
<form method="POST" >
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group"style="padding:40px;margin-left:400px">
				<label style="font-size:26px;">EMAIL</label>
				<input type="text" name="email" id="input1" class="form-control" style="width:300px; height:40px; margin-left:65px" >
				<span style="color: red;" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group" style="margin-left:400px"> 
				<label style="font-size:26px;margin-top:50px">PASSWORD</label>
				<input type="text" name="password" id="input2"class="form-control" style="width:300px; height:40px;margin-left:50px">
				<span style="color: red;" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="div3">
		<button type="submit" id="login" name="log" class="btn-success p-2" style="margin-left:600px; font-size:20px;margin-top:40px; background-color:black; color:yellow; width:100px; height:40px;">Login
		</button>
	</div>
</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>	
</body>
</html>