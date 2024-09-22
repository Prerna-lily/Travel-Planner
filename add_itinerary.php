<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "travel";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$destination = $_POST['destination'];
$members = $_POST['members'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$sql = "INSERT INTO itinerary1 (name, email, address, phone_number, destination, members, start_date, end_date)
        VALUES ('$name', '$email', '$address', '$phone_number', '$destination', '$members', '$start_date', '$end_date')";


if (mysqli_query($conn, $sql)) {
    header("location: additional_details.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>