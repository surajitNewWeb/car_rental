<?php include("includes/topbar.php"); ?>
<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Car Rental - Filter & Modal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&family=Caveat:wght@500;700&display=swap" rel="stylesheet">

  <!-- custom css -->
   <link rel="stylesheet" href="assets/css/vehical.css">

</head>

<body>

  <!-- Filters -->
  <div class="filter-bar">
    <input type="text" id="searchInput" placeholder="Search by name...">

    <select id="typeFilter">
      <option value="">All Types</option>
      <option value="SUV">SUV</option>
      <option value="Sedan">Sedan</option>
      <option value="Hatchback">Hatchback</option>
    </select>

    <select id="brandFilter">
      <option value="">All Brands</option>
      <option value="Toyota">Toyota</option>
      <option value="Honda">Honda</option>
      <option value="Suzuki">Suzuki</option>
    </select>

    <label for="priceRange">Max Price: <span id="priceValue">100</span></label>
    <input type="range" id="priceRange" min="0" max="200" value="100">
  </div>

  <!-- Car Grid -->
  <div class="car-grid" id="carGrid">
    <?php
$sel = "SELECT * FROM vehical";
$rs = $con->query($sel);
while ($row = $rs->fetch_assoc()) {
?>
    <div class="car-card" data-name="<?php echo $row['name']; ?>" data-brand="<?php echo $row['brand']; ?>"
      data-type="<?php echo $row['type']; ?>" data-price="<?php echo $row['price']; ?>">

      <img src="../admin/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
      <div class="info">
        <h3>
          <?php echo $row['name']; ?>
        </h3>
        <div class="icons">
          <p><i class="fa-solid fa-car"></i><span class="meta"> Brand:</span>
            <?php echo $row['brand']; ?>
          </p>
          <p><i class="fa-solid fa-list"></i><span class="meta"> Type:</span>
            <?php echo $row['type']; ?>
          </p>
          <p><i class="fa-solid fa-chair"></i><span class="meta"> Seats:</span>
            <?php echo $row['seats']; ?>
          </p>
          <p><i class="fa-solid fa-gas-pump"></i><span class="meta"> Fuel:</span>
            <?php echo $row['fuel']; ?>
          </p>
          <p><i class="fa-solid fa-gear"></i><span class="meta"> Transmission:</span>
            <?php echo $row['transmission']; ?>
          </p>
        </div>
        <div class="price">$
          <?php echo $row['price']; ?> /day
        </div>
        <button class="view-btn" onclick="openModal(this)">View Details</button>
      </div>
    </div>
    <?php } ?>
  </div>
<!-- modal -->
 <div class="modal" id="carModal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>

    <div class="modal-body">
      <!-- Left side (image) -->
      <div class="modal-left">
        <img id="modalImage" src="" alt="Car Image">
      </div>

      <!-- Right side (details) -->
      <div class="modal-right">
        <h2 id="modalTitle"></h2>
        <p><strong><i class="fa-solid fa-car"></i>Brand:</strong> <span id="modalBrand"></span></p>
        <p><strong><i class="fa-solid fa-list"></i>Type:</strong> <span id="modalType"></span></p>
        <p><strong><i class="fa-solid fa-chair"></i>Seats:</strong> <span id="modalSeats"></span></p>
        <p><strong><i class="fa-solid fa-gas-pump"></i>Fuel:</strong> <span id="modalFuel"></span></p>
        <p><strong><i class="fa-solid fa-gear"></i>Transmission:</strong> <span id="modalTransmission"></span></p>
        <p><strong><i class="fa-solid fa-car"></i>Price:</strong> $<span id="modalPrice"></span> /day</p>
      </div>
    </div>
  </div>
</div>


  <!-- footer -->
   <?php include("includes/footer.php"); ?>

 <script src="assets/js/vehical.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
