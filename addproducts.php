<?php
 require_once"ShoppingCart.php";
	session_start();
	$name = $_SESSION['name'];
	
	
	
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {


	$image = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./images/" . $image;
	
	$productname = $_POST['productname'];
	
	$code = $_POST['code'];

	$price = $_POST['price'];


	$name = $_SESSION['name'];
	$id = $_SESSION['id'];
	
	
	$category = $_POST['category'];
	

	$db = mysqli_connect("localhost", "root", "", "agrishop");


	
	$sql = "INSERT INTO tbl_product(productname, price, code, image, name, category, formerid) VALUES('$productname','$price','$code','$image','$name','$category', '$id')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Product Added Successfully!</h3>";
	} else {
		echo "<h3> Failed to upload product!</h3>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Products</title>
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
	<style>
	body {
	max-width: max-content;
	margin: auto;
	margin-Top : 80px;
	background-color :#BDEEC5;
	font-size:1.3em;
	overflow-x: hidden;
	}
		label {
        display: inline-block;
        width: 90px;
      }
	  #btn_s{
            width:300px;
			height:35px;
      background-color: #6fc428;
			font-size:16px;
			font-face:bold;
			
        }

        #btn_i {
            width:125px;
        }
		/* #menu {
    float: right;
    padding: 71px 16px 0 0;
    width: 665px; 
}*/
h4 {
	width: 98%;
    position: relative;
    top: -75px;
    padding-left: 20px;
}
.wrapper {
    width: 100%;
    overflow: hidden;
    width: 1148px;
}
body {
    max-width: max-content;
    margin: auto;
    margin-Top: 80px;
    background-color: white;
    font-size: 1.3em;
}
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
#menu {
    float: right;
    padding: 20px 0 0 0;
    margin-right: 0;
}
#menu li a {
    display: block;
    font-size: 16px;
    color: #130c04;
    text-decoration: none;
    line-height: 42px;
    height: 43px;
    padding: 0 19px;
    border-radius: 8px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    position: relative;
    background: url(../images/spacer.gif) repeat;
    margin-left: -7px;
}
.wrapper {
    width: 100%;
    overflow: hidden;
    width: 1270px;
    margin-left: -79px;
}
* {
    border: none;
    background-color: #6fc428;
}
.add-prod {
  padding: 33px 52px;
    border: 1px solid #448d07;
    background: #f6f8ff;
    margin: 20px auto;
    width: 94px;
}
{
    background-color: #f4f4f4;
    height: 90px;
    margin-top: -70px;
    width: 1287px;
}
</style>
</head>

<body>


<?php
  // echo "<h4>Welcome '" . $_SESSION['name'] . "'</h4>";
  ?>
  <div class="body1" style="background-color: #f4f4f4; height: 90px;  margin-top:-70px; width:1263px;">
    <div class="main">
      <!--header -->
      <header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 15px; margin-left: 80px; font-weight:500;">
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
  

              <li><a href="cartorder.php">Cart order</a></li>
              <li><a href="formerorder.php">Bulk Orders</a></li>
              <li class="active"><a href="addproducts.php">Add Products</a></li>
              <li><a href="formerviewprofile.php">Profile</a></li>
              
              <!-- <li><a href="userviewprofile.php">Profile</a></li> -->
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </nav>
        </div>
      </header>
    </div>
  </div> 

<div class="wrapper">
          <!-- <h1 style="color: black; font-size: xx-large; margin-top: 4px; margin-left: 30px;">
            <img src="../images/A2.png" style="margin-top: -22px; width: 60px; height: 60px;margin-left: 396px;margin-bottom: -16px">
            Agrishop -->
									    
        
<form method="POST" action="" style="width: 1360px;" enctype="multipart/form-data">
<fieldset class="add-prod">
		 
		 <!-- <legend style="color:black;background: #f6f8ff;padding: 5px 10px;border-top: 3px solid #4238ca;">Add Products</legend> -->


			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
				} ?>
			</mark>
            
            <div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" style="color:black;" />
			</div>
            
			<div>
				<label style="color:black;">Product Name </label>
				<input type="text"
				       name="productname">
			</div>
			
			
			
			<div>
				<label style="color:black;">Price</label>
				<input type="text"
				       name="price">
			</div>
            
            
            <div>
				<label style="color:black;">Product Code</label>
				<input type="text"
				       name="code">
			</div>
            
			
            
            
           <div class="form-group col-md-3">
									<label for="category" style="color:black;">Category</label>
									<select name="category" class="form-control"style="width: 185px;">
										<option value=" " selected>Choose...</option >
										<option value="veg">Vegitables</option>
										<option value="fruits">Fruits</option>
										<!-- <option value="cool">Cool Drinks</option> -->

								</select>
								</div>
			
            
			<input type="submit" value="Submit" id = "btn_s" name="upload"><br/></br>
			<div align="center" style="margin-bottom: 0;">
			<a href="homepageformer.php" style="color:black;">View Products</a>
			</div>
		</fieldset>
	</form>
        
        
	</div>
       
    
    
	
</body>

</html>
