<?php require_once("config.php");

	session_start();

	
	
//  $findresult = mysqli_query($conn, "SELECT * FROM user WHERE email= '$email'");
    $findresult = mysqli_query($conn, "SELECT * FROM user WHERE email='{$_SESSION['email']}'");
	

	
//  $sql = "SELECT username, name, department, address FROM signup WHERE username='{$_SESSION['username']}'";
if($res = mysqli_fetch_array($findresult))
{
$name = $res['name']; 
$email = $res['email'];  
$image= $res['image'];
}
 ?> 
 <!DOCTYPE html>
<html>
<head>
    <title> My Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="login/style.css">
    
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
}
</style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.6.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/tms-0.3.js"></script>
  <script type="text/javascript" src="js/tms_presets.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/html5.js"></script>
  <style type="text/css">#menu a, .bg, .bg2, #ContactForm a {behavior:url("../js/PIE.htc")}</style>
  <![endif]-->
  <style>
    #page1 header {
      height: 570px;
    }
    body {
      background: #448d07;
      border: 0;
      font: 14px "Trebuchet MS", Arial, sans-serif;
      color: #fcfcfc;
      line-height: 22px;
    }
    .container_display {
      display: inline-block;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 4px;
      cursor: pointer;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }

    header {
    margin-top: 9px;
    height: 169px;
}
h4{
  padding: 10px 20px;
}
  </style>
</head>
<body>
  <?php
  // echo "<h4>Welcome '" . $_SESSION['name'] . "'</h4>";
  ?>
  <div class="body1" style="background-color: #f4f4f4; height: 90px; ">
    <div class="main">
      <!--header -->
      <header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 0px; margin-left: 0;">
            <img src="../images/A2.png" style="margin-top: -22px; width: 60px; height: 60px;">
            Agrishop
          </h1>
          <nav>
            <ul id="menu">
              <li><a href="homepageformer.php">Home</a></li>
              <!-- <li class="container_display"> -->
                        <!-- <li class="dropdown">
            <a href="" style="float:right; margin:4px;">Category ▼</a>
            <div class="dropdown-content">
              <a href="#">Choose</a>
              <a href="vegitables.php">Vegetables</a>
              <a href="fruits.php">Fruits</a>
              
            </div>
          </li> -->
  

              <li><a href="cartorder.php">cart order</a></li>
              <li><a href="formerorder.php">bulk Orders</a></li>
              <li><a href="addproducts.php">Add Products</a></li>
              <li  class="active"><a href="formerviewprofile.php">Profile</a></li>
              
              <!-- <li><a href="userviewprofile.php">Profile</a></li> -->
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </header>
    </div>
  </div>
</body>
</html>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-6">
  <div class="login_form">
<!-- <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br> -->
     
          <div class="row">
            <div class="col"></div>
           <div class="col-6"> 
             <?php if(isset($_GET['profile_updated'])) 
      { ?>
    <div class="successmsg">Profile saved ..</div>
      <?php } ?>
        <?php if(isset($_GET['password_updated'])) 
      { ?>
    <div class="successmsg">Password has been changed...</div>
      <?php } ?>
            <center>
            <?php if($image==NULL)
                {
                 echo '<img src="https://technosmarter.com/assets/icon/user.png">';
				 
//				 <img src="images/'.$row['filename'].'" height="200">
                } else { echo '<img src="images/'.$res['image'].'" style="height:100px;width:100px;border: 3px #448d07 solid;border-radius:50%;">';}?> 

  <p style="color:#333;"> Welcome! <span style="color:#33CC00"><?php echo $name; ?></span> </p>
  </center>
           </div>
            <div class="col"><p><a href="logout.php"><span style="color:red;"></span> </a></p>
<!-- <p>            <a href="homepageformer.php"><span style="color:red;">Go Back</span> </a></p> -->
            
         </div>



          </div>

          <table class="table">
          <tr>
              <th>Name </th>
              <td><?php echo $name; ?></td>
          </tr>
          <tr>
              <th>Email</th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
           <div class="row">
            <div class="col-sm-2">
            </div>
             <!-- <div class="col-sm-4">
                <a href="formereditprofile.php"><button type="button" class="btn btn-primary">Edit Profile</button></a>
            </div>
            <div class="col-sm-6">
         <a href="formerchangepassword.php"><button type="button" class="btn btn-warning">Change Password</button></a>
            </div>
           </div> -->
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div> 
</body>
 <style>
  .login_form {
    margin-top: 5%;
    background: #fff;
    padding: 30px;
    box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
    border-radius: 5px;
}
 </style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>