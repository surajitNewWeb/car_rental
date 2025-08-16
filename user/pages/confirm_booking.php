<?php include("dash_head.php"); ?>
<?php
include("../config/db.php");

if(!isset($_SESSION['user_id'])){
    die("<div style='text-align:center; margin-top:50px;'>
            <h2 style='color:red;'>⚠ User not logged in</h2>
            <a href='../login.php' style='display:inline-block; margin-top:20px; 
               padding:10px 20px; background:#007bff; color:white; text-decoration:none; 
               border-radius:6px;'>Go to Login</a>
          </div>");
}

$user_id = $_SESSION['user_id'];
$car_id = $_POST['car_id'];
$pickup_date = $_POST['pickup_date'];
$return_date = $_POST['return_date'];
$price_per_day = $_POST['price_per_day'];

// calculate total days
$days = (strtotime($return_date) - strtotime($pickup_date)) / (60*60*24) + 1;
$total_price = $days * $price_per_day;

$sql = "INSERT INTO bookings (user_id, car_id, pickup_date, return_date, total_price) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("iissd", $user_id, $car_id, $pickup_date, $return_date, $total_price);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Booking Confirmation</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: linear-gradient(135deg, #1f1c2c, #928dab);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }
    .card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border: none;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        color: #fff;
        max-width: 500px;
        padding: 25px;
        text-align: center;
        animation: fadeIn 0.8s ease-in-out;
    }
    .btn-custom {
        background: linear-gradient(45deg, #00ffd5, #00aaff);
        color: #000;
        font-weight: bold;
        border-radius: 8px;
        padding: 10px 20px;
        transition: 0.3s;
    }
    .btn-custom:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px #00ffd5, 0 0 20px #00aaff;
    }
    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(20px);}
        to {opacity: 1; transform: translateY(0);}
    }
</style>
</head>
<body>

<?php
if($stmt->execute()){
?>
    <div class="card">
        <h2 class="mb-3">✅ Booking Confirmed!</h2>
        <p><strong>Car ID:</strong> <?php echo $car_id; ?></p>
        <p><strong>Pickup:</strong> <?php echo $pickup_date; ?></p>
        <p><strong>Return:</strong> <?php echo $return_date; ?></p>
        <p><strong>Total Price:</strong> $<?php echo number_format($total_price, 2); ?></p>
        <a href="dashboard.php" class="btn btn-custom mt-3">⬅ Back to Dashboard</a>
    </div>
<?php
} else {
    echo "<div class='card'><h3 style='color:red;'>Error: ".$stmt->error."</h3>
          <a href='dashboard.php' class='btn btn-custom mt-3'>⬅ Back to Dashboard</a></div>";
}
?>

</body>
</html>
