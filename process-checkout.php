<?php
require_once "ShoppingCart.php";

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
session_start();
//echo "Welcome".$_SESSION['name']; 
echo "Welcome '" . $_SESSION['name'] . "'";
?>
            <div class="txt-heading-label">Shopping Cart</div>
            <div class="txt-heading-label"> <a href="homepageuser.php">Home</div></a>
                        <div class="txt-heading-label"> <a href="index.php">Go Back</div></a>

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
    <form name="frm_customer_detail" action="process-order.php" method="POST">
    <div class="frm-heading">
        <div class="txt-heading-label">Customer Details</div>
    </div>
    <div class="frm-customer-detail">
        <div class="form-row">
            <div class="input-field">
                <input type="text" name="name" id="name"
                    PlaceHolder="Customer Name" required>
            </div>

            <div class="input-field">
                <input type="text" name="address" PlaceHolder="Address" required>
            </div>
        </div>

        <div class="form-row">
            <div class="input-field">
                <input type="text" name="city" PlaceHolder="City" required>
            </div>

            <div class="input-field">
                <input type="text" name="state" PlaceHolder="State" required>
            </div>
        </div>

        <div class="form-row">
            <div class="input-field">
                <input type="text" name="zip" PlaceHolder="Zip Code" required>
            </div>

            <div class="input-field">
                <input type="text" name="country" PlaceHolder="Country" required>
            </div>
        </div>
    </div>
    <div>
        <input type="submit" class="btn-action"
                name="proceed_payment" value="Proceed to Payment">
    </div>
    </form>
</BODY>
</HTML>