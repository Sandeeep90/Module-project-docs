<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?php
    include "header.php";?>
    
    <?php
require_once "ShoppingCart.php";



$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {
                
                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                
                if (! empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="stylecart.css" type="text/css" rel="stylesheet" />
<style>
body {
    max-width: 1550px;
    font-family: Arial;
}
#shopping-cart .txt-heading {
    border-top: #607d8b 0px solid;
    background: #448d07;
    border-bottom: #607d8b 0px solid;
    height: 44px;
    color: white;
    padding-top: 7px;
    margin-top: 0;
    overflow-y: hidden;
    margin-bottom: 0;

}
.cart-status {
    color: #fff;
    float: right;
    font-size: 0.8em;
    padding: 0px 10px;
    line-height: 18px;
}
.btn-action {
    /* margin: -68px 164px 0px; */
    padding: 7px 15px;
    font-size: 1em;
    background: #3a9ee0;
    border: #3590cc 1px solid;
    color: #FFF;
    cursor: pointer;
}
.align-right {
    margin-top: -18px;
    text-align: right;
}
.txt-heading {
    margin: 20px 0px;
    text-align: left;
    background: #cccccc;
    padding: 0px 10px;
    overflow: auto;
}
.top-head-section{
    display: flex;
    justify-content: space-between;
}
.btn-action {
    margin: 2px 0px 20px;
}

</style>
</head>
<body>
  
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

 
        <div class="txt-heading top-head-section">
            <!-- Search form -->
            <div>
                <form action="" method="GET" style="margin-top: 7px;">
                    <input type="text" name="query"style="height: 24px;" placeholder="Enter search ">
                    <button type="submit" style="height: 24px;">Search</button>
                </form>
            </div>
            <!-- <div class="txt-heading-label">Shopping Cart</div> -->
            <!-- <div class="txt-heading-label"><a href="homepageuser.php">Home</div></a> -->
           
            <div>
                <a id="btnEmpty" href="index.php?action=empty"><img src="images/empty-cart.png" alt="empty-cart"
                    title="Empty Cart" class="float-right" /></a>
                <div class="cart-status">
                    <div>Total Quantity: <?php echo $item_quantity; ?></div>
                    <div>Total Price: $ <?php echo $item_price; ?></div>
                </div>

                <a href="pay.php"><button class="btn-action" name="check_out"> Cart item</button></a>
            </div>
        </div>
        <?php
        if (! empty($cartItem)) {
            ?>
<!-- <?php
            require_once ("cart-list.php");
            ?>   -->
            <!-- <div class="align-right">
            <a href="pay.php"><button class="btn-action" name="check_out"> Checkout</button></a>
            </div> -->
<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php
require_once "product-list.php";
?>
    
    </body>
    </html>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
 $('#makeEditable').SetEditable({ $addButton: $('#but_add')});
</script>
