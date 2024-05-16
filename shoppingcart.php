<?php

			// session_start();
								
require_once "DBController.php";

class ShoppingCart extends DBController
{

    function getAllProduct()
    {
        $query = "SELECT * FROM tbl_product";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getMemberCartItem($member_id)
    {
        $query = "SELECT tbl_product.*, tbl_cart.id as cart_id,tbl_cart.quantity FROM tbl_product, tbl_cart WHERE 
            tbl_product.id = tbl_cart.product_id AND tbl_cart.member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProductByCode($product_code)
    {
        $query = "SELECT * FROM tbl_product WHERE code=?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $product_code
            )
        );
        
        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCartItemByProduct($product_id, $member_id)
    {
        $query = "SELECT * FROM tbl_cart WHERE product_id = ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCart($product_id, $quantity, $member_id)
    {
        $query = "INSERT INTO tbl_cart (product_id,quantity,member_id) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->insertDB($query, $params);
    }

    function updateCartQuantity($quantity, $cart_id)
    {
        $query = "UPDATE tbl_cart SET  quantity = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM tbl_cart WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function emptyCart($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }
    
    // function insertOrder($customer_detail,  $member_id, $amount)
    // {
    //     $id = $_SESSION['id'];
    //     $query = "INSERT INTO tbl_order (customer_id, amount, name, address, city, state, zip, country, email, cardname, cardnumb, emonth, eyear, cvv, payment_type, order_status,shipping_status, order_at, userid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,'$id')";
        
    //     $params = array(

          
    //         array(
    //             "param_type" => "i",
    //             "param_value" => $member_id
    //         ),
    //         array(
    //             "param_type" => "i",
    //             "param_value" => $amount
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["name"]
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["address"]
    //         ),
			
						
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["city"]
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["state"]
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["zip"]
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["country"]
    //         ),
			
						
			
	// 		 array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["email"]
    //         ),
			
			
	// 		array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["cardname"]
    //         ),
			
	// 		array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["cardnumb"]
    //         ),
			
	// 		array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["emonth"]
    //         ),
			
	// 		array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["eyear"]
    //         ),
			
	// 		array(
    //             "param_type" => "s",
    //             "param_value" => $customer_detail["cvv"]
    //         ),
			
    //         array(
    //             "param_type" => "s",
    //             "param_value" => "PAYPAL"
    //         ),
    //         array(
    //             "param_type" => "s",
    //             "param_value" => "COMPLETE"
    //         ),

    //         array(
    //             "param_type" => "s",
    //             "param_value" => "PENDING"
    //         ),

    //         array(
    //             "param_type" => "s",
    //             "param_value" => date("Y-m-d H:i:s")
    //         )
            
                    
    //     );
        
    //     $order_id = $this->insertDB($query, $params);
    //     return $order_id;
    // }



    function insertOrder($customer_detail,  $member_id, $amount)
    {
        $id = $_SESSION['id'];
        $query = "INSERT INTO tbl_order (customer_id, amount, name, address, city, state, zip, country, email, payment_type, order_status,shipping_status, order_at, userid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '$id')";
        
        $params = array(

          
            array(
                "param_type" => "i",
                "param_value" => $member_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $amount
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["name"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["address"]
            ),
		    array(
                "param_type" => "s",
                "param_value" => $customer_detail["city"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["state"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["zip"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["country"]
            ),
			
			array(
                "param_type" => "s",
                "param_value" => $customer_detail["email"]
            ),
			
			array(
                "param_type" => "s",
                "param_value" => "PAYPAL"
            ),
            array(
                "param_type" => "s",
                "param_value" => "COMPLETE"
            ),

            array(
                "param_type" => "s",
                "param_value" => "PENDING"
            ),

            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d H:i:s")
            )
            
                    
        );
        
        $order_id = $this->insertDB($query, $params);
        return $order_id;
    }
    
	
	
	
	
	
    function insertOrderItem($order, $product_id, $price, $quantity, $total_price)
    {
		

$name = $_SESSION['name'];
$id = $_SESSION['id'];
//			        $_SESSION['user_id'] = $row['id'];

        $query = "INSERT INTO tbl_order_item (order_id, product_id, item_price, quantity, name, userid, shipping_status, order_status, totalprice) VALUES (?, ?, ?, ?, '$_SESSION[name]', '$_SESSION[id]',?,?,?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $order
            ),
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $price
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            
            array(
                "param_type" => "s",
                "param_value" => "PENDING"
            ),

            array(
                "param_type" => "s",
                "param_value" => "COMPLETE"
            ),	
			  array(
                "param_type" => "i",
                "param_value" => $total_price
            )		
			
            );
        
        $this->insertDB($query, $params);
    }
    
    function insertPayment($order, $payment_status, $payment_response)
    {
        $query = "INSERT INTO tbl_payment(order_id, payment_status, payment_response) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $order
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_status
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_response
            )
        );
        
        $this->insertDB($query, $params);
    }
    
    function paymentStatusChange($order, $status) {
        $query = "UPDATE tbl_order SET  order_status = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $order
            )
        );
        
        $this->updateDB($query, $params);
    }
}
