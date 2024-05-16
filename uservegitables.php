<?php
    include "header.php";?>


<?php
 require_once"ShoppingCart.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
	<title>Agri Shop For User </title>
    
    
    
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		
		

        
        
    <style>
    .foto_style img {
  width: 50px; 
  height:50px;
}​




/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

</style>


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
        
	<style>
		table, tr, th, td {
			border: 1px solid #aaa;
			border-collapse: collapse;
			padding: 5px;
		}
		th {background: #eee}
		
	
	</style>





</head>

<body>




<!-- <header class="customnav bg-success">
			<div class="container" style="background-color: #28a745; border-width: 0px;">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
<h2 style="color:white;">Agri Shop for User</h2>
							<div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:white;">
								<ul class="navbar-nav ml-auto "> -->
									
									
									<?php
// session_start();
// //echo "Welcome".$_SESSION['name']; 
// echo "Welcome '" . $_SESSION['name'] . "'";

?>
									&nbsp; &nbsp; 
									<li> 
										
											<a href="http://localhost/farmershopping/login.php"> Logout</a>
										
										
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
       
       
       <!-- <div class="container_display">
    
        <div class="dropdown"> -->
<!-- <span style="float:right; margin:4px;">  <button class="btn-primary">Category</button></span>
  <div class="dropdown-content">
     <a href="homepageuser.php">Show All</a>
    <a href="uservegitables.php">Vegitables</a>
    <a href="userfruits.php">Fruits</a>
    <a href="usercooldrinks.php">Cool drinks</a>
  </div></div> -->
  

        
        
<!-- <a href="index.php"><span style="float:left; margin:4px;">  <button class="btn-primary">Shopping</button></span></a> &nbsp;
<a href="userorder.php"><span style="float:left; margin:4px;">  <button class="btn-primary">Order Page</button></span></a> &nbsp;


     <div class="dropdown">
<span style="float:right;margin:4px;">  <button class="btn-primary">Profile</button></span>
  <div class="dropdown-content">
     <a href="userviewprofile.php">View Profile</a>
    <a href="usereditprofile.php">Edit Profile</a>
  </div></div></div> -->
       
       
<!-- <div class="container_display"> -->
		
		<br><br>
	<?php 
	if(isset($_GET['image_success']))
		{
		echo '<div class="success">Image Uploaded successfully</div>'; 
		}

		if(isset($_GET['action']))
		{
    $action=$_GET['action'];
	if($action=='saved')
	{
		echo '<div class="success">Saved </div>'; 
	}
	elseif($action=='deleted')
	{
		echo '<div class="success">Image Deleted Successfully ... </div>'; 
	}
		}
	?>
	<table cellpadding="10">
		<tr>
			<th> Image</th>
			<th>Product Name</th>
            <th>Product Code</th>
            
            <th>Price</th>
                        <th>Category</th>

                    <th> Farmer Name</th>
                    <th> Action</th>
                    
		</tr>
		<?php
//		echo "Welcome '" . $_SESSION['name'] . "'";


//		 $res=mysqli_query($db,"SELECT * from product where name='" . $_SESSION['name'] . "' AND category='veg'");
		 $res=mysqli_query($db,"SELECT * from tbl_product where category='veg'");
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
                  <td class="foto_style"><img src="images/'.$row['image'].'" height="200"></td> 
                  <td>'.$row['productname'].'</td> 
				                    <td>'.$row['code'].'</td> 
				                    <td>'.$row['price'].'</td> 
													<td>'.$row['category'].'</td> 

													   <td>'.$row['name'].'</td> 
													   <td><a href="bulkorderpayment.php?id='.$row['id'].'&farmer='.$row['name'].'&category='.$row['category'].'&productname='.$row['productname'].'&price='.$row['price'].'"><button class="btn-primary">Bulk Order </button></a>
													   <br> 
                  	 
                  </td> 
				</tr>';
} ?>
		
	</table>
	</div>

	<style>
	.container_display {
    margin-left: 10%;
    /* width: 1400px ; */
    padding: 10px;
    padding-right: 40px;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
	margin-top: 41px;
}
</style>
</body>
</html>