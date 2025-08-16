<?php 
include("dash_head.php"); 
include("../config/db.php");

// check login
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// fetch user bookings with car info
$sql = "SELECT b.*, v.name AS car_name, v.brand AS car_brand, v.image AS car_image 
        FROM bookings b
        JOIN vehical v ON b.car_id = v.id
        WHERE b.user_id = ?
        ORDER BY b.created_at DESC";

$stmt = $con->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$res = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Bookings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body { background:#071022; color:#fff; font-family:'DM Sans',sans-serif; }
    .booking-card {
        background:#0f2940;
        border-radius:12px;
        padding:20px;
        margin-bottom:20px;
        box-shadow:0 4px 15px rgba(0,0,0,0.5);
        transition:transform .2s;
    }
    .booking-card:hover {
        transform: scale(1.02);
    }
    .booking-card img {
        width:100%;
        height:270px;
        border-radius:10px;
        object-fit:cover;
        margin-bottom:10px;
    }
    h2 { color:#ffb020; margin:20px 0; font-weight:700; }
    .text-muted { color:#8b98a6!important; }
    .delete-btn {
        background:#ff4d4d;
        border:none;
        padding:8px 14px;
        border-radius:8px;
        color:#fff;
        font-size:14px;
        transition:0.2s;
    }
    .delete-btn:hover {
        background:#e60000;
    }
    .detail-row {
        display:flex; 
        align-items:center; 
        gap:8px; 
        margin-bottom:6px;
    }
    .alert { margin-bottom: 20px; }
  </style>
</head>
<body>
<div class="container mt-4">
  <h2><i class="fa-solid fa-car-side"></i> My Bookings</h2>

  <!-- Alerts -->
  <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-success text-center">
      <i class="fa-solid fa-check-circle"></i> <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
  <?php endif; ?>

  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger text-center">
      <i class="fa-solid fa-triangle-exclamation"></i> <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
  <?php endif; ?>

  <?php if($res->num_rows > 0): ?>
    <?php while($row = $res->fetch_assoc()): ?>
      <div class="booking-card">
        <div class="row">
          <div class="col-md-4">
            <img src="/car_rental/admin/assets/images/<?php echo htmlspecialchars($row['car_image']); ?>" alt="Car">
          </div>
          <div class="col-md-8">
            <h4><?php echo htmlspecialchars($row['car_name']); ?> (<?php echo htmlspecialchars($row['car_brand']); ?>)</h4>
            
            <div class="detail-row">
              <i class="fa-solid fa-calendar-day text-warning"></i>
              Pickup: <span class="text-muted"><?php echo $row['pickup_date']; ?></span>
            </div>
            <div class="detail-row">
              <i class="fa-solid fa-calendar-check text-success"></i>
              Return: <span class="text-muted"><?php echo $row['return_date']; ?></span>
            </div>
            <div class="detail-row">
              <i class="fa-solid fa-dollar-sign text-info"></i>
              Total Price: <span class="text-muted">$<?php echo number_format($row['total_price'],2); ?></span>
            </div>
            <div class="detail-row">
              <i class="fa-solid fa-info-circle text-primary"></i>
              Status: <span class="text-muted"><?php echo $row['status']; ?></span>
            </div>
            <small class="text-muted"><i class="fa-solid fa-clock"></i> Booked At: <?php echo $row['created_at']; ?></small>
            
            <form method="POST" action="delete_booking.php" class="mt-3">
              <input type="hidden" name="booking_id" value="<?php echo $row['id']; ?>">
              <button type="submit" class="delete-btn"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No bookings found.</p>
  <?php endif; ?>
</div>
</body>
</html>
