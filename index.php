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
          <li class="nav-item"><a class="nav-link" href="/car_rental/user/contact.php">Contact Us</a></li>
        </ul>

        <div class="d-flex align-items-center gap-2">
          <a href="/car_rental/user/pages/signup.php" class="btn btn-outline-gold btn-sm"> <i class="fa-regular fa-user me-1"></i> Sign -Up</a>
          <a href="/car_rental/user/pages/login.php" class="btn btn-gold btn-sm">Log in</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner container">

      <div class="hero-copy">
        <div class="search-bubble shadow">
          <select aria-label="type">
            <option>Used Cars</option>
            <option>New Cars</option>
          </select>
          <select aria-label="makes">
            <option>Any Makes</option>
            <option>Tesla</option>
            <option>BMW</option>
            <option>Audi</option>
          </select>
          <select aria-label="models">
            <option>Any Models</option>
            <option>Model S</option>
            <option>Model 3</option>
            <option>Model X</option>
          </select>
          <select aria-label="price">
            <option>All Prices</option>
            <option>Below $20,000</option>
            <option>$20,000 - $50,000</option>
            <option>Above $50,000</option>
          </select>

          <button class="search-btn btn" title="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>

        <h1>Enjoy your life with our comfortable car</h1>
        <p>Choose from a wide selection of vehicles — affordable rates, excellent support and easy booking. Drive happy, drive safe.</p>

        <div class="hero-cta">
          <a class="btn btn-gold btn-lg" href="#booking">Explore Now</a>
          <a class="btn btn-ghost" href="#recomended">Browse Cars</a>
        </div>
      </div>

      <div class="hero-card">
        <h5>Special Weekend Deal</h5>
        <p class="mb-0">Rent an SUV this weekend and get <strong class="price">20% off</strong> plus free delivery (limited time).</p>
        <div style="height:12px"></div>
        <small class="text-muted">Use code: <strong>WEEKEND20</strong></small>
      </div>

    </div>
  </section>

  <!-- SELECT YOUR VEHICLE TYPE -->
  <div class="heading"><h2>SELECT YOUR VEHICAL TYPE</h2></div>
  <section class="category-slider">
    <div class="cat-item"><img src="user/assets/images/SVG.png" alt="SUV"><p>SUV</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (1).png" alt="Sedan"><p>Sedan</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (2).png" alt="Hatchback"><p>Hatchback</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (3).png" alt="Coupe"><p>Coupe</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (4).png" alt="Hybrid"><p>Hybrid</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (5).png" alt="Convertible"><p>Convertible</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (6).png" alt="Van"><p>Van</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (7).png" alt="Truck"><p>Truck</p></div>
    <div class="cat-item"><img src="user/assets/images/SVG (8).png" alt="Electric"><p>Electric</p></div>
  </section>

  <!-- MOST SEARCHES CAR -->
  <div class="heading"><h2>MOST SEARCHES CAR</h2></div>
  <section class="car-section">
    <div class="car-grid">
      <div class="car-card">
        <img src="user/assets/images/hyundai creta.jpg" alt="Hyundai Creta">
        <div class="card-body">
          <h3>Hyundai Creta</h3>
          <div class="d-flex justify-content-between align-items-center">
            <div class="price">₹1,999 / day</div>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>

      <div class="car-card">
        <img src="user/assets/images/maruti_swift.jpg" alt="Maruti Swift">
        <div class="card-body">
          <h3>Maruti Swift</h3>
          <div class="d-flex justify-content-between align-items-center">
            <div class="price">₹999 / day</div>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>

      <div class="car-card">
        <img src="user/assets/images/toyota_inova.jpg" alt="Toyota Innova">
        <div class="card-body">
          <h3>Toyota Innova</h3>
          <div class="d-flex justify-content-between align-items-center">
            <div class="price">₹2,999 / day</div>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>

      <div class="car-card">
        <img src="user/assets/images/mahindra_scorpio.png" alt="Mahindra Scorpio">
        <div class="card-body">
          <h3>BS6 Mahindra Scorpio</h3>
          <div class="d-flex justify-content-between align-items-center">
            <div class="price">₹3,499 / day</div>
            <button class="btn">Rent Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PERFECT BUDGET -->
  <div class="heading"><h2>PERFECT BUDGET</h2></div>
  <section class="two-column-section container">
    <div class="image-side">
      <video controls poster="user/assets/images/car1.jpg">
        <source src="user/assets/images/thumbnail.mp4" type="video/mp4">
      </video>
    </div>
    <div class="content-side">
      <h2>Get A Fair Price For Your Car Booking</h2>
      <p>We are committed to providing our customers with exceptional service, competitive pricing, and a wide range of vehicles to suit any budget.</p>
      <ul class="checklist">
        <li>We are the UK’s largest provider, with more patrols in more places</li>
        <li>You get 24/7 roadside assistance</li>
        <li>We fix 4 out of 5 cars at the roadside</li>
      </ul>
      <button class="btn btn-gold mt-3">Get started <i class="fa-solid fa-arrow-right ms-2"></i></button>
    </div>
  </section>

  <!-- ONLINE EVERYWHERE -->
  <div class="heading"><h2>ONLINE EVERYWHERE</h2></div>
  <section class="two-column-section container">
    <div class="content-side">
      <h2>Online, in-person, everywhere</h2>
      <p>Choose from thousands of vehicles from multiple brands and buy online with Click & Drive, or visit us at one of our dealerships today.</p>
      <a href="#" class="btn btn-gold">Get started <i class="fa-solid fa-arrow-right ms-2"></i></a>
    </div>
    <div class="image-side">
      <img src="user/assets/images/online_inperson .jpg" alt="Online & in-person">
    </div>
  </section>

  <!-- BOOK YOUR VEHICLE -->
  <div class="heading" id="booking"><h2>BOOK YOUR VEHICAL</h2></div>
  <div class="booking-form container">
    <form id="carBookingForm">
      <div class="form-row mb-3">
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

      <div class="form-row mb-3">
        <div class="form-group">
          <label for="pickup-date">Pickup Date</label>
          <input type="date" id="pickup-date" required>
        </div>

        <div class="form-group">
          <label for="return-date">Return Date</label>
          <input type="date" id="return-date" required>
        </div>
      </div>

      <div class="form-row mb-1">
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

  <!-- RECOMMENDED -->
  <div class="heading" id="recomended"><h2>RECOMENDED CAR FOR YOU</h2></div>
  <div class="container py-5">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm rounded-4 h-100 recomended position-relative">
          <img src="user/assets/images/marcedes-benchC.jpg" class="card-img-top" alt="Mercedes-Benz">
          <span class="badge-overlay bg-success">Great Price</span>
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
        <div class="card shadow-sm rounded-4 h-100 recomended position-relative">
          <img src="user/assets/images/ranger-black.jpg" class="card-img-top" alt="Ranger Black">
          <span class="badge-overlay bg-primary">Sale</span>
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
        <div class="card shadow-sm rounded-4 h-100 recomended position-relative">
          <img src="user/assets/images/car3.jpg" class="card-img-top" alt="Ranger White">
          <span class="badge-overlay bg-info">Low Mileage</span>
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
        <div class="card shadow-sm rounded-4 h-100 recomended position-relative">
          <img src="user/assets/images/ford-explorer.jpg" class="card-img-top" alt="Ford Explorer">
          <span class="badge-overlay bg-success">Great Price</span>
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

  <!-- WHY CHOOSE US -->
  <div class="heading"><h2>WHY CHOOSE US</h2></div>
  <section class="why-choose-us">
    <div class="features container">
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
  </section>

  <!-- COUNTER -->
  <div class="counter">
    <div class="stat"><h2 data-target="450">0</h2><p>Cars For Rent</p></div>
    <div class="stat"><h2 data-target="800">0</h2><p>Happy Clients</p></div>
    <div class="stat"><h2 data-target="750">0</h2><p>Rental Locations</p></div>
  </div>

  <!-- FOOTER -->
  <footer class="footer-glass">
    <div class="container">
      <section class="newsletter-section">
        <div class="d-flex align-items-center gap-3">
          <img src="/car_rental/user/assets/images/logo.jpg" class="footer-logo" alt="logo">
          <div>
            <strong class="text-white">CarRent</strong>
            <div class="small text-muted">Receive pricing updates, shopping tips & more!</div>
          </div>
        </div>

        <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thanks — signed up! (demo)')">
          <input type="email" placeholder="Your email address" required>
          <button type="submit">Sign Up</button>
        </form>
      </section>

      <hr style="border-color:rgba(255,255,255,0.04)">

      <div class="row gy-4">
        <div class="col-6 col-lg-2">
          <h6 class="text-white">Company</h6>
          <a class="footer-link" href="#">About Us</a>
          <a class="footer-link" href="#">Careers</a>
          <a class="footer-link" href="#">Press</a>
          <a class="footer-link" href="#">Contact</a>
        </div>

        <div class="col-6 col-lg-2">
          <h6 class="text-white">Quick Links</h6>
          <a class="footer-link" href="#">Home</a>
          <a class="footer-link" href="#">Offers</a>
          <a class="footer-link" href="#">Blog</a>
          <a class="footer-link" href="#">FAQs</a>
        </div>

        <div class="col-6 col-lg-2">
          <h6 class="text-white">Our Brands</h6>
          <a class="footer-link" href="#">Mercedes</a>
          <a class="footer-link" href="#">Audi</a>
          <a class="footer-link" href="#">BMW</a>
          <a class="footer-link" href="#">Ford</a>
        </div>

        <div class="col-6 col-lg-2">
          <h6 class="text-white">Vehicle Types</h6>
          <a class="footer-link" href="#">SUV</a>
          <a class="footer-link" href="#">Sedan</a>
          <a class="footer-link" href="#">Convertible</a>
          <a class="footer-link" href="#">Truck</a>
        </div>

        <div class="col-12 col-lg-4">
          <h6 class="text-white">Our Mobile App</h6>
          <p class="text-muted small">Download our app for faster access and exclusive deals.</p>
          <div class="d-flex gap-2 mb-3">
            <a href="#"><img src="/car_rental/user/assets/images/google-pay.jpg" alt="Google Play" height="40"></a>
            <a href="#"><img src="/car_rental/user/assets/images/app-store.jpg" alt="App Store" height="40"></a>
          </div>
          <div class="d-flex gap-3">
            <a href="#" class="text-muted"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="text-muted"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="text-muted"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="text-muted"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <div class="text-center mt-4 small text-muted">
        &copy; 2025 CAR RENT. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ---------- Small JS: counters + simple scroll reveal ---------- -->
  <script>
    // Counter animation
    document.querySelectorAll('.stat h2').forEach(el=>{
      const target = +el.dataset.target;
      let current = 0;
      const increment = Math.max(1, Math.floor(target/120));
      const timer = setInterval(()=>{
        current += increment;
        if(current >= target){ el.textContent = target; clearInterval(timer); }
        else el.textContent = current;
      }, 12);
    });

    // Simple scroll reveal using IntersectionObserver
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.style.transition = 'transform .6s ease, opacity .6s ease';
          e.target.style.transform = 'translateY(0)';
          e.target.style.opacity = 1;
          io.unobserve(e.target);
        }
      });
    }, {threshold: 0.12});

    // apply to key blocks
    document.querySelectorAll('.car-card, .feature-card, .recomended, .two-column-section, .hero-card').forEach(n=>{
      n.style.transform = 'translateY(18px)';
      n.style.opacity = 0;
      io.observe(n);
    });

    // small UX: open mobile nav when clicking search icon (if collapsed)
    document.querySelectorAll('.search-btn').forEach(b=>{
      b.addEventListener('click', ()=>{/* placeholder for search action */});
    });

    // optional: prevent form default for demo
    document.getElementById('carBookingForm').addEventListener('submit', function(e){
      e.preventDefault();
      alert('Booking demo — form submitted (demo)');
    });
  </script>
</body>
</html>
