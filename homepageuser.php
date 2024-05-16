<?php require_once("dp.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
	<title>Agri Shop For user </title>
    
    
    
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		
		

        
        
    <style>
    .foto_style img {
  width: 50px; 
  height:50px;
  margin-bottom: 10px;
}​

.container_display{
  border: none !important;
}


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
	/* Add this style to your existing styles */
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  border: 1px solid #aaa;
  padding: 10px; /* Adjust the padding as needed for spacing */
}

th {
  background: #eee;
}

.container_display {
  margin-left: 10%;
  padding: 10px;
  padding-right: 40px;
  border-radius: 4px;
}

	
	</style>






</head>
<body>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
include("header.php");
?>
        

        
<div class="container_display border-0 prod-section">
	
	<table cellpadding="10" class="product-table">
		<tr>

			<th> Image</th>
			<th>Product Name</th>
            <th>Product Code</th>
            
            <th>Price (perkg)</th>
                        <th>Category</th>

                    <th> Farmer Name</th>
                    <th> Action</th>
                    
            
		</tr>
		<?php
		
		 $res=mysqli_query($db,"SELECT* from tbl_product ORDER by id DESC");
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
                  
				</tr>';
} ?>
	</table>
	</div>
    
    


<style>
	.container_display {
    margin-left: 0;
    /* width: 1400px ; */
    padding: 10px 20px;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
}
</style>
  
    
</body>
</html>













