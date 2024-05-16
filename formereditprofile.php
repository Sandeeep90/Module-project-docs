<?php require_once("config.php");

	session_start();

  
//      $findresult = mysqli_query($conn, "SELECT * FROM user WHERE name='{$_SESSION['name']}'");

      $findresult = mysqli_query($conn, "SELECT * FROM former WHERE email='{$_SESSION['email']}'");
	  

if($res = mysqli_fetch_array($findresult))
{
	
	
	$name = $res['name']; 
	$oldusername =$res['name']; 
$email = $res['email'];  
$image= $res['image'];
	
}
 ?> 
 <!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
  width: 400px;

    margin-left: 62px;
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
.login_form {
    margin-top: 10%;
    background: #fff;
    padding: 30px;
    width: 400px;
    margin-left: 62px;
    box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.28);
    border-radius: 5px;
}
img {
    vertical-align: top;
    margin-left: -191px;
}
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 66%;
}

  </style>
</head>
<body>
  <?php
  echo "<h4>Welcome '" . $_SESSION['name'] . "'</h4>";
  ?>
  <div class="body1" style="background-color: #f4f4f4; height: 149px; ">
    <div class="main">
      <!--header -->
      <header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 49px; margin-left: 169px;">
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
              <li class="active"><a href="formerviewprofile.php">Profile</a></li>
              
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
           
     <form action="" method="POST" enctype='multipart/form-data'>
  <div class="login_form">


 
 
  <?php 
 if(isset($_POST['update_profile'])){
	 
	 

 $name=$_POST['name']; 
 

 
 
 
 $folder='images/';
 $file = $_FILES['image']['tmp_name'];  
$file_name = $_FILES['image']['name']; 
$file_name_array = explode(".", $file_name); 
 $extension = end($file_name_array);
// $new_image_name =''.rand() . '.' . $extension;
 
 
 
  if ($_FILES["image"]["size"] >1000000) {
   $error[] = 'Sorry, your image is too large. Upload less than 1 MB in size .';
 
}
 if($file != "")
  {
if($extension!= "jpg" && $extension!= "png" && $extension!= "jpeg"
&& $extension!= "gif" && $extension!= "PNG" && $extension!= "JPG" && $extension!= "GIF" && $extension!= "JPEG") {
    
   $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}

$sql="SELECT * FROM former WHERE name='{$_SESSION['name']}'";
      $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

   if($oldusername!=$name){
     if($name==$row['name'])
     {
           $error[] ='Username alredy Exists. Create Unique username';
          } 
   }
}
    if(!isset($error)){ 
          if($file!= "")
          {
            $stmt = mysqli_query($conn,"SELECT image FROM  former WHERE email='{$_SESSION['email']}'");
            $row = mysqli_fetch_array($stmt); 
            $deleteimage=$row['image'];
unlink($folder.$deleteimage);
move_uploaded_file($file, $folder . $new_image_name); 
mysqli_query($conn,"UPDATE user SET name='$name', image='$file_name' WHERE email='{$_SESSION['email']}'");
          }
           $result = mysqli_query($conn,"UPDATE former SET name='$name', image='$file_name' WHERE email='{$_SESSION['email']}'");
		   

           if($result)
           {
       header("location:formerviewprofile.php?profile_updated=1");
           }
           else 
           {
            $error[]='Something went wrong';
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
           <div class="col-6"> 
            <center>
            <?php if($image==NULL)
                {
                 echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                } else { echo '<img src="images/'.$res['image'].'" style="height:80px;width:auto;border-radius:50%;">';}?> 
                <div class="form-group">
                <label>Change Image &#8595;</label>
                <input  type="file" name="image" style="width:150%; margin-left: -58px;" >
            </div>

  </center>
           </div>
            <!-- <div class="col"><p><a href="logout.php"><span style="color:red;">Logout</span> </a><a href="formerviewprofile.php"><span style="color:red;">Go Back</span> </a></p>
         </div> -->
          </div>

          <div class="form-group">
          <div class="row"> 
            <div class="col-3">
                <label>Name</label>
            </div>
             <div class="col">
                <input type="text" name="name" value="<?php echo $name;?>" class="form-control">
            </div>
          </div>
      </div>


           <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
<button  class="btn btn-success" name="update_profile">Save Profile</button>
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