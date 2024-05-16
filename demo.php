<!-- search-results.php -->
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
if(isset($_GET['productname'])) {
    $search_query = $_GET['productname'];
    $sql = "SELECT * FROM  tbl_product WHERE productname LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
            // Display other columns as needed
        }
    } else {
        echo "0 results found";
    }
}

$conn->close();
?>


<!-- search-form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Form</title>
</head>
<body>
    <form action="search-results.php" method="GET">
        <input type="text" name="query" placeholder="Enter search keyword">
        <button type="submit">Search</button>
    </form>
</body>
</html>
