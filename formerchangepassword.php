<?php require_once("config.php");

	session_start();

 ?> 
 <!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<style>
body{ 
background:#EAE9E5;
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
  .label_txt{ 
font-size: 12px; 
   }  
   .form-control{border-radius: 25px }
   .signup_form{ 
    background: #fff;
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
}</style>
    
    
    
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
           
     <form action="" method="POST">
<br> 

<br> <?php 


 if(isset($_POST['change_password']))
 
 {



  $password=$_POST['password'];  
 $passwordConfirm=$_POST['passwordConfirm']; 
 
 
 
$sql="SELECT password from user where email='{$_SESSION['email']}'";
$res = mysqli_query($conn,$sql);
$res=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);


if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<6){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
if(!isset($error))
{

  
   $sql = "UPDATE user SET password='$password' WHERE email='{$_SESSION['email']}'";
  
  
   $result=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
   
   
   
   if($result==1)
            {
                $sql2 = "UPDATE former SET password='$password' WHERE email='{$_SESSION['email']}'";
				
                $result2=mysqli_query($conn, $sql2) or die(mysqli_error ($conn));
                if ($result2==1)
                {
                          header("location:formerviewprofile.php?password_updated=1");
					
				}
				
				else 
           {
            $error[]='Password not match';
           }
				
			}
}
 }
		 if(isset($error)){ 

foreach($error as $error){ 
  echo '<p class="errmsg">'.$error.'</p>'; 
}
}
        ?> 
     <form method="post" enctype='multipart/form-data' action="">
          <div class="row">
            <div class="col"></div>
          
            <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
         </div>
          </div>

          
      <div class="form-group">
 <div class="row"> 
             <div class="col">
                 <label>New Password:- </label>
                <input type="password" name="password"  class="form-control">
            </div>
          </div>
      </div>
      <div class="form-group">
 <div class="row">  
             <div class="col">
                 <label>Confirm New Password:-</label>
                <input type="password" name="passwordConfirm"  class="form-control">
            </div>
          </div>
      </div>
           <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
<button  class="btn btn-success" name="change_password">Change Password</button>
            </div>
           </div>
       </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>