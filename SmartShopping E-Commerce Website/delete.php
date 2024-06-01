<?php
// Database connection
$db = mysqli_connect("localhost", "root", "", "smartshopping");

// Check for product ID in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $query = "DELETE FROM productscrud WHERE id = $id";
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "Product deleted successfully.";
        // Redirect or display link back to product list
    } else {
        echo "Error deleting product.";
    }
} else {
    die("No product ID provided.");
}
?>
