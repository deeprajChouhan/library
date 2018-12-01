
<?php

 include '../pages/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>E-Library</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Login and Registration Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script> 
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,300italic,300' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="alert alert-success alert-dismissible fade in" id="success" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Sussessfully</strong> registered now you can login
  </div>
<div class="alert alert-danger alert-dismissible fade in"  id="reg" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Alredy!!</strong> Exist
	</div>
	<div class="alert alert-danger alert-dismissible fade in"  id="error" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Login First!!</strong>
  </div>
	<div class="alert alert-danger alert-dismissible fade in" id="login" style="display:none;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Incorret</strong> Username and password.
	</div>
	
	<?php
		if(isset($_GET['id'])){
			echo "<script>document.getElementById('error').style.display = 'block';</script>";
		}
	?>
<?php
include '../admin/getUsers.php';
$object = new users;
?>
<!-- /start-main -->
    <h1>E-Library Login form</h1>
	<!-- /register -->	
		<div class="container w3l">
  		    <span title="REGISTER" class="button"> +</span>
		  <div class="content">
			<div class="head">
			  <h3>Register</h3>
			</div>
			<div class="body">
			    <div class="login-top sign-top w3-agile">
							 <form method="post">
									<input type="text" name="Name" class="name active" placeholder="Your Name" required="">
									<input type="text" name="Email" class="email" placeholder="Email" required="">
									<input type="text" name="Phone" class="phone" placeholder="Phone" required="">
									<input type="password" name="Password" class="password" placeholder="Password" required="">	
									<div class="login-bottom">
										<div class="sub">
											
												<input type="submit" name="register" value="SIGN UP">
										<?php
										if(isset($_POST['register'])){
											
											$name = $_POST['Name'];
											$email = $_POST['Email'];
											$phone = $_POST['Phone'];
											$password = $_POST['Password'];
											$check = $object->checkUser($name,$email);
											if($check == 1){
												echo "<script>document.getElementById('reg').style.display = 'block';</script>";
											}else if($check == 0){
												$sql_update = "insert into persons (firstname,email,password,mobile) values ('$name','$email','$password','$phone')";
												$conn->query($sql_update);
													echo "<script>document.getElementById('success').style.display = 'block'</script>";
											}
										}
										?>	
										</div>
									<div class="clearfix"></div>
								</div>	
						</form>
					</div>
			</div>
		  </div>
		</div>
	<!-- //register -->	
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
		<script>
		$('.button').click(function (e) {
		  e.preventDefault();
		  $(this).parent().toggleClass('expand');
		  $(this).parent().children().toggleClass('expand');
		});
		</script>
		  <!-- /login-inner -->	
			<div class="login-inner">
				<div class="log-head">
							<h2>Login</h2>
						</div>
								<div class="login-top">
								 <form method="post">
									<input type="text" name="Email" class="email" placeholder="Email" required=""/>
									<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
									<div class="login-bottom">
												<input type="submit" name="submit" value="LOGIN"/>
									</form>
									<div class="clearfix"></div>
								</div>
								</form>
								
<?php
if(isset($_POST['submit'])){
    $username = $_POST['Email'];
		$password = $_POST['Password'];
		echo "<script>alert(".$password.")</script>";
$check = $object->getInfo($username,$password);
if($check == 1){
    echo "<script>window.location.assign('../library/library_website/public_html/main');</script>";
}
else if($check == 0){
    echo "<script>document.getElementById('login').style.display = 'block';</script>";
}
}
?>
								<div class="clearfix"></div>
													
							</div>
						</div>	
						<!-- //login-inner -->	
	<div class="clearfix"> </div>	
  
	  <!-- //copy-right -->	
     <!-- //end-main -->
</body>
</html>
