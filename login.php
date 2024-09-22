<?php
// Check if username and password are correct (this is a simplified example)
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'prerna' && $password === '123') {
    // Redirect to the travel itinerary page
    header('Location: travel.html');
    exit;
} else {
    // Redirect back to the login page with an error message
    header('Location: login.html?error=1');
    exit;
}
?>
