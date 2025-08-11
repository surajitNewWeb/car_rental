<?php include("user/includes/header.php"); ?>
  <!-- hero section -->
  <section class="hero">
    <div class="search-container">
      <select name="">
        <option>Used Cars</option>
        <option>New Cars</option>
      </select>
      <select name="">
        <option>Any Makes</option>
        <option>Tesla</option>
        <option>BMW</option>
        <option>Audi</option>
      </select>
      <select name="">
        <option>Any Models</option>
        <option>Model S</option>
        <option>Model 3</option>
        <option>Model X</option>
      </select>
      <select name="">
        <option>All Prices</option>
        <option>Below $20,000</option>
        <option>$20,000 - $50,000</option>
        <option>Above $50,000</option>
      </select>
      <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <h1>Enjoy your life with our comfortable car</h1>
    <button class="hero_btn">Explore Now</button>
  </section>

  <div class="heading">
    <h2>SELECT YOUR VEHICAL TYPE</h2>
  </div>
  <section class="category-slider">
    <div class="cat-item">
      <img src="user/assets/images/SVG.png" alt="SUV">
      <p>SUV</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (1).png" alt="Sedan">
      <p>Sedan</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (2).png" alt="Hatchback">
      <p>Hatchback</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (3).png" alt="Coupe">
      <p>Coupe</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (4).png" alt="Hybrid">
      <p>Hybrid</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (5).png" alt="Convertible">
      <p>Convertible</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (6).png" alt="Van">
      <p>Van</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (7).png" alt="Truck">
      <p>Truck</p>
    </div>
    <div class="cat-item">
      <img src="user/assets/images/SVG (8).png" alt="Electric">
      <p>Electric</p>
    </div>
  </section>
  <!-- most searches car -->
  <div class="heading">
    <h2>MOST SEARCHES CAR</h2>
  </div>
  <!-- Car Card Section -->
  <section class="car-section">
    <div class="car-grid">
      <div class="car-card">
        <img src="user/assets/images/hyundai creta.jpg" alt="Hyundai Creta">
        <h3>Hyundai Creta</h3>
        <p class="price">₹1,999 / day</p>
        <button>Rent Now</button>
      </div>

      <div class="car-card">
        <img src="user/assets/images/maruti_swift.jpg" alt="Maruti Swift">
        <h3>Maruti Swift</h3>
        <p class="price">₹999 / day</p>
        <button>Rent Now</button>
      </div>

      <div class="car-card">
        <img src="user/assets/images/toyota_inova.jpg" alt="Toyota Innova">
        <h3>Toyota Innova</h3>
        <p class="price">₹2,999 / day</p>
        <button>Rent Now</button>
      </div>

      <div class="car-card">
        <img src="user/assets/images/mahindra_scorpio.png" alt="Toyota Innova">
        <h3>BS6 Mahindra Scorpio</h3>
        <p class="price">₹3,499 / day</p>
        <button>Rent Now</button>
      </div>
    </div>
  </section>

  <!--  -->

  <div class="heading">
    <h2>PERFECT BUDGET</h2>
  </div>
  <section class="two-column-section">
    <div class="image-side">
      <video controls poster="user/assets/images/car1.jpg">
        <source src="user/assets/images/thumbnail.mp4" type="video/mp4">
      </video>
    </div>
    <div class="content-side">
      <h2>Get A Fair Price For Your Car Booking </h2>
      <p>We are committed to providing our customers with exceptional service, competitive
        pricing, and a wide range of.</p>
      <ul class="checklist">
        <li>We are the UK’s largest provider, with more patrols in more places</li>
        <li>You get 24/7 roadside assistance</li>
        <li>We fix 4 out of 5 cars at the roadside</li>
      </ul>
      <button class="btn">Get started<i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </section>
  <!--  -->
  <div class="heading">
    <h2>ONLINE EVERYWHERE</h2>
  </div>
  <section class="two-column-section">
    <div class="content-side">
      <h2>Online, in-person,everywhere</h2>
      <p>Choose from thousands of vehicles from multiple brands and buy online with Click &
        Drive, or visit us at one of our dealerships today.</p>
      <a href="#" class="btn">Get started<i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div class="image-side">
      <img src="user/assets/images/online_inperson .jpg" alt="">
    </div>
  </section>

  <!-- book now -->
  <div class="heading">
    <h2>
      BOOK YOUR VEHICAL
    </h2>
  </div>

  <div class="booking-form">
    <form id="carBookingForm">
      <div class="form-row">
        <div class="form-group">
          <label for="pickup-location">Pickup Location</label>
          <select id="pickup-location" required>
            <option value="">Select Location</option>
            <option value="New York">New York</option>
            <option value="Los Angeles">Los Angeles</option>
            <option value="Chicago">Chicago</option>
            <option value="Houston">Houston</option>
          </select>
        </div>

        <div class="form-group">
          <label for="car-type">Car Type</label>
          <select id="car-type" required>
            <option value="">Select Car Type</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Convertible">Convertible</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="pickup-date">Pickup Date</label>
          <input type="date" id="pickup-date" required>
        </div>

        <div class="form-group">
          <label for="return-date">Return Date</label>
          <input type="date" id="return-date" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="pickup-time">Pickup Time</label>
          <input type="time" id="pickup-time" required>
        </div>

        <div class="form-group">
          <label for="return-time">Return Time</label>
          <input type="time" id="return-time" required>
        </div>
      </div>

    </form>
    <button type="submit" class="book-btn">Book Now</button>


  </div>

  <!-- recomender car for you -->
  <div class="heading">
    <h2>RECOMENDED CAR FOR YOU </h2>
  </div>
  <div class="container py-5">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm rounded-4 h-100 recomended">
          <div class="position-relative">
            <img src="user/assets/images/marcedes-benchC.jpg" class="card-img-top" alt="Mercedes-Benz">
            <span class="badge-overlay bg-success">Great Price</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="fw-semibold">Mercedes-Benz, C Class</h6>
            <p class="text-muted small mb-3">2.0 D5 PowerPulse Momentum 5dr AW...</p>
            <div class="d-flex justify-content-between small text-muted mb-3">
              <span><i class="fa-solid fa-compass"></i>100 Miles</span>
              <span><i class="fa-solid fa-gas-pump"></i>Petrol</span>
              <span>Automatic</span>
            </div>
            <div class="mb-2">
              <span class="price-old me-2">$40,000</span>
              <span class="fw-bold fs-6">$35,000</span>
            </div>
            <a href="#" class="mt-auto view-link">View Details →</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm rounded-4 h-100 recomended">
          <div class="position-relative">
            <img src="user/assets/images/ranger-black.jpg" class="card-img-top" alt="Ranger Black">
            <span class="badge-overlay bg-primary">Sale</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="fw-semibold">Ranger White – 2021</h6>
            <p class="text-muted small mb-3">2.0 D5 PowerPulse Momentum 5dr AW...</p>
            <div class="d-flex justify-content-between small text-muted mb-3">
              <span><i class="fa-solid fa-compass"></i>250 Miles</span>
              <span><i class="fa-solid fa-gas-pump"></i>Petrol</span>
              <span>Manual</span>
            </div>
            <div class="mb-2">
              <span class="price-old me-2">$180,000</span>
              <span class="fw-bold fs-6">$165,000</span>
            </div>
            <a href="#" class="mt-auto view-link">View Details →</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm rounded-4 h-100 recomended">
          <div class="position-relative">
            <img src="user/assets/images/car3.jpg" class="card-img-top" alt="Ranger White">
            <span class="badge-overlay bg-info">Low Mileage</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="fw-semibold">Ranger Black – 2022</h6>
            <p class="text-muted small mb-3">2.0 D5 PowerPulse Momentum 5dr AW...</p>
            <div class="d-flex justify-content-between small text-muted mb-3">
              <span><i class="fa-solid fa-compass"></i>30000 Miles</span>
              <span><i class="fa-solid fa-gas-pump"></i>Diesel</span>
              <span>Manual</span>
            </div>
            <div class="mb-2">
              <span class="fw-bold fs-6">$25,000</span>
            </div>
            <a href="#" class="mt-auto view-link">View Details →</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm rounded-4 h-100 recomended">
          <div class="position-relative">
            <img src="user/assets/images/ford-explorer.jpg" class="card-img-top" alt="Ford Explorer">
            <span class="badge-overlay bg-success">Great Price</span>
          </div>
          <div class="card-body d-flex flex-column">
            <h6 class="fw-semibold">Ford Explorer 2023</h6>
            <p class="text-muted small mb-3">3.5 D5 PowerPulse Momentum 5dr AW...</p>
            <div class="d-flex justify-content-between small text-muted mb-3">
              <span><i class="fa-solid fa-compass"></i>10 Miles</span>
              <span><i class="fa-solid fa-gas-pump"></i>Diesel</span>
              <span>CVT</span>
            </div>
            <div class="mb-2">
              <span class="fw-bold fs-6">$35,000</span>
            </div>
            <a href="#" class="mt-auto view-link">View Details →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- why choose us -->
  <div class="heading">
    <h2> WHY CHOOSE US</h2>
  </div>
  <section class="why-choose-us">
    <div class="container">
      <div class="features">
        <div class="feature-card">
          <i class="fas fa-dollar-sign"></i>
          <h3>Affordable Rates</h3>
          <p>Get the best value for your money with our competitive pricing.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-car"></i>
          <h3>Wide Range of Cars</h3>
          <p>Choose from SUVs, sedans, hatchbacks, and luxury vehicles.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-headset"></i>
          <h3>24/7 Support</h3>
          <p>We’re here for you anytime, anywhere during your rental.</p>
        </div>
        <div class="feature-card">
          <i class="fas fa-shield-alt"></i>
          <h3>Safe & Secure</h3>
          <p>Our cars are well-maintained and safety checked regularly.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- counter -->
  <div class="container py-5 text-center counter">
    <div class="row g-4">
      <div class="col-12 col-md-4">
        <div class="stat">
          <h2 data-target="450">0</h2>
          <p>Cars For Rent</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="stat">
          <h2 data-target="800">0</h2>
          <p>Happy Clients</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="stat">
          <h2 data-target="750">0</h2>
          <p>Rental Locations</p>
        </div>
      </div>
    </div>
  </div>

  <!-- footer section -->
   <?php include("user/includes/footer.php"); ?>