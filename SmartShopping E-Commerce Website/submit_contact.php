<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check and set submission count cookie
$submissionCount = 0;
if (isset($_COOKIE['submission_count'])) {
    $submissionCount = $_COOKIE['submission_count'];
}

// Limit reached check
if ($submissionCount >= 3) {
    $_SESSION['message'] = 'Submission limit reached. Please try again tomorrow.';
    $_SESSION['messageType'] = 'alert-danger';
    header('Location: contact us.php');
    exit;
}

// Database connection
$host = 'localhost';
$username = 'root';  // Your MySQL username
$password = '';      // Your MySQL password
$dbname = 'smartshopping';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $city = $_POST['city'];
    $messageText = $_POST['message'];

    $errors = [];

    // Validation logic here
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Name should contain only characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) < 9) {
        $errors[] = "Invalid email format. It should contain @ and be at least 9 characters long.";
    }
    if (!preg_match("/^\+92\d{10}$/", $phone)) {
        $errors[] = "Invalid phone number. It should start with +92.";
    }
    if (empty($role)) {
        $errors[] = "Please select at least one role.";
    }

    // Insert into database if no errors
    if (count($errors) == 0) {
        $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, role, city, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $name, $email, $phone, $role, $city, $messageText);

        if ($stmt->execute()) {
            $_SESSION['message'] = 'Form submitted successfully.';
            $_SESSION['messageType'] = 'alert-success';
            $submissionCount++;
            setcookie('submission_count', $submissionCount, time() + 86400); // 86400 seconds = 24 hours
        } else {
            $_SESSION['message'] = 'Error submitting form: ' . $stmt->error;
            $_SESSION['messageType'] = 'alert-danger';
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = implode('<br>', $errors);
        $_SESSION['messageType'] = 'alert-danger';
    }
    header('Location: contact us.php');
    exit;
}

$conn->close();
?>
