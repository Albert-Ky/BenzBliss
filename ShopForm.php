<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    <link rel="stylesheet" href="css/Mystyles.css" type="text/css">
</head>
<body>

<nav class="navbar">
    <ul>
    
        <li><a href="Homescreen.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>

    </ul>
</nav>

<div class="signup-box">
   
<h1>CAR DETAILS:</h1>
<form action="submit.php" method="POST">
    <div class="input-group">
        <label for="">Model Name:</label>
        <input type="text" name="model_Name" required>
    </div>
    <div class="input-group">
        <label for="">Year:</label>
        <input type="number" name="year" required>
    </div>
    <div class="input-group">
        <label for="">Price:</label>
        <input type="text" name="price" required>
    </div>
    <div class="input-group">
        <label for="">Color:</label>
        <input type="text" name="color" required>
    </div>
    <div class="input-group">
        <label for="">Mileage:</label>
        <input type="number" name="mileage" required>
    </div>
    <div class="my-button">
        <button type="submit" name="Submit" class="my-button">Submit</button>
    </div>
</form>

</div>
    
</body>
</html>