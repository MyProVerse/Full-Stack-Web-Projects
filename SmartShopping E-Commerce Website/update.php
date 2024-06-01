<?php
// Database connection
$db = mysqli_connect("localhost", "root", "", "smartshopping");

// Check for product ID in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productscrud WHERE id = $id";
    $result = mysqli_query($db, $query);

    if ($result) {
        $product = mysqli_fetch_assoc($result);
    } else {
        die("Product not found.");
    }
} else {
    die("No product ID provided.");
}

// Check if form is submitted
if (isset($_POST['update'])) {
    // Fetch form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image'];

    // Update query
    $query = "UPDATE productscrud SET name = '$name', description = '$description', price = $price, category_id = $category_id, image = '$image' WHERE id = $id";
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "<div class='alert alert-success'>Product updated successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error updating product.</div>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">
    <h2>Update Product</h2>
    <form method="post" class="mt-4">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $product['name']; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="<?php echo $product['price']; ?>">
        </div>
        <div class="form-group">
            <label>Category ID</label>
            <input type="number" class="form-control" name="category_id" value="<?php echo $product['category_id']; ?>">
        </div>
        <div class="form-group">
            <label>Image URL</label>
            <input type="text" class="form-control" name="image" value="<?php echo $product['image']; ?>">
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update Product</button>
    </form>
</div>

</body>
</html>
