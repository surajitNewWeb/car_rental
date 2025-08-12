<?php include("includes/header.php"); ?>
<?php
// Sample car data (this can come from a database)
$cars = [
    ["name" => "Mercedes", "type" => "Sedan", "price" => 25, "gearbox" => "Automatic", "fuel" => "Petrol", "seats" => 5, "ac" => true, "img" => "car1.png"],
    ["name" => "Mercedes", "type" => "SUV", "price" => 50, "gearbox" => "Manual", "fuel" => "Diesel", "seats" => 7, "ac" => true, "img" => "car2.png"],
    ["name" => "Mercedes", "type" => "Hatchback", "price" => 45, "gearbox" => "Automatic", "fuel" => "Petrol", "seats" => 4, "ac" => true, "img" => "car3.png"],
    ["name" => "Porsche", "type" => "Sports", "price" => 40, "gearbox" => "Automatic", "fuel" => "Petrol", "seats" => 2, "ac" => true, "img" => "car4.png"],
    ["name" => "Toyota", "type" => "SUV", "price" => 35, "gearbox" => "Manual", "fuel" => "Diesel", "seats" => 5, "ac" => true, "img" => "car5.png"],
    ["name" => "Porsche", "type" => "Sports", "price" => 50, "gearbox" => "Automatic", "fuel" => "Petrol", "seats" => 2, "ac" => true, "img" => "car6.png"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vehicle Selection</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- service css -->
  <link rel="stylesheet" href="assets/css/service.css">
</head>

<body>
  <!--  -->
<section class="service_hero">
  <div class="service_hero-content">
    <!-- Left text part -->
    <div class="text-content">
      <h1>Experience the road<br>like never before</h1>
      <p>Aliquam adipiscing velit semper mobil. Purus non eu cursus porttitor tristique et gravida. Quis nunc interdum gravida ullamcorper.</p>
      <a href="#" class="view-btn">View all cars</a>
    </div>

    <!-- Right booking form -->
    <div class="booking-form">
      <h3>Book your car</h3>
      <select>
        <option>Car type</option>
        <option>SUV</option>
        <option>Sedan</option>
        <option>Hatchback</option>
      </select>
      <select>
        <option>Place of rental</option>
        <option>New York</option>
        <option>Los Angeles</option>
      </select>
      <select>
        <option>Place of return</option>
        <option>New York</option>
        <option>Los Angeles</option>
      </select>
      <input type="date" placeholder="Rental date">
      <input type="date" placeholder="Return date">
      <button class="book-btn">Book now</button>
    </div>
  </div>
</section>
  <!--  -->
  <section class="features-section">
    <div class="feature">
      <img src="https://img.icons8.com/ios-filled/50/000000/marker.png" alt="Availability">
      <h3>Availability</h3>
      <p>Diam tincidunt tincidunt erat at semper fermentum. Id ultricies quis.</p>
    </div>

    <div class="feature">
      <img src="https://img.icons8.com/ios-filled/50/000000/car.png" alt="Comfort">
      <h3>Comfort</h3>
      <p>Gravida auctor fermentum morbi vulputate ac egestas orci.</p>
    </div>

    <div class="feature">
      <img src="https://img.icons8.com/ios-filled/50/000000/wallet.png" alt="Savings">
      <h3>Savings</h3>
      <p>Pretium convallis id diam sed commodo vestibulum lobortis.</p>
    </div>
  </section>
  <!--  -->
  <div class="service_container">

    <!-- choose the car -->
    <div class="section-header">
      <h2>Choose the car that<br>suits you</h2>
      <a href="#" class="view-all">
        View All <span>&#8594;</span>
      </a>
    </div>

    <!-- Cards Grid -->

    <div class="card-container">
    <div class="car-grid">
        <?php foreach ($cars as $car): ?>
        <div class="car-card">
            <img src="images/<?php echo $car['img']; ?>" alt="<?php echo $car['name']; ?>">
            <div class="car-title"><?php echo $car['name']; ?></div>
            <div class="car-type"><?php echo $car['type']; ?></div>
            <div class="price">$<?php echo $car['price']; ?>/day</div>
            <div class="specs">
                <span><i class="fa-solid fa-gears"></i> <?php echo $car['gearbox']; ?></span>
                <span><i class="fa-solid fa-gas-pump"></i> <?php echo $car['fuel']; ?></span>
                <span><i class="fa-solid fa-user-group"></i> <?php echo $car['seats']; ?></span>
                <?php if ($car['ac']): ?>
                <span><i class="fa-solid fa-snowflake"></i> AC</span>
                <?php endif; ?>
            </div>
            <a href="#" class="btn">View Details</a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

    <!-- Brand Logos -->
    <div class="brands">
      <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.png" alt="Toyota">
      <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Ford_logo_flat.svg" alt="Ford">
      <img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Mercedes_logo.svg" alt="Mercedes">
      <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Jeep_logo.svg" alt="Jeep">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Audi_logo_detail.svg" alt="Audi">
    </div>
  </div>
<?php include("includes/footer.php"); ?>
</body>

</html>