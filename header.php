<?php
// Start the session at the beginning of the script
session_start();
require_once("dp.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.6.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/tms-0.3.js"></script>
  <script type="text/javascript" src="js/tms_presets.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <!--[if lt IE 9]>
  <script type="text/javascript" src="js/html5.js"></script>
  <style type="text/css">#menu a, .bg, .bg2, #ContactForm a {behavior:url("../js/PIE.htc")}</style>
  <![endif]-->
  <style>
    #page1 header {
      height: 570px;
    }
    body {
      background: #448d07;
      border: 0;
      font: 14px "Trebuchet MS", Arial, sans-serif;
      color: #fcfcfc;
      line-height: 22px;
    }
    .container_display {
      display: inline-block;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 8px 12px;
      border-radius: 4px;
      cursor: pointer;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }

    header {
    margin-top: 9px;
    height: 169px;
}
h4{
  padding: 10px 20px;
}
  </style>
</head>
<body>
  
  <?php
    // echo "<h4>Welcome '" . $_SESSION['name'] . "'</h4>";
  ?>
  <div class="body1" style="background-color: #f4f4f4; height: 90px;">
    <div class="main">
      <!--header -->
      <header>
        <div class="wrapper">
          <h1 style="color: black; font-size: xx-large; margin-top: 0; margin-left: 0;">
            <img src="../images/A2.png" style="margin-top: -25px; width: 60px; height: 60px;">
            Agrishop
          </h1>
          <nav>
            <ul id="menu">
              <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php">Home</a></li>
              <li class="<?= ($activePage == 'homepageuser') ? 'active':''; ?>"><a href="homepageuser.php">Bulk Orders</a></li>
              <li class="<?= ($activePage == 'vieworder') ? 'active':''; ?>"><a href="vieworder.php">Cart Orders</a></li>
              <li class="<?= ($activePage == 'userorder') ? 'active':''; ?>"><a href="userorder.php">My Orders</a></li>
              <li class="<?= ($activePage == 'userviewprofile') ? 'active':''; ?>"><a href="userviewprofile.php">Profile</a></li>
              <li class="<?= ($activePage == 'logout') ? 'active':''; ?>"><a href="logout.php">Logout</a></li>


            </ul>
          </nav>
        </div>
      </header>
    </div>
  </div>
 

</body>
</html>
