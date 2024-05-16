<div id="product-grid">
    <div class="txt-heading product">
        <div class="txt-heading-label">Products</div>
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agrishop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Search query
    $product_array = [];
    if(isset($_GET['query'])) {
        $search_query = $_GET['query'];
        $sql = "SELECT * FROM tbl_product WHERE productname LIKE '%$search_query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                $product_array[] = $row;
            }
        } else {
            echo "0 results found";
        }
    } else {
        // If no search query, retrieve all products
        $query = "SELECT * FROM tbl_product";
        $product_array = $shoppingCart->getAllProduct($query);
    }

    // Display products
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
    ?>
    <div class="product-item">
        <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
            <div class="product-image">
                <img src="images/<?php echo $product_array[$key]["image"]; ?>">
                <div class="product-title">
                    <?php echo $product_array[$key]["productname"]; ?>
                </div>
            </div>
            <div class="product-footer">
                <div class="float-right">
                    <input type="text" name="quantity" value="1" size="2" class="input-cart-quantity" />
                    <input type="image" src="images/add-to-cart.png" class="btnAddAction" />
                </div>
                <div class="product-price float-left"><?php echo "$".$product_array[$key]["price"]; ?></div>
            </div>
        </form>
    </div>
    <?php
        }
    }
    $conn->close();
    ?>
</div>


