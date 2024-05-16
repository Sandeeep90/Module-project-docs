<?php
    include "header.php";?><?php


require_once "ShoppingCart.php";
$name = $_SESSION['name'];
$email = $_SESSION['email'];



$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
?>
<HTML>
<HEAD>
<TITLE>Enriched Responsive Shopping Cart in PHP</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="stylecart.css" type="text/css" rel="stylesheet" />

<style>
body {
    max-width: 1550px;
    font-family: Arial;
}

</style>
</HEAD>
<BODY>
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }
}
?>
<div id="shopping-cart">
        <div class="txt-heading">
        <?php

//echo "Welcome".$_SESSION['name']; 
// echo "Welcome '" . $_SESSION['name'] . "'";
?>
            <!-- <div class="txt-heading-label">Shopping Cart</div>
            <div class="txt-heading-label"> <a href="homepageuser.php">Home</div></a>
                        <div class="txt-heading-label"> <a href="index.php">Go Back</div></a> -->

            <a id="btnEmpty" href="index.php?action=empty"><img
                src="images/empty-cart.png" alt="empty-cart"
                title="Empty Cart" class="float-right" /></a>
            <div class="cart-status">
                <div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price: $ <?php echo $item_price; ?></div>
            </div>
        </div>
        <?php
        if (! empty($cartItem)) {
            ?>
<?php
            require_once ("cart-list.php");
            ?>
<?php
        } // End if !empty $cartItem
        ?>

</div>
    
</BODY>
</HTML>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  
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
        margin: 10px 0;
        border: none;
        width: 100%;
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
</style>
</head>
<body>

<h2>Checkout Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">

          <form name="frm_customer_detail" action="process-order.php" method="POST">
          
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  name="name" value="<?php echo $name;?>" readonly required >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" value="<?php echo $email;?>" readonly required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="address" required >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text"  name="city" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" name="state" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" name="zip" required>
              </div>
              
              <div class="col-50">
               <label for="zip">Country</label>
                <input type="text" name="country" required>
            </div>
            </div>
          </div>

          <!-- <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" name="cardname" placeholder="Card Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" name="cardnumb" <input type="text"  name="cardnumb" placeholder="1111-2222-3333-4444" >
            <label for="expmonth">Exp Month</label>
            <input type="text" name="emonth" placeholder="11" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text"  name="eyear" placeholder="1111" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="111">
              </div>
            </div>
          </div> -->
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" name="proceed_payment">
        
        

      </form>
    </div>
  </div>
  
</div>
<style>
  h3 {
    font-size: 25px;
    color: black;
    font-weight: normal;
    line-height: 1.2em;
    padding: 34px 0 8px 0;
    letter-spacing: -1px;
}
label {
    margin-bottom: 10px;
    display: block;
    color: black;
}
.cart-info.title {
    width: 50%;
    text-align: left;
    color: #fff;
}
.cart-info {
    text-align: right;
    display: inline-block;
    width: 15%;
    font-size: 0.8em;
    color: #fff;
}
  </style>
</body>
</html>
