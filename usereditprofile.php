<?php require_once("config.php");

	session_start();

  
//      $findresult = mysqli_query($conn, "SELECT * FROM user WHERE name='{$_SESSION['name']}'");

      $findresult = mysqli_query($conn, "SELECT * FROM user WHERE email='{$_SESSION['email']}'");
	  

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
    <link rel="stylesheet" href="css/style.css">
    
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

$sql="SELECT * FROM user WHERE name='{$_SESSION['name']}'";
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
            $stmt = mysqli_query($conn,"SELECT image FROM  user WHERE email='{$_SESSION['email']}'");
            $row = mysqli_fetch_array($stmt); 
            $deleteimage=$row['image'];
unlink($folder.$deleteimage);
move_uploaded_file($file, $folder . $new_image_name); 
mysqli_query($conn,"UPDATE user SET image='$file_name' WHERE email='{$_SESSION['email']}'");
          }
           $result = mysqli_query($conn,"UPDATE user SET name='$name' WHERE email='{$_SESSION['email']}'");
		   

           if($result)
           {
       header("location:viewprofile.php?profile_updated=1");
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
                <input  type="file" name="image" style="width:150%;" >
            </div>

  </center>
           </div>

             <div class="col">
             <p><a href="logout.php"><span style="color:red;">Logout</span> </a></p>
             <p><a href="userviewprofile.php"><span style="color:red;">Go Back</span> </a></p>
         </div>
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