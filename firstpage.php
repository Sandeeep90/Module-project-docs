<!DOCTYPE html>
<html lang="en">
<head>
<title>Agrishop</title>
<meta charset="utf-8">
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
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #EEECEB;
}
footer{
  position: ;
  background: #140B5C;
  width: 100%;
  bottom: 0;
  left: 0;
}
footer::before{
  content: '';
  position: absolute;
  left: 0;
  top: 100px;
  height: 1px;
  width: 100%;
  background: #AFAFB6;
}
footer .content{
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}
footer .content .top{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}
.content .top .logo-details{
  color: #fff;
  font-size: 30px;
}
.content .top .media-icons{
  display: flex;
}
.content .top .media-icons a{
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
  background: #4267B2;
}
.top .media-icons a:nth-child(1):hover{
  color: #4267B2;
  background: #fff;
}
.top .media-icons a:nth-child(2){
  background: #1DA1F2;
}
.top .media-icons a:nth-child(2):hover{
  color: #1DA1F2;
  background: #fff;
}
.top .media-icons a:nth-child(3){
  background: #E1306C;
}
.top .media-icons a:nth-child(3):hover{
  color: #E1306C;
  background: #fff;
}
.top .media-icons a:nth-child(4){
  background: #0077B5;
}
.top .media-icons a:nth-child(4):hover{
  color: #0077B5;
  background: #fff;
}
.top .media-icons a:nth-child(5){
  background: #FF0000;
}
.top .media-icons a:nth-child(5):hover{
  color: #FF0000;
  background: #fff;
}
footer .content .link-boxes{
  width: 100%;
  display: flex;
  justify-content: space-between;
}
footer .content .link-boxes .box{
  width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name{
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}
.link-boxes .box .link_name::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}
.content .link-boxes .box li{
  margin: 6px 0;
  list-style: none;
}
.content .link-boxes .box li a{
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease
}
.content .link-boxes .box li a:hover{
  opacity: 1;
  text-decoration: underline;
}
.content .link-boxes .input-box{
  margin-right: 55px;
}
.link-boxes .input-box input{
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #AFAFB6;
  background: #140B5C;
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}
.link-boxes .input-box input::placeholder{
  color: #AFAFB6;
  font-size: 16px;
}
.link-boxes .input-box input[type="button"]{
  background: #fff;
  color: #140B5C;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}
.input-box input[type="button"]:hover{
  opacity: 1;
}
footer .bottom-details{
  width: 100%;
  background: #0F0844;
}
footer .bottom-details .bottom_text{
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a{
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}
.bottom-details .bottom_text a:hover{
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a{
  margin-right: 10px;
}
@media (max-width: 900px) {
  footer .content .link-boxes{
    flex-wrap: wrap;
  }
  footer .content .link-boxes .input-box{
    width: 40%;
    margin-top: 10px;
  }
}
@media (max-width: 700px){
  footer{
    position: relative;
  }
  .content .top .logo-details{
    font-size: 26px;
  }
  .content .top .media-icons a{
    height: 35px;
    width: 35px;
    font-size: 14px;
    line-height: 35px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 3 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 60%;
  }
  .bottom-details .bottom_text span,
  .bottom-details .bottom_text a{
    font-size: 12px;
  }
}
@media (max-width: 520px){
  footer::before{
    top: 145px;
  }
  footer .content .top{
    flex-direction: column;
  }
  .content .top .media-icons{
    margin-top: 16px;
  }
  footer .content .link-boxes .box{
    width: calc(100% / 2 - 10px);
  }
  footer .content .link-boxes .input-box{
    width: 100%;
  }
}
</style>

</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!--header -->
    <header>
      <div class="wrapper">
        <h1 style="    color: black;
    font-size: xx-large;
    margin-top: 15px;
    margin-left: 30px;"><img src="../images/A2.png" style="    margin-top: -22px;
    width: 60px;
    height: 60px;
}">Agrishop</h1>
        <nav>
            <ul id="menu">
              <!-- <li class="active"><a href="firstpage.php">Home</a></li> -->
              <li><a href="login.php">Login</a></li>
              <li><a href="user_register.php">User Register</a></li>
            <li><a href="former_register.php">Farmer Register</a></li>
            <!-- <li><a href="pricing.html">Pruser_register.phpicing</a></li> -->
            </ul>
          </nav>
      </div>
      <div class="slider_bg">
        <div class="slider">
          <ul class="items">
            <li><img src="images/img1.jpg" alt=""></li>
            <li><img src="images/img2.jpg" alt=""></li>
            <li><img src="images/img3.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <!-- <h2>About us</h2> -->
        
      </div>
    </article>
  </div>
</div>
<!-- <footer> -->
<div class="body2">
  <div class="main">
    <article id="content2">
      <div class="wrapper">
        <section class="col2">
        <h2>About us</h2>
        
          <h2>"Let nature's bounty nourish you, effortlessly." </h2>
          <div class="testimonials">
            <p class="quot">Agri Shop is a platform for both farmers and customers to sell and buying the products with affordable price.Compare prices across different online platforms to ensure competitive pricing.  <img src="images/quot2.png" alt=""></p>
          </div>
          <p class="pad_bot1"><em class="font1 color1">Advantages:</em></p>
          <div class="wrapper">
            <section class="col4">
              <ul class="list1">
                <li><a href="#">Quality</a></li>
                <li><a href="#">Price efficient </a></li>
                <li><a href="#">Customization</a></li>
                <li><a href="#">Freshness</a></li>
                <li><a href="#">Convenience</a></li>
                <!-- <li><a href="#">Track Traktors</a></li> -->
              </ul>
            <!-- </section>
            <section class="col4 pad_left1">
              <ul class="list1">
                <li><a href="#">Lawn &amp; Garden</a></li>
                <li><a href="#">Seeding &amp; Tillage</a></li>
                <li><a href="#">Power Generation</a></li>
                <li><a href="#">Pre-Owned Equipment</a></li>
                <li><a href="#">Commercial Grounds</a></li>
                <li><a href="#">Articulated</a></li>
              </ul> -->
            </section>
          </div>
        </section>
        <!-- <section class="col3 pad_left2">
          <h2>Our Products</h2>
          <div class="wrapper pad_top1">
            <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
            <p><span class="font1 color2">Tomato</span><br>
              Quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni minima veniam nostrum exercitationem ullam. &nbsp; <a href="#" class="link1"></a> </p>
          </div>
          <div class="wrapper">
            <figure class="left marg_right1"><img src="images/page1_img2.jpg" alt=""></figure>
            <p><span class="font1 color2">Sweet Pepper</span><br>
              Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur voluptate velit esse quam molestiae consequatur. &nbsp; <a href="#" class="link1"></a> </p>
          </div>
          <div class="wrapper">
            <figure class="left marg_right1"><img src="images/page1_img3.jpg" alt=""></figure>
            <p><span class="font1 color2">Cucumber</span><br>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi. &nbsp; <a href="#" class="link1"></a> </p>
          </div> -->
        </section>
      </div>
    </article>
    <!-- / content -->
  </div>
</div>
<div class="main">
 
</div>
<!-- <footer> -->

<footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">Agrishop</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Menu</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">My Cart</a></li>
          <li><a href="#">My Orders</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Advantages</li>
          <li><a href="#">Quality</a></li>
          <li><a href="#">Price efficient</a></li>
          <li><a href="#">Customization</a></li>
          <li><a href="#">Freshness</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">Farmer</a></li>
          <li><a href="#">Customer</a></li>
          <!-- <li><a href="#">Purchase</a></li> -->
        </ul>
        <!-- <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li> -->
          <!-- <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li> -->
        <!-- </ul> -->
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2024 <a href="#">Agrishop.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>
</body>
</html>