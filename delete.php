<?php require_once("dp.php"); 
$id=$_GET['id']; 
		$res=mysqli_query($db,"SELECT* from tbl_product WHERE id=$id limit 1");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['image']; 
}
$folder="images/";
unlink($folder.$deleteimage);
$result=mysqli_query($db,"DELETE from tbl_product WHERE id=$id") ; 
if($result)
{
	 header("location:homepageformer.php?action=deleted");
}
?> 