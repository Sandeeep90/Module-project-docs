<?php
    include "header.php";?>
    
    <?php
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();

/* Calculate Cart Total Items */
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
$total_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
            

        }
    }
}



if(!empty($_POST["proceed_payment"])) {
    $name = $_POST ['name'];
	$email = $_POST ['email'];
    $address = $_POST ['address'];
    $city = $_POST ['city'];
    $zip = $_POST ['zip'];
    $country = $_POST ['country'];
    $state = $_POST ['state'];
	    // $cardname = $_POST ['cardname'];
		//     $cardnumb = $_POST ['cardnumb'];
		// 	    $emonth = $_POST ['emonth'];
		// 		    $eyear = $_POST ['eyear'];
		// 			    $cvv = $_POST ['cvv'];
                        
}
$order = 0;

    // if (! empty ($name) && ! empty ($address) && ! empty ($city) && ! empty ($zip) && ! empty ($country) && ! empty($email)  && ! empty($cardname) && ! empty($cardnumb) && ! empty($emonth) && ! empty($eyear) && ! empty($cvv)) {
       if (! empty ($name) && ! empty ($email) && ! empty ($address) && ! empty ($city) && ! empty ($zip) && ! empty ($country) && ! empty ($state)) {
    // able to insert into database
    
    $order = $shoppingCart->insertOrder ( $_POST, $member_id, $item_price);
    if(!empty($order)) {
        if (! empty($cartItem)) {
            if (! empty($cartItem)) {
                foreach ($cartItem as $item) {
                    $total_price = ($item["price"]*$item["quantity"]);
                    $shoppingCart->insertOrderItem ( $order, $item["id"], $item["price"], $item["quantity"], $total_price);
                }
            }
        }
    }
}
?>
<HTML>
<HEAD>
<TITLE>Pay now</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="stylecart.css" type="text/css" rel="stylesheet" />

<style>
body {
    max-width: 1550px;
    font-family: Arial;
}
#shopping-cart .txt-heading .txt-heading-label {
    margin-top: 5px;
    color: black;
}

</style>
</HEAD>
<BODY>
<div id="shopping-cart">
        <div class="txt-heading" style="margin: 48px 0px;">
            <div class="txt-heading-label">Shopping Cart</div>

            
            <div class="cart-status">
                <div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price:  <?php echo $item_price; ?></div>
            </div>
        </div>
        <?php
        if (! empty($cartItem)) {
            ?>
<?php
            require_once ("cart-list1.php");
            ?>
<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php if(!empty($order)) { ?>
    <!-- <form name="frm_customer_detail" action="index.php?action=empty" method="POST"> -->
        <form name="frm_customer_detail" action="shopping_payment.php" method="POST">
    <input type='hidden'
							name='business' value='YOUR_BUSINESS_EMAIL'> <input
							type='hidden' name='item_name' value='Cart Item'> <input
							type='hidden' name='item_number' value="<?php echo $order;?>"> <input
							type='hidden' name='amount' value='<?php echo $item_price; ?>'> <input type='hidden'
							name='currency_code' value='USD'> <input type='hidden'
							name='notify_url'
							value='http://yourdomain.com/shopping-cart-check-out-flow-with-payment-integration/notify.php'> <input
							type='hidden' name='return'
							value='http://yourdomain.com/shopping-cart-check-out-flow-with-payment-integration/response.php'> <input type="hidden"
							name="cmd" value="_xclick">  <input
							type="hidden" name="order" value="<?php echo $order;?>">
                            
                            
                            
                            
                            <br>

                            <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="<?php echo $total_price; ?>" data-id="1" style="    text-decoration: none;">Pay now</a> 
                



                            
                            
                            
                            
                            

    </form>
<?php } else { ?>


    

<div>

    </div>
<?php } ?>
</BODY>
</HTML>

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