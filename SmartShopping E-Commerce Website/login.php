<?php
session_start();

// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";     
$dbname = "smartshopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_username = $conn->real_escape_string($_POST['username']);
    $admin_password = $conn->real_escape_string($_POST['password']);

    // SQL query to check the login credentials
    $sql = "SELECT * FROM admin WHERE username='$admin_username' AND password='$admin_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login success
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $admin_username;
        header("Location: admin_panel.php"); // Redirect to admin dashboard
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

$conn->close();
?>
