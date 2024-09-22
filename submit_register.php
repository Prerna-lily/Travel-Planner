<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input fields
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Here you can add your database logic to store the user information

    // Redirect to travel.html page upon successful registration
    header("Location: travel.html");
    exit(); // Stop further execution
}
?>
