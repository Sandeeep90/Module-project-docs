<?php
session_start();

include_once 'config.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
//	$name = $_POST["name"];


    $email = $_POST['email'];
    $password = $_POST['password'];
	
	
	  $message = "Login failed. Invalid Email or Password.";
	 $message2 = "Login successful";

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
	
	
	
	 if (mysqli_num_rows($result) == 1) {
		 

        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
		


        if ($row['role'] == 'former') {
			
			  echo "<script type='text/javascript'>alert('$message2');window.location.href='homepageformer.php';</script>";
//            header("Location: lawyer_register.php");
	//					$_SESSION["firstname"] = $name;
	
	        $_SESSION['id'] = $row['id'];
	$_SESSION["name"] = $row["name"];
	$_SESSION["email"] = $row["email"];

        } else {





			echo "<script type='text/javascript'>alert('$message2');window.location.href='index.php';</script>";
		//	$_SESSION["firstname"] = $name;
		        $_SESSION['id'] = $row['id'];
			$_SESSION["name"] = $row["name"];
			$_SESSION["email"] = $row["email"];
			
		        }
    } else {
		
		

//     header("location:http://localhost/agrishop/login.php?loginerror=".$email);

echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
        
    }
}




?>