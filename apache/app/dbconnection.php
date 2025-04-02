<?php


// Database connection details
$servername = 'localhost'; // Default host for phpMyAdmin
$username = 'root'; // Default username for phpMyAdmin
$password = ''; // Default password for phpMyAdmin (often empty)
$database = 'controlvehicular31'; // Your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

print("Connected successfully!");
?>