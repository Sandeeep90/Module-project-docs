


<?php
 require_once"ShoppingCart.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="style.css">
	<title>User Order Page </title>
    
    
    
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		
		

        
        
    <style>
    .foto_style img {
  width: 50px; 
  height:50px;
}
.product-table .btn-danger{
  margin-right:0;
}
a {
  text-decoration: none !important;
}

.product-table tr td a {
  margin-bottom: 10px;
}
.btn-danger{
  width: 75px;
  margin-right: 0;
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
body {
    overflow-x: hidden;
    background: #448d07;
    border: 0;
    font: 14px "Trebuchet MS", Arial, sans-serif;
    color: #fcfcfc;
    line-height: 22px;
}


	.container_display {
    margin-left: 10%;
    /* width: 1400px ; */
    padding: 10px;
    padding-right: 40px;
    /* border: 1px solid #ccc; */
    border-radius: 4px;
	margin-left: 10px;
	margin-top: 41px;
	
}
.product-table tr td {
    padding-bottom: 5px;
}
table, table td {
    padding: 0;
    border: none;
    border-collapse: collapse;
    padding-right: 27px;
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
		th {background: #eee; margin-bottom: 10px;}
		
    .product-table tr th {
       margin-bottom: 10px;
      }
	</style>



</head>
<body>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<?php
include("header.php");
?>

<!-- <header class="customnav bg-success">
			<div class="container" style="background-color: #28a745; border-width: 0px;">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
 <h2  style="color:white;">User Order Page</h2>
							<div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:white;">
								<ul class="navbar-nav ml-auto ">
									
									
									
									&nbsp; &nbsp; 
									<li> 
										
											<a href="login.php"> Logout</a>
										
										
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>	 &nbsp;&nbsp;	
        
        <div>-->
        

<!-- <div class="container_display">
    
 
        
        
<a href="index.php"><span style="float:left; margin:4px;">  <button class="btn-primary">Shopping</button></span></a> &nbsp;
<a href="vieworder.php"><span style="float:left; margin:4px;">  <button class="btn-primary">View Cart</button></span></a> &nbsp;
<a href="homepageuser.php"><span style="float:left;margin:4px;">  <button class="btn-primary">Home</button></span></a> &nbsp;


     <div class="dropdown">
<span style="float:right;margin:4px;">  <button class="btn-primary">Profile</button></span>
  <div class="dropdown-content">
     <a href="userviewprofile.php">View Profile</a>
    <a href="usereditprofile.php">Edit Profile</a>
  </div></div></div>

	 -->
<div class="prod-section">
		
		<br/>
	<table class="product-table" style="    text-align: center;">
		<tr>
			<th>Date</th>
			<th>Farmer </th>
			<th>User</th>
			<th>Email</th>
			<th>Address</th>
			<th>City</th>
			<!-- <th>State</th> -->
			<th>PinCode</th>
			<th>Category</th>
            <th>Product Name</th>
			<th> Price</th>
            <th> Kg(s)</th>
			<th>TotalPrice</th>
            <th> Status</th>
			<th> Action</th>
		
            
		</tr>
		<?php $res=mysqli_query($db,"SELECT* from bulkorder WHERE name='{$_SESSION['name']}'");
			
			while($row=mysqli_fetch_array($res)) 
			{
	echo '<tr> 
	<td>'.$row['order_at'].'</td> 
	<td>'.$row['formername'].'</td> 
	<td>'.$row['name'].'</td> 
	<td>'.$row['email'].'</td> 
	<td>'.$row['address'].'</td> 
	<td>'.$row['city'].'</td> 
	
	<td>'.$row['zip'].'</td> 
	<td>'.$row['category'].'</td> 
    <td>'.$row['productname'].'</td> 
	<td>'.$row['price'].'</td>
    <td>'.$row['qty'].'</td>  
	<td>'.$row['total'].'</td> 
    <td>'.$row['status'].'</td>
	
	<td>';

	
if ($row['status'] == 'Accept') {
    echo '<a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="' . $row['total'] . '" data-id="1">Pay Now</a>';
} elseif ($row['status'] == 'Rejected') {
    echo '<button class="btn btn-sm btn-danger float-right">Reject</button>';
} 

echo '</td></tr>';
	         
				
} ?>
		
	</table>
	</div>
	</div>
    
 
  
    
</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "AGRISHOP",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'proccess_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>
<script src=""></script>
<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_MGWGsjkJ3Kthbl", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "AGRISHOP",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'process_payment.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
</body>
</html>










