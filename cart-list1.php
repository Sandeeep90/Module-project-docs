
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
$total_quantity = 0;
$total_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        
    }
}
?>

<div class="shopping-cart-table">
        <div class="cart-item-container header">
            <div class="cart-info title">Title</div>
            <div class="cart-info">Quantity</div>
            <div class="cart-info">Unit Price</div>
            <div class="cart-info">Total</div>
        </div>
<?php
            foreach ($cartItem as $item) {
                $item_price = ($item["price"] * $item["quantity"]);
                ?>
				<div class="cart-item-container">
            <div class="cart-info title">
                <img class="cart-image"
                    src="images/<?php echo $item["image"]; ?>">
                    <?php echo $item["productname"]; ?>
                </div>

            <div class="cart-info">
                        <?php echo $item["quantity"]; ?>
                    </div>

            <div class="cart-info">
                        <?php echo "".$item["price"]; ?>
                    </div>
                    <div class="cart-info">
                    <?php echo " ". number_format($item_price,2); ?>
                    </div>

            
                    <?php
				 $total_quantity += $item["quantity"];
                 $total_price += ($item["price"]*$item["quantity"]);
            
		
		?>
                    
                   
             

           
        </div>
				<?php
            }
            ?>
</div>
