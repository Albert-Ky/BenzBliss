<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercedes-Benz Dealership</title>
    <link rel="stylesheet" href="Homescreenstyles.css">
</head>
<body>
    <form action="Insertcardetails.php" method="POST">
    <header>
        <nav>
                <div class="logo-container">
                <img src="icons/merc logo.png" width="50" height="50">
                <span>Benz-Bliss</span>
                </div>
                
                <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
                </label>
            <ul>
                <li><a href="#">New Cars</a></li>
                <li><a href="#">Used Cars</a></li>
                <li><a href="ShopForm.php">Shop Now</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="content">
        </div>
        </div>
        <div class="hero">
            <h1>Luxury Redefined</h1>
            <p>Experience the future of driving.</p>
            <button>Explore Our Inventory</button>
        </div>
    </header>

    <section class="featured-cars">
        <h2>Featured Cars</h2>
        <div class="car-card">
            <img src="images/g class.jpg" alt="Car 1">
            <h3>Mercedes-Benz G-Class</h3>
            <p>Experience ultimate luxury.</p>
        </div>
        <div class="car-card">
            <img src="images/eclass1.jpg" alt="Car 2">
            <h3>Mercedes-Benz E-Class</h3>
            <p>The epitome of elegance.</p>
        </div>
        <div class="car-card">
            <img src="images/gle4.jpg" alt="Car 3">
            <h3>Mercedes-Benz GLE</h3>
            <p>Adventure redefined.</p>
        </div>
    </section>
</form>

    <footer>
        <p><center>&copy; 2024 Mercedes-Benz Dealership</center></p>
    </footer>
</body>
</html>
