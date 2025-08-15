<?php
include("admin_inc/db.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $seats = $_POST['seats'];
    $fuel = $_POST['fuel'];
    $price = $_POST['price'];
    $transmission = $_POST['transmission'];
   

    // Image upload logic
    $buf=$_FILES['image']['tmp_name'];
    $fn=time().$_FILES['image']['name'];
    move_uploaded_file($buf,"assets/images/".$fn);

    // Insert car details into the database
    $ins= "INSERT INTO vehical SET name='$name', image='$fn',brand='$brand',type='$type',seats='$seats', fuel='$fuel', price='$price',transmission='$transmission'";
    if ($con->query($ins) === TRUE) {
        echo "<script>alert('Car added successfully!');</script>";
        header("location:view_vehical.php");
    } else {
        echo "<script>alert('Error: " . $con->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>add card</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/css/add_vehical.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include("admin_inc/sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include("admin_inc/header.php"); ?>
        <!-- End of Sidebar -->
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Add vehical</h1>


<div class="form-container">
  <h2>Add New Vehical</h2>
  <form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-grid">
      <div class="form-group">
        <label>Car Name</label>
        <input type="text" name="name" required>
      </div>
      <div class="form-group">
        <label>Brand</label>
        <input type="text" name="brand" required>
      </div>
      <div class="form-group">
        <label>Type</label>
        <select name="type" required>
          <option value="">Select Type</option>
          <option>SUV</option>
          <option>Sedan</option>
          <option>Hatchback</option>
          <option>Convertible</option>
        </select>
      </div>
      <div class="form-group">
        <label>Seats</label>
        <input type="number" name="seats" min="1" required>
      </div>
      <div class="form-group">
        <label>Fuel</label>
        <select name="fuel" required>
          <option value="">Select Fuel</option>
          <option>Petrol</option>
          <option>Diesel</option>
          <option>Electric</option>
          <option>Hybrid</option>
        </select>
      </div>
      <div class="form-group">
        <label>Transmission</label>
        <select name="transmission" required>
          <option value="">Select Transmission</option>
          <option>Manual</option>
          <option>Automatic</option>
        </select>
      </div>
      <div class="form-group">
        <label>Price per Day ($)</label>
        <input type="number" name="price" min="0" required>
      </div>
      <div class="form-group">
        <label>Car Image</label>
        <input type="file" name="image" accept="image/*" required>
      </div>
    </div>
    <button type="submit" name="add">Add Car</button>
  </form>
</div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("admin_inc/footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include("admin_inc/logout_modal.php"); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>