<?php require_once("config.php"); 
session_destroy(); 
header("location:firstpage.php"); 
?>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>