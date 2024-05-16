<?php
include("loginbackend.php");
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="log/css/all.css">
		<link rel="stylesheet" href="log/css/bootstrap.css">
		<link rel="stylesheet" href="log/css/style.css">
		<link rel="stylesheet" href="log/css/media.css">
        
		<title>Log In here</title>
<style>
	body{
		background: url(images/login.jpg) no-repeat;
    background-size: 100%;
	}
  .has-error .help-block {
  color: red;
}
label{
	font-weight:600;
	color:#fff;
}
.form-sec .form-control:hover{
	border-color: #448d07;
	box-shadow: 1px 2px 5px #ccc;
}
.form-sec .form-control:focus{
	outline:none;
	box-shadow: none;
}
.logo-bg{
	background: #fff;
	padding: 10px;
}
.form-sec{
	background: rgba(0,0,0,0.5);
    padding: 20px;
}
.registerform {
    margin: 20px 0 50px 0px;
}
  </style>

	</head>
	<body>
		<!-- <header class="customnav bg-success" style="height: 72px;"> -->
		<header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 49px; margin-left: 561px;">
            <span class="logo-bg"><img src="../images/A2.png" style="margin-top: -12px; width: 60px; height: 60px;">
            Agrishop</span>
          </h1>
          <nav>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<!-- <a class="navbar-brand cus-a" href="#">Agri Shop</a> -->
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									
									
									
									<li class="">
										<!-- <a class="nav-link cus-a" href="login.php">Login</a> -->
										</li>
									<!-- <li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
											<!-- Register -->
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            
                                            <a class="dropdown-item" href="user_register.php">Register as a User</a><!--redirect lawyer register page-->
											<a class="dropdown-item" href="former_register.php">Register as a Farmer</a><!--redirect user register page-->

										</div>
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="registerform">
			<?php
				if(isset($_GET['error'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div style='margin-left:30%; margin-right:30%'>
					<div class='alert alert-danger alert-dismissible'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						Sorry User ...<strong>Wrong!</strong> Email or Password.
					</div>
				</div>";
				}
				else if(isset($_GET['deactivate'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div style='margin-left:30%; margin-right:30%'>
					<div class='alert alert-danger alert-dismissible'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<center>Sorry User ...<br/>Please Type your Valid Email & Password</center>
					</div>
				</div>";
			}?>
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-6">
						<h2>Hello !!! <i class="fas fa-hand-paper"></i></h2><hr/>
						<h4>Login Here User or Farmer <i class="fas fa-hand-point-right"></i></h4>
					</div> -->
					<div class="col-md-6" style="margin-left: 393px;max-width: 36%;flex: 0 0 50%;">
<form action="loginbackend.php" method="post" class="form-sec">


<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

							<div class="form-group">
								<label for="email">Email</label>
                                
                                
								<input type="email" class="form-control" name="email"  placeholder="Enter your Valid Email address" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" required="">
							</div>
							<div class="form-group">
								<label for="num">Password</label>
								<input type="password" class="form-control" name="password"  placeholder="Enter your  Valid Password">
							</div>

							<input name="login" type="submit" class="btn btn-block btn-success" value="Login" />
							<!--after signup redirect user dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer class ="bg-success">
			<div class="container ">
				<div class="row">
					<div class="col">
						<!-- <h5>All rights reserved 2022
							<script>document.write(new Date().getFullYear());</script>
						</h5> -->
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		<script>
			$('#validateForm').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your Password'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>





