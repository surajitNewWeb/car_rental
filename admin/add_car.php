<?php
include("admin_inc/db.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $gearbox = $_POST['gearbox'];
    $fuel = $_POST['fuel'];
    $door = $_POST['door'];
    $seats = $_POST['seats'];
    $ac = $_POST['ac'];

    // Image upload logic
    $buf=$_FILES['image']['tmp_name'];
    $fn=time().$_FILES['image']['name'];
    move_uploaded_file($buf,"assets/images/".$fn);

    // Insert car details into the database
    $ins= "INSERT INTO cars SET name='$name', type='$type', price='$price', image='$fn', gearbox='$gearbox', fuel='$fuel', door='$door', seats='$seats', ac='$ac'";
    if ($con->query($ins) === TRUE) {
        echo "<script>alert('Car added successfully!');</script>";
        header("location:view_car.php");
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

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

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
          <h1 class="h3 mb-4 text-gray-800">Add Car</h1>

          <div class="form-container">
            <h2>Add New Car</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group">
                  <label for="name">Car Name</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="type">Type</label>
                  <input type="text" id="type" name="type" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="price">Price ($/day)</label>
                  <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                  <label for="image">Car Image</label>
                  <input type="file" id="image" name="image" accept="image/*" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="gearbox">Gearbox</label>
                  <select id="gearbox" name="gearbox" required>
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="fuel">Fuel Capacity (L)</label>
                  <input type="number" id="fuel" name="fuel" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="door">Number of Doors</label>
                  <input type="number" id="door" name="door" required>
                </div>
                <div class="form-group">
                  <label for="seats">Seats</label>
                  <input type="number" id="seats" name="seats" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label for="ac">Air Conditioning</label>
                  <select id="ac" name="ac" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
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