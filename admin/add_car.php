<?php
include("admin_inc/db.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $badge = $_POST['badge'];
    $seats = $_POST['seats'];
    $fuel = $_POST['fuel'];
    $transmission = $_POST['transmission'];
    $price = $_POST['price'];
    $features = $_POST['features'];
    $description = $_POST['Description'];

    // Image upload logic
    $buf=$_FILES['image']['tmp_name'];
    $fn=time().$_FILES['image']['name'];
    move_uploaded_file($buf,"assets/images/".$fn);

    // Insert car details into the database
    $ins= "INSERT INTO cars SET name='$name', image='$fn',badge='$badge',seats='$seats', fuel='$fuel', price='$price',transmission='$transmission', features='$features',  description='$description'";
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

  <title>add card</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/css/add.css" rel="stylesheet">

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

          <div class="form-container small">
            <h2>Add New Car</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group">
                  <label for="name">Car Name</label>
                  <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                  <label for="image">Car Image</label>
                  <input type="file" id="image" name="image" accept="image/*" required>
                </div>
              </div>

              <div class="form-row">
                 <div class="form-group">
                  <label for="transmission">Car Badge</label>
                  <select id="badge" name="badge" required>
                    <option value="New">New</option>
                    <option value="Best Seller">Best Seller</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="seats">Seats</label>
                  <input type="number" id="seats" name="seats" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="fuel">Fuel</label>
                  <input type="text" id="fuel" name="fuel" placeholder="Diesel / Petrol" required>
                </div>
                <div class="form-group">
                  <label for="transmission">Transmission</label>
                  <select id="transmission" name="transmission" required>
                    <option value="Auto">Auto</option>
                    <option value="Manual">Manual</option>
                  </select>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="price">Price ($/day)</label>
                  <input type="number" id="price" name="price" required>
                </div>
                <div class="form-group">
                  <label for="features">Features</label>
                  <input type="text" id="features" name="features" required>
                </div>
              </div>

              <div class="form-group full-width">
                <label for="Description">Description</label>
                <textarea name="Description" id="Description"></textarea>
              </div>

              <button type="submit" name="add" class="btn yellow">Add Car</button>
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