<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Car Rental Dashboard</title>

  <!-- Fonts & Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900"
    rel="stylesheet">

  <!-- Custom styles -->
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
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="add_vehical.php" class="d-none d-sm-inline-block btn btn-sm btn-custom shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Add Vehicle
    </a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Bookings -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total Bookings</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">245</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Vehicles -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Available Vehicles</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">38</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-car fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Customers -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Customers</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">120</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Revenue -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Revenue</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$12,450</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Bookings Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Bookings Overview</h6>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="bookingsChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- Vehicles Status -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Vehicle Status</h6>
        </div>
        <div class="card-body">
          <div class="chart-pie pt-4">
            <canvas id="vehiclesPieChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Recent Reservations Table -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Recent Reservations</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Booking ID</th>
              <th>Customer</th>
              <th>Vehicle</th>
              <th>Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#1001</td>
              <td>John Doe</td>
              <td>Toyota Corolla</td>
              <td>2025-08-10</td>
              <td><span class="badge badge-success">Confirmed</span></td>
            </tr>
            <tr>
              <td>#1002</td>
              <td>Jane Smith</td>
              <td>Honda Civic</td>
              <td>2025-08-12</td>
              <td><span class="badge badge-warning">Pending</span></td>
            </tr>
            <tr>
              <td>#1003</td>
              <td>David Johnson</td>
              <td>Ford Focus</td>
              <td>2025-08-14</td>
              <td><span class="badge badge-danger">Cancelled</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Bookings Overview Line Chart
  const ctxBookings = document.getElementById('bookingsChart').getContext('2d');
  new Chart(ctxBookings, {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [{
        label: "Bookings",
        data: [30, 45, 60, 50, 80, 70, 90],
        borderColor: "#ffb020",
        backgroundColor: "rgba(255, 176, 32, 0.2)",
        fill: true,
        tension: 0.3
      }]
    }
  });

  // Vehicles Status Pie Chart
  const ctxVehicles = document.getElementById('vehiclesPieChart').getContext('2d');
  new Chart(ctxVehicles, {
    type: 'doughnut',
    data: {
      labels: ["Available", "Rented", "In Maintenance"],
      datasets: [{
        data: [20, 15, 3],
        backgroundColor: ["#3ad7c0", "#ffb020", "#8b98a6"]
      }]
    }
  });
</script>

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

  <!-- Logout Modal -->
    <?php include("admin_inc/logout_modal.php"); ?>
  <!-- End Logout Modal -->


  <!-- JS -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
