<?php include("includes/header.php"); ?>
<!-- main css -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Rental -Service</title>
  <!-- style css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- service css -->
  <link rel="stylesheet" href="assets/css/service.css">
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
</head>

<body>
  <section class="booking-section">
    <!-- Left Text Section -->
    <div class="booking-text">
      <h1>Experience the road like never before</h1>
      <p>Aliquam adipiscing velit semper morbi. Purus non eu cursus porttitor tristique et gravida. Quis nunc interdum
        gravida ullamcorper.</p>
      <button>View all cars</button>
    </div>

    <!-- Right Form Section -->
    <div class="booking-form">
      <h2>Book your car</h2>
      <select>
        <option>Car type</option>
        <option>Sedan</option>
        <option>SUV</option>
        <option>Hatchback</option>
      </select>
      <select>
        <option>Place of rental</option>
        <option>New York</option>
        <option>Los Angeles</option>
        <option>Chicago</option>
      </select>
      <select>
        <option>Place of return</option>
        <option>New York</option>
        <option>Los Angeles</option>
        <option>Chicago</option>
      </select>
      <input type="date" placeholder="Rental date">
      <input type="date" placeholder="Return date">
      <button>Book now</button>
    </div>
  </section>
  
  <!--  -->
  <div class="container">
    <!-- Left Image -->
    <div class="profile-image">
      <img src="assets/images/about.jpg" alt="Profile">
    </div>

    <!-- Right Points -->
    <div class="points">
      <div class="point">
        <div class="circle">1</div>
        <div class="text">Point one description goes here</div>
      </div>
      <div class="point">
        <div class="circle">2</div>
        <div class="text">Point two description goes here</div>
      </div>
      <div class="point">
        <div class="circle">3</div>
        <div class="text">Point three description goes here</div>
      </div>
      <div class="point">
        <div class="circle">4</div>
        <div class="text">Point four description goes here</div>
      </div>
    </div>
  </div>

  <section class="car-grid">
    <!-- Card -->
    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Mercedes" class="car-img">
        <div class="car-details">
            <div>
                <h3>Mercedes</h3>
                <span class="type">Sedan</span>
            </div>
            <div class="price">
                $25 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>

    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Mercedes" class="car-img">
        <div class="car-details">
            <div>
                <h3>Mercedes</h3>
                <span class="type">Sport</span>
            </div>
            <div class="price">
                $50 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>

    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Mercedes" class="car-img">
        <div class="car-details">
            <div>
                <h3>Mercedes</h3>
                <span class="type">Sedan</span>
            </div>
            <div class="price">
                $45 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>

    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Porsche" class="car-img">
        <div class="car-details">
            <div>
                <h3>Porsche</h3>
                <span class="type">SUV</span>
            </div>
            <div class="price">
                $40 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>

    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Toyota" class="car-img">
        <div class="car-details">
            <div>
                <h3>Toyota</h3>
                <span class="type">Sedan</span>
            </div>
            <div class="price">
                $35 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>

    <div class="car-card">
        <img src="https://via.placeholder.com/300x150" alt="Porsche" class="car-img">
        <div class="car-details">
            <div>
                <h3>Porsche</h3>
                <span class="type">SUV</span>
            </div>
            <div class="price">
                $50 <span>per day</span>
            </div>
        </div>
        <div class="features">
            <span>⚙ Automat</span>
            <span>⛽ PB 95</span>
            <span>❄ Air Conditioner</span>
        </div>
        <button>View Details</button>
    </div>
</section>

</body>

</html>