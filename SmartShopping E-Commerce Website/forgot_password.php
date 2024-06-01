<?php


$reset_success='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
   
    // Check if email matches the pattern
    if (preg_match('/l1f21bscs[0-9]{4}@ucp.edu.pk/', $email)) {
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
        
        // Update admin password
        $sql = "UPDATE admin SET password='abcdef' WHERE email='ali.admin@gmail.com'";
        if ($conn->query($sql) === TRUE) {

            $reset_success=true;
            
        } else {
            echo "Error resetting password: " . $conn->error;
        }

        $conn->close();
    } else {
        $reset_success=false;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .password-reset-container {
            width: 400px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <div class="password-reset-container">
        <h2 class="text-center">Reset Password</h2>
        <form action="forgot_password.php" method="post" class="border p-4 shadow">
            <div class="form-group">
                <label for="email">Student Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        </form>
        <?php
  

    if ($reset_success===true) {
        echo '<div class="alert alert-success" role="alert">';
        echo 'Password reset successfully.';
        echo '</div>';
    }
    if ($reset_success===false){
        echo '<div class="alert alert-danger" role="alert">';
        echo ' Invalid email format. it must follow the l1f21bscs0000@ucp.edu.pk pattern';
        echo '</div>';
       
    }
   
?>
    </div>
    <!-- Include Bootstrap JS and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
