<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CarRent — Home</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&family=Caveat:wght@500;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/car_rental/user/assets/css/style.css">


</head>
<body>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/car_rental/index.php">
        <img src="/car_rental/user/assets/images/logo.jpg" alt="logo">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
        <i class="fa fa-bars" style="color:#fff;"></i>
      </button>

      <div class="collapse navbar-collapse" id="navMain">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="/car_rental/index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/car_rental/user/about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="/car_rental/user/services.php">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="/car_rental/user/vehicals.php">Vehicals</a></li>
          <li class="nav-item"><a class="nav-link" href="/car_rental/user/contact.php">Contact Us</a></li>
        </ul>

        <div class="d-flex align-items-center gap-2">
          <a href="/car_rental/user/pages/signup.php" class="btn btn-outline-gold btn-sm"> <i class="fa-regular fa-user me-1"></i> Sign -Up</a>
          <a href="/car_rental/user/pages/login.php" class="btn btn-gold btn-sm">Log in</a>
        </div>
      </div>
    </div>
  </nav>