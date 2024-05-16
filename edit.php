<?php require_once("dp.php"); $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Farmer Edit</title>
	<style>

label{
	font-size: 12px !important;
}
h1.edit{
	font-size: 18px;
    background: #007bff;
    color: #fff;
    padding: 5px 10px;
	width: 100%;
}
.container{
	padding-right: 10px;
}
img {
    margin: 5px;
    width: 250px;
    height: 250px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-sec{
	margin: 0 auto;
}
.form-sec .form-control:hover{
	border-color: #448d07;
	box-shadow: 1px 2px 5px #ccc;
}
.form-sec .form-control:focus{
	outline:none;
	box-shadow: none;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 0.375rem 0.75rem;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
form {
    margin: 0px auto;
}
header .wrapper{
	background: #f4f4f4;
}
.wrapper{
	background: #fff;
}
</style>
</head>
<body>
<?php
    include "header1.php";?>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 0; margin-left: 501px;">
           
	<?php
		if(isset($_POST['update_submit']))
		{	
			$productname=$_POST['productname'];
						$price=$_POST['price'];
									$code=$_POST['code'];
									$category = $_POST['category'];

$folder = "images/";
$image_file=$_FILES['image']['name'];
 $file = $_FILES['image']['tmp_name'];
 $path = $folder . $image_file;  
 $target_file=$folder.basename($image_file);
 $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if($file!=''){
//Set image upload size 
    if ($_FILES["image"]["size"] > 500000) {
   $error[] = 'Sorry, your image is too large. Upload less than 500 KB in size.';
}
//Allow only JPG, JPEG, PNG & GIF 
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
}
if(!isset($error))
{
	if($file!='')
	{
		$res=mysqli_query($db,"SELECT* from tbl_product WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
unlink($folder.$deleteimage);
move_uploaded_file($file,$target_file); 
$result=mysqli_query($db,"UPDATE tbl_product SET image='$image_file',productname='$productname', price='$price', code='$code', category='$category' WHERE id=$id"); 
	}
	else 
	{
	$result=mysqli_query($db,"UPDATE tbl_product SET productname='$productname', price='$price', code='$code', category='$category' WHERE id=$id"); 	
	} 
if($result)
{
//  header("location:homepageformer.php?action=saved");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}


if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}

}
$res=mysqli_query($db,"SELECT* from tbl_product WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$image=$row['image']; 
$productname=$row['productname']; 
$price=$row['price']; 
$code=$row['code']; 
$category=$row['category']; 

}
	?> 
	<div class="container" style="width:500px; margin-top:0; margin-left:-13%">
		<h1 class="edit"> Edit Here !! </h1>
	<?php if(isset($update_sucess))
		{
		echo '<div class="success">Image Updated successfully</div>'; 
		} ?>
        
<form action="" method="POST" enctype="multipart/form-data" class="form-sec">
	<label>Image Preview </label><br>
	<img src="images/<?php echo $image;?>" height="100"><br>
	<label>Change Image </label>
	<input type="file" name="image" class="form-control">
	<label>Product Name</label>
	<input type="text" name="productname" value="<?php echo $productname;?>" class="form-control">
    
    	<label>Price</label>
    	<input type="text" name="price" value="<?php echo $price;?>" class="form-control">
        
        	<label>Prodeuct Code</label>
        	<input type="text" name="code" value="<?php echo $code;?>" class="form-control">
              

									<label for="category">Category</label>
                                    
									<select name="category" class="form-control">
										<option value="<?php echo $category;?>" selected><?php echo $category;?></option>
										<option value="veg">Vegitables</option>
										<option value="fruits">Fruits</option>
										<option value="cool">Cool Drinks</option>

								</select>

    <br/>
	<button name="update_submit" class="btn-primary">Update </button>
</form>
</div>
</body>
</html>