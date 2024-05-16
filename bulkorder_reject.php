<header class = "bg-success">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
	
	<script>
		function MySucessFn(){
			swal({
				title: "User Order Rejected!",
				text: "",
				type: "success",
				
				showConfirmButton: true,
			},
			window.load = function(){
				window.location='formerorder.php';
			});
		}
		
	</script>
</header>





<?php  $id=$_GET['id']; 

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrishop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE bulkorder SET status='REJECT',order_status='REFUND',shipping_status='REJECT' WHERE id=$id";


if ($conn->query($sql) === TRUE) {
//  echo "Order Accept Successfully";

echo "<script type= 'text/javascript'>MySucessFn();</script>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


