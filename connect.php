<?php
// Database connection parameters
$servername = "localhost"; // or your server name
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password (empty)
$dbname = "benz_bliss"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>