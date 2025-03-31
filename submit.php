<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'connect.php'; // Ensure this is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted.<br>";

    // Debug: Check if POST data is received
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Retrieve form data
    $Model_Name = $_POST['model_Name'] ?? '';
    $year = $_POST['year'] ?? '';
    $Price = $_POST['price'] ?? '';
    $color = $_POST['color'] ?? '';
    $Mileage = $_POST['mileage'] ?? '';

    // Validate the data
    if (empty($Model_Name) || empty($year) || empty($Price) || empty($color) || empty($Mileage)) {
        echo "All fields are required.";
        exit;
    }

    echo "Data validated.<br>";

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO car (Model_Name, Year, price, color, Mileage) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit;
    }

    // Bind parameters
    $stmt->bind_param("siisi", $Model_Name, $year, $Price, $color, $Mileage);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Car details have been successfully saved.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No POST data received.";
}
?>