<?php
$host = 'localhost';
$username = 'root';  // Your MySQL username
$password = '';   // Your MySQL password
$dbname = 'smartshopping';
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['term'])) {
    $term = $_GET['term'];

    $query = "SELECT title FROM products WHERE title LIKE ?";
    $likeTerm = '%' . $term . '%';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $likeTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    $suggestions = [];
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['title'];
    }

    echo json_encode($suggestions);
}

$conn->close();
?>
