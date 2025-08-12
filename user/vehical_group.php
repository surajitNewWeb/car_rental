<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "car_rental";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listing</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .Cars_container { padding: 20px; max-width: 1200px; margin: auto; }
        h2 { font-size: 24px; margin-bottom: 20px; }
        .car-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; }
        .car-card { background: #fff; border-radius: 12px; padding: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .car-card img { width: 100%; height: 150px; object-fit: contain; }
        .car-info { padding: 10px 0; }
        .price { color: #6a0dad; font-weight: bold; }
        button { background: #6a0dad; color: #fff; padding: 10px 15px; border: none; border-radius: 8px; cursor: pointer; }
        button:hover { background: #5500aa; }
    </style>
</head>
<body>
    <div class="Cars_container">
        <h2>Choose the car that suits you</h2>
        <div class="car-grid">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="car-card">
                    <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <div class="car-info">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['type']; ?></p>
                        <p class="price">$<?php echo $row['price']; ?> / day</p>
                        <small><?php echo $row['gearbox']; ?> | <?php echo $row['fuel']; ?> | <?php echo $row['doors']; ?> Doors</small>
                    </div>
                    <button>View Details</button>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>
