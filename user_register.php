<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
<title> User Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 

<style>
body{ 
background:url(images/user.jpg) no-repeat;
    background-size: 100%;;
 } 
 .login_form{
 	margin-top: 25%;
  background: #fff;
  padding: 30px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
 }
 .form_btn{ 
 	background: #fb641b;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);
    border: none;
    color: #fff; 
    width: 100% 
  }
  .form-sec .form-control:hover{
	border-color: #448d07;
	box-shadow: 1px 2px 5px #ccc;
}
.form-sec .form-control:focus{
	outline:none;
	box-shadow: none;
}
.form-group {
    margin-bottom: 5px;
}
.form-control{
  height: 34px;
  border-radius: 20px
}
  .label_txt{ 
font-size: 12px; 
font-weight: 500;
color:#fff;
   }  
   .signup_form{ 
    background: rgba(0,0,0,0.3);
  padding-left: 25px; 
   padding-right: 25px; 
      padding-bottom:5px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
     border-radius: 5px;
    }
    .logo{ 
      height: 50px; 
      width: auto; 
        display: block;
  margin-left: auto;
  margin-right: auto;
     }
     .errmsg{ 
  margin: 2px auto;
  border-radius: 5px;
  border: 1px solid red;
  background: pink;
  text-align: left;
  color: brown;
  padding: 1px;
}
.successmsg{
  margin: 5px auto;
  border-radius: 5px;
  border: 1px solid green;
  background: #33CC00;
  text-align: left;
  color: white;
  padding: 10px;
}
.signup_form h1{
    font-size: 18px;
    padding-top: 10px;
    text-align: center;
    color: #fff;
}
</style>
</head>
<body>
<header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 49px; margin-left: 501px;">
            <img src="../images/A2.png" style="margin-top: -22px; width: 60px; height: 60px;">
            Agrishop
          </h1>
          <nav>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
     <div class="col-sm-4">
<br><br><br><br>         
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row">
<?php 
 if(isset($_POST['signup'])){
	 
	 
	 $image = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $image;
	 
	 
  extract($_POST);
  if(strlen($name)<3){ // Minimum 
      $error[] = 'Please enter Name using 3 charaters atleast.';
        }
if(strlen($name)>20){  // Max 
      $error[] = 'Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $name)){
            $error[] = 'Invalid Entry Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    

if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($cpassword ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $cpassword){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<6){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from user where (name='$name' or email='$email');";
      $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($name==$row['name'])
     {
           $error[] ='Name alredy Exists.';
          } 
       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
             // $date=date('Y-m-d');
            //$options = array("cost"=>4);
//    $password = password_hash($password,PASSWORD_BCRYPT,$options);
            
            $result = mysqli_query($conn,"INSERT into user(name,email,password,image, role) values('$name','$email','$password','$image','user')");

           if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

		 <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
		</div>
		<div class="col-sm-4" style="margin-top: -70px;">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div>
      <?php } else { ?>
       <div class="signup_form">
      <div class="center">
               <h1>User Register</h1>
        <form method="POST" action="" enctype="multipart/form-data" class="form-sec">

  <div class="form-group">
  	
        <label class="label_txt">Name</label>
    <input type="text" class="form-control" name="name" value="<?php if(isset($error)){ echo $_POST['name'];}?>" required="">
  </div>
 
 

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
    <input type="password" name="cpassword" class="form-control" required="">
  </div>
  
   
  
  <div class="form-group">
				<input  type="file" name="uploadfile" value="" />
			</div>
            

  
  
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn" style="background-color: #28a745;">SignUp</button>
   <p>Have an account?  <a href="login.php">Log in</a> </p>
</form></div>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>