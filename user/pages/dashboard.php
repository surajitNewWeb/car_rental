<?php
session_start();
if(!isset($_SESSION['un'])){
  header("location:login.php");
}
?>
<!-- nav bar -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
    rel="stylesheet">
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- font aswame -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- main css -->
  <link rel="stylesheet" href="/car_rental/user/assets/css/style.css">

</head>

<body>
  <!-- nav-bar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
    <div class="container header">
      <!-- Logo -->
      <a class="navbar-brand fw-bold" href="#"><img src="/car_rental/user/assets/images/logo.jpg" alt="logo"></a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
          <li class="nav-item"><a class="nav-link" href="/user/pages/vehical_group.php">User-Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="">Brows Car</a></li>
          <li class="nav-item"><a class="nav-link" href="">Book Car</a></li>
          <li class="nav-item"><a class="nav-link" href="">Booking Details</a></li>
        </ul>

        <!-- Right section -->
        <div class="d-flex align-items-center gap-3">
          <a href="" class="text-decoration-none text-danger">Welcome
            <?php echo $_SESSION['un'] ?>
            <img src="../assets/images/user.png" alt="user-image"style="  height: 40px;width: 40px; object-fit: cover;border-radious:50%">
          </a>
          <a href="logout.php" class="log text-decoration-none" onclick="return confirmLogout()">Logout</a>
        </div>
      </div>
    </div>
  </nav>

  <script>
    function confirmLogout() {
      return confirm("Are you sure you want to logout?");
    }
  </script>
</body>

</html>