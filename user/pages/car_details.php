<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "car_rental");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch cars
$sql = "SELECT * FROM cars_details ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car Rental</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body { background: #f7f7f7; }
    .car-card { background: white; border-radius: 12px; padding: 15px; margin-bottom: 15px; display: flex; align-items: center; }
    .car-card img { width: 150px; border-radius: 10px; }
    .car-info { flex: 1; padding-left: 20px; }
    .car-status { padding: 3px 8px; border-radius: 5px; font-size: 14px; }
    .Available { background: #28a745; color: white; }
    .Unavailable { background: #dc3545; color: white; }
    .Maintenance { background: #ffc107; color: black; }
    .btn-select { background: #ff3b3b; color: white; }
</style>
</head>
<body>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Car Rental Units</h2>
        <a href="add_car.php" class="btn btn-primary">Add Unit</a>
    </div>

    <?php while($car = $result->fetch_assoc()): ?>
        <div class="car-card shadow-sm">
            <img src="images/<?php echo $car['image']; ?>" alt="<?php echo $car['model']; ?>">
            <div class="car-info">
                <h5><?php echo $car['brand']; ?> <strong><?php echo $car['model']; ?></strong></h5>
                <span class="car-status <?php echo $car['status']; ?>"><?php echo $car['status']; ?></span>
                <span class="ms-2 text-muted"><?php echo $car['units']; ?> Unit</span>
                <div class="mt-2">
                    <small>Transmission: <?php echo $car['transmission']; ?></small> |
                    <small>Capacity: <?php echo $car['seats']; ?> seats</small>
                </div>
                <div class="mt-2">
                    <strong>Price: $<?php echo $car['price']; ?>/days</strong>
                </div>
            </div>
            <div>
                <a href="#" class="btn btn-select me-2">Select</a>
                <a href="edit_car.php?id=<?php echo $car['id']; ?>" class="btn btn-secondary me-1">Edit</a>
                <a href="delete_car.php?id=<?php echo $car['id']; ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    <?php endwhile; ?>

</div>

</body>
</html>

<?php $conn->close(); ?>
