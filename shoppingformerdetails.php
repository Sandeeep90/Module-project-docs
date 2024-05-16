<?php require_once("dp.php"); $id=$_GET['orderid']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
	<title>User Address Details </title>
    
    
    
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


<?php
    include "header1.php";?>

<!-- <header class="customnav bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
<h2>Agri Shop for Former</h2>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto "> -->
									
									
									<?php
// session_start();
//echo "Welcome".$_SESSION['name']; 
// echo "Welcome '" . $_SESSION['name'] . "'";
?>
									&nbsp; &nbsp; 
									<!-- <li>  -->
										
											<!-- <a href="login.php"> Logout</a> -->
										
										
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
        
        <div>
        



		<!-- <div class="container_display"> -->
  
  
  
   <!-- <div class="dropdown">
<span style="float:right;">  <button class="btn-primary">Profile</button></span>
  <div class="dropdown-content">
     <a href="formerviewprofile.php">View Profile</a>
    <a href="formereditprofile.php">Edit Profile</a>
  </div></div>
  <a href="homepageformer.php"><span style="float:left;">  <button class="btn-primary">Home</button></span></a> &nbsp; 
  <a href="cartorder.php"><span style="float:left;">  <button class="btn-primary">Shopping cart order</button></span></a> &nbsp;
  <a href="formerorder.php"><span style="float:left;">  <button class="btn-primary">Order Page</button></span></a> &nbsp;
   -->
</div>

        
        
<!-- <div class="container_display">
		 -->
		<!-- <br><br> -->
        
        
	
	<table cellpadding="10">
		<tr>

			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>City</th>
            <th>State</th>
			<th>Zip</th>
			<th>Country</th>
			
			<th>Order Date</th>
			<!-- <th>Courier Status</th>
			<th>Action</th> -->
           
		</tr>
		<?php
		
//		 $res=mysqli_query($db,"SELECT* from tbl_product ORDER by id DESC");

$res=mysqli_query($db,"SELECT * from tbl_order WHERE id=$id");


		 
			while($row=mysqli_fetch_array($res)) 
			{
				echo '<tr> 
		
               
				
				  					<td>'.$row['name'].'</td> 
				                    <td>'.$row['address'].'</td>
									<td>'.$row['email'].'</td>
				                    <td>'.$row['city'].'</td>
									<td>'.$row['state'].'</td>
									<td>'.$row['zip'].'</td>
									<td>'.$row['country'].'</td>
									
									<td>'.$row['order_at'].'</td>
								
                  	
                  
				</tr>';
} 







?>
	</table>
	</div>
    
    



  
    
</body>
</html>













