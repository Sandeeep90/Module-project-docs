
<script>
	function MySuccessFn() {
		alert("Bulk Order Placed Successfully!");
		window.location = 'bulkorderpayment.php';
	}
</script>



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
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$cardname = $_POST['cardname'];
	$cardnumber = $_POST['cardnumb'];
	$expmonth = $_POST['emonth'];
	$expyear = $_POST['eyear'];
	$cvv = $_POST['cvv'];
	$formername = $_POST['formername'];
	$category = $_POST['category'];
	$productname = $_POST['productname'];
	$qty = $_POST['qty'];
	$total = $_POST['total'];
	$price = $_POST['price'];

	

	$db = mysqli_connect("localhost", "root", "", "agrishop");


	
	$sql = "INSERT INTO bulkorder(name, email, address, city, state, zip, cardname, cardnumb, emonth, eyear, cvv, formername, category,productname, qty, total, status, order_status, shipping_status, price) VALUES('$name','$email','$address','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv','$farmer_name','$category','$productname','$qty','$total', 'PENDING', 'COMPLETE','PENDING','$price')";

	// Execute query
	mysqli_query($db, $sql);
	
	
	
	 if ($db) {
		 
		 
		//  $ms = "Bulk Order Placed Successfully!";
        // 	header("Location: bulkorder.php?ms=$ms");
		echo "<script type= 'text/javascript'>MySucessFn();</script>";
		 

        }else {
        	$ms = "Failed to upload product!";
        	header("Location: bulkorder.php?ms=$ms");
        }
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

		.thanks {
		display: flex;
		position: absolute;
		top: 0;
		left: 0;
		z-index: 999;
		width: 100%;
		height: 100%;
		background: #FFF;
		justify-content: center;
		align-items: center;
		font-size: 2em;
		}

		.thanks:after {
		content: "Thanks";
		}

		.thanks-hidden {
		display: none;
		}

		body {
		font-family: Arial;
		font-size: 17px;
		padding: 8px;
		}

		* {
		box-sizing: border-box;
		}

		.row {
		display: -ms-flexbox; /* IE10 */
		display: flex;
		-ms-flex-wrap: wrap; /* IE10 */
		flex-wrap: wrap;
		margin: 0 -16px;
		}

		.col-25 {
		-ms-flex: 25%; /* IE10 */
		flex: 25%;
		}

		.col-50 {
		-ms-flex: 50%; /* IE10 */
		flex: 50%;
		}

		.col-75 {
		-ms-flex: 75%; /* IE10 */
		flex: 75%;
		}

		.col-25,
		.col-50,
		.col-75 {
		padding: 0 16px;
		}

		.container {
		background-color: #f2f2f2;
		padding: 5px 20px 15px 20px;
		border: 1px solid lightgrey;
		border-radius: 3px;
		}

		input[type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
		}

		label {
		margin-bottom: 10px;
		display: block;
		}

		.icon-container {
		margin-bottom: 20px;
		padding: 7px 0;
		font-size: 24px;
		}

		.btn {
    background-color: #04AA6D;
    color: white;
    padding: 12px;
    margin: 23px 201px;
    border: none;
    width: 50%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
}

		.btn:hover {
		background-color: #45a049;
		}

		a {
		color: #2196F3;
		}

		hr {
		border: 1px solid lightgrey;
		}

		span.price {
		float: right;
		color: grey;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
		@media (max-width: 800px) {
		.row {
			flex-direction: column-reverse;
		}
		.col-25 {
			margin-bottom: 20px;
		}
		}
		h2 {
    font-size: 35px;
    color: #fff;
    line-height: 1.2em;
    padding: 23px 13px 21px 200px;
    font-weight: normal;
    letter-spacing: -2px;
}
		
</style>


</head>
<body>

<?php
include("header.php");
?>

<h2>Checkout Form</h2>

<div class="row" style="    margin-left: 213px;">
		<form method="POST" action="">
			<div class="col-75">
				<div class="container">
					

								
					
								<div class="row">
								<div class="col-50">
									<h3 style="color:black;">Billing Address</h3>
									<label for="fname" style="color:black;"><i class="fa fa-user"></i> Full Name</label >
									
									<input type="text" name="name" value="<?php echo $name;?>" readonly>
									<label for="email" style="color:black;"><i class="fa fa-envelope"></i> Email</label>
									<input type="text" name="email" value="<?php echo $email;?>" readonly>
									<label for="adr" style="color:black;"><i class="fa fa-address-card-o"></i> Address</label>
									<input type="text" id="adr" name="address" placeholder="address" required>
									<label for="city" style="color:black;"><i class="fa fa-institution"></i> City</label>
									<input type="text" id="city" name="city" placeholder="city" required>

									<div class="row">
									<div class="col-50">
										<label for="state" style="color:black;">State</label>
										<input type="text" id="state" name="state" placeholder="state" required>
									</div>
									<div class="col-50">
										<label for="zip" style="color:black;">Zip</label>
										<input type="text" id="zip" name="zip" placeholder="code" required>
									</div>
									</div>
								</div>

									<div class="col-50">
										<!-- <h3>Payment</h3>
										<label for="fname">Accepted Cards</label>
										<div class="icon-container">
											<i class="fa fa-cc-visa" style="color:navy;"></i>
											<i class="fa fa-cc-amex" style="color:blue;"></i>
											<i class="fa fa-cc-mastercard" style="color:red;"></i>
											<i class="fa fa-cc-discover" style="color:orange;"></i>
										</div>
										<label for="cname">Name on Card</label>
										<input type="text" id="cname" name="cardname" placeholder="John More Doe">
										<label for="ccnum">Credit card number</label>
										<input type="text" id="ccnum" name="cardnumb" placeholder="1111-2222-3333-4444">
										<label for="expmonth">Exp Month</label>
										<input type="text" id="expmonth" name="emonth" placeholder="September">
										<div class="row">
											<div class="col-50">
												<label for="expyear">Exp Year</label>
												<input type="text" id="expyear" name="eyear" placeholder="2018">
											</div>
											<div class="col-50">
												<label for="cvv">CVV</label>
												<input type="text" id="cvv" name="cvv" placeholder="352">
											</div>
										</div> -->
										<div class="container">

						<mark>
							<?php if (isset($_GET['ms'])) {
							echo $_GET['ms'];
							$category = $_POST['category'];
							$productname = $_POST['productname'];
							} ?>
						</mark>
							<div>
								<label style="color:black;">Farmer Name</label>
								<input type="text"
									name="formername" value="<?php echo $farmer_name;?>" readonly>
							</div><br />  
							<div>
								<label style="color:black;">Product Name</label>
								<input type="text"
									name="productname" value="<?php echo $productname;?>"readonly>
							</div><br />
							<div>
								<label style="color:black;">Category</label>
								<input type="text"
									name="category" value="<?php echo $category;?>" readonly>
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
									<label style="color:black;">Price (per kg)</label>
									<input type="text" id="val1" value="<?php echo $price;?>" name="price" readonly> X
									
								</div><br />
								<div>
													<label style="color:black;">Quantity</label>
													
													<input name="qty" type="text" id="val2" placeholder="Enter Quantity" required>
								</div><br />
							
								<div>
												<input type="button" value="Calculate" onclick="calculate();">
									
									
								</div><br />
							
								<div>
									<label style="color:black;">Total</label>
									
									<input name="total" type="text" id="output" value="" readonly >
									
								</div><br />
							
					
					</div>
									</div>
								
								</div>
								
								
				
				</div>
			</div>
  
 
			<!-- <div class="col-25">
					<div class="container">

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
									name="formername" value="<?php echo $farmer_name;?>" readonly>
							</div><br />  
							<div>
								<label>Product Name</label>
								<input type="text"
									name="productname" value="<?php echo $productname;?>"readonly>
							</div><br />
							<div>
								<label>Category</label>
								<input type="text"
									name="category" value="<?php echo $category;?>" readonly>
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
									<input type="text" id="val1" value="<?php echo $price;?>" name="price" readonly> X
									
								</div><br />
								<div>
													<label>Quantity</label>
													
													<input name="qty" type="text" id="val2" placeholder="Enter Quantity">
								</div><br />
							
								<div>
												<input type="button" value="Calculate" onclick="calculate();">
									
									
								</div><br />
							
								<div>
									<label>Total</label>
									
									<input name="total" type="text" id="output" value="" readonly>
									
								</div><br />
							
					
					</div>
			</div> -->
			<input type="submit" value="submit" class="btn" name="upload">
			
		</form>	
		
</div>

</body>
</html>
