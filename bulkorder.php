<?php

	session_start();
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];


	
	if (isset($_GET["farmer"])) {
		$farmer_name = $_GET["farmer"];
		$category = $_GET['category'];
	$productname = $_GET['productname'];
	$price = $_GET['price'];
	}
	
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	
	

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$address = $_POST['address'];
		$formername = $_POST['formername'];
	$category = $_POST['category'];
	$productname = $_POST['productname'];
	$qty = $_POST['qty'];


	$db = mysqli_connect("localhost", "root", "", "agrishop");


	
	$sql = "INSERT INTO bulkorder(name, email, address, category,productname, qty, formername, status ) VALUES('$name','$email','$address','$category','$productname','$qty','$farmer_name', 'booking')";

	// Execute query
	mysqli_query($db, $sql);
	
	
	
	 if ($db) {
		 
		 
		 $ms = "Bulk Order Placed Successfully!";
        	header("Location: bulkorder.php?ms=$ms");
		 

        }else {
        	$ms = "Failed to upload product!";
        	header("Location: bulkorder.php?ms=$ms");
        }
	
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<style>
	body {
	max-width: max-content;
	margin: auto;
	margin-Top : 80px;
	background-color :#BDEEC5;
	font-size:1.3em;
	}
		label {
        display: inline-block;
        width: 90px;
      }
	  #btn_s{
            width:300px;
			height:35px;
			background-color :#BDEEC5;
			font-size:16px;
			font-face:bold;
			
        }

        #btn_i {
            width:125px;
        }
		
</style>
</head>

<body>
	<div id="content">
		
        
      
									    
        
<form method="POST" action="">
		
		<fieldset style="padding:50px; border:3px solid #4238ca; background:#f6f8ff; align:center;">
		 
			<legend>Bulk Order Products</legend>

			<mark>
				<?php if (isset($_GET['ms'])) {
					echo $_GET['ms'];
					$category = $_POST['category'];
	$productname = $_POST['productname'];
				} ?>
			</mark>
            
              
                      	<div>
				<label>Farmer Name</label>
				<input type="text"
				       name="formername" value="<?php echo $farmer_name;?>" disabled>
                       

                       
			</div><br />  
			<div>
				<label>User Name</label>
				<input type="text"
				       name="name" value="<?php echo $name;?>" disabled>
                       

                       
			</div><br />
            
            
            <div>
				<label>Email</label>
				<input type="text"
				       name="email" value="<?php echo $email;?>" disabled>
			</div><br />
            <div>
				<label>Address</label>
				<input type="text"
				       name="address">
			</div><br />
			<div>
				<label>Category</label>
				<input type="text"
				       name="category" value="<?php echo $category;?>" disabled>
			</div><br />
            
            
            <!-- <div class="form-group col-md-3">
									<label for="category">Category</label>
									<select name="category" class="form-control" required>
										<option value=" " selected>Choose...</option>
										<option value="veg">Vegitables</option>
										<option value="fruits">Fruits</option>
										<option value="cool">Cool Drinks</option>

								</select>
								</div> -->
<br />
            
            <div>
				<label>Product Name</label>
				<input type="text"
				       name="productname" value="<?php echo $productname;?>"disabled>
			</div><br />
			
            
			
			





<script>

function calculate(){

var val1 = document.getElementById('val1').value;
var val2 = document.getElementById('val2').value;
var res = (parseFloat(val1)*parseFloat(val2))
document.getElementById("output").setAttribute('value',res);

//alert(res);

}


</script>

<div>
				<label>Price (per kg)</label>
				<input type="text" id="val1" value="<?php echo $price;?>" name="price" disabled> X
				
			</div><br />
 
				<div>
								<label>Quantity</label>
								
								<input type="text" id="val2" placeholder="Enter Quantity">
							</div><br />
			
							<div>
							<input type="button" value="Calculate" onclick="calculate();">
				
				
			</div><br />
			
			
							<div>
				<label>Total</label>
				
				<input type="text" id="output" value="" disabled>
				
			</div><br />

			
			
			 
            
			<input type="submit" value="Submit" id = "btn_s" name="upload"><br/></br>
			<div align="center">
			<a href="userorder.php">View Products</a>
			</div>
		</fieldset>
	</form>
        
        
	</div>
       
    
    
	
</body>

</html>
