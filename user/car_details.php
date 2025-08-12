<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Get car ID from URL
$car_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Fetch car details
$sql = "SELECT * FROM cars WHERE id = $car_id";
$result = $conn->query($sql);
$car = $result->fetch_assoc();

$gallery = explode(",", $car['gallery_images']);
$equipment = explode(",", $car['equipment']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $car['name'] ?> - Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="details_container">
    <div class="car-image">
        <img src="<?= $car['main_image'] ?>" alt="<?= $car['name'] ?>">
        <div class="gallery">
            <?php foreach ($gallery as $img): ?>
                <img src="<?= trim($img) ?>" alt="Gallery">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="car-info">
        <h2><?= $car['name'] ?></h2>
        <div class="price">$<?= $car['price'] ?> / day</div>

        <h3>Technical Specification</h3>
        <div class="specs">
            <div class="spec"><i class="fas fa-cogs"></i><p><?= $car['gear_box'] ?></p></div>
            <div class="spec"><i class="fas fa-gas-pump"></i><p><?= $car['fuel'] ?></p></div>
            <div class="spec"><i class="fas fa-door-open"></i><p><?= $car['doors'] ?> Doors</p></div>
            <div class="spec"><i class="fas fa-snowflake"></i><p><?= $car['air_conditioner'] ? "Yes" : "No" ?></p></div>
            <div class="spec"><i class="fas fa-chair"></i><p><?= $car['seats'] ?> Seats</p></div>
            <div class="spec"><i class="fas fa-road"></i><p><?= $car['distance'] ?> km</p></div>
        </div>

        <button class="rent-btn">Rent a car</button>

        <div class="equipment">
            <h3>Car Equipment</h3>
            <ul>
                <?php foreach ($equipment as $item): ?>
                    <li><i class="fas fa-check-circle"></i><?= trim($item) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
