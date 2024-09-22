<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$food = $_POST['food'];
$stay = $_POST['stay'];
$travel = $_POST['travel'];

// Prepare and execute SQL query to insert data into database
$sql = "INSERT INTO additional_details (food, stay, travel) VALUES ('$food', '$stay', '$travel')";

if ($conn->query($sql) === TRUE) {
    // Close connection
    $conn->close();

    // Redirect to recommendation page
    header("Location: recommendation_page.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
