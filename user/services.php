<?php include("includes/topbar.php"); ?>
<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DriveEasy Rentals — Services</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- service css -->
  <link rel="stylesheet" href="assets/css/service.css">
</head>

<body>
  <!-- HERO -->
  <section class="service_hero">
    <div class="wrap">
      <div>
        <h1>Luxury Car Rentals, Chauffeur Service & Bespoke Travel</h1>
        <p>Arrive with presence. Choose from our curated fleet of luxury sedans, SUVs and exotics — backed by
          white-glove service, flexible plans and 24×7 support.</p>
        <div class="cta-row">
          <button class="btn btn-gold"><i class="fa-solid fa-car"></i> Explore Fleet</button>
          <button class="btn btn-ghost"><i class="fa-solid fa-headset"></i> Talk to Concierge</button>
        </div>
      </div>
      <div class="hero-card">
        <div class="row"><strong>Today’s Spotlight</strong></div>
        <img src="assets/images/contact.jpg"
          alt="Spotlight Car" style="border-radius:12px;height:220px;object-fit:cover;">
        <div class="row">
          <div>Mercedes S-Class 2024</div>
          <div class="price">$259/day</div>
        </div>
        <small style="color:var(--muted)">Complimentary airport delivery • Free cancellation within 24h</small>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="section">
    <div class="container">
      <div class="heading">
        <h2>What We Offer</h2>
        <p>Crafted for business, leisure and life’s biggest moments. Pick a service, we’ll perfect the details.</p>
      </div>
      <div class="services-grid">

        <article class="service-card"><i class="fa-solid fa-heart"></i>
          <h3>Wedding & VIP</h3>
          <p>Ribboning, décor & on-site coordinator included.</p>
        </article>
        <article class="service-card"><i class="fa-solid fa-map-location-dot"></i>
          <h3>Custom Tours</h3>
          <p>City highlights, wine routes or coast drives—your pace.</p>
        </article>
        <article class="service-card"><i class="fa-solid fa-id-card"></i>
          <h3>Self-Drive</h3>
          <p>Low deposit, quick KYC, unlimited km options.</p>
        </article>
        <article class="service-card"><i class="fa-solid fa-shield-halved"></i>
          <h3>All-Risk Cover</h3>
          <p>Full insurance & 24×7 roadside assistance.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- FLEET -->
  <div class="contain">
    <div class="heading">
      <h2>Our Luxury Fleet</h2>
      <p>Handpicked models with impeccable maintenance and premium interiors.</p>
    </div>

<section class="car-section">
  <div class="car-grid">
    <?php
      $sel="SELECT * FROM vehical";
      $rs=$con->query($sel);
      while($row=$rs->fetch_assoc()) {
      ?>


      <?php }?>

    </div>
</section>

  </div>

  <!-- Modal -->


  <!-- HOW IT WORKS -->
  <section class="section">
    <div class="container">
      <div class="heading">
        <h2>How It Works</h2>
        <p>Three simple steps and you’re on the road.</p>
      </div>
      <div class="steps">
        <div class="step">
          <div class="num">1</div>
          <h3>Select</h3>
          <p>Pick your vehicle, dates and add-ons.</p>
        </div>
        <div class="step">
          <div class="num">2</div>
          <h3>Verify</h3>
          <p>Quick KYC & secure payment. Fully encrypted.</p>
        </div>
        <div class="step">
          <div class="num">3</div>
          <h3>Drive</h3>
          <p>Doorstep delivery or airport pickup. Enjoy the ride.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OFFERS -->
  <section class="section" style="padding-top:24px">
    <div class="container">
      <div class="heading">
        <h2>Special Offers</h2>
        <p>Seasonal advantages for members & early bookings.</p>
      </div>
      <div class="offers">
        <article class="offer">
          <h3>Weekend Escape</h3>
          <p>Fri–Mon bundle with 15% off + free add-on driver.</p>
          <div class="badge">Limited</div>
        </article>
        <article class="offer">
          <h3>Early Bird</h3>
          <p>Book 14+ days ahead and save up to 20%.</p>
        </article>
        <article class="offer">
          <h3>Long Term</h3>
          <p>Monthly contracts with concierge maintenance included.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="section">
    <div class="container">
      <div class="heading">
        <h2>Clients Love Us</h2>
        <p>Rated 4.9/5 by discerning travelers and executives.</p>
      </div>
      <div class="testi-grid">
        <article class="testi">
          <i class="fa-solid fa-star" style="color:var(--gold)"></i>
          “Pristine cars and seamless airport pickup. Felt like a private service.”
          <div class="who">
            <span class="avatar"><img
                src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=200&auto=format&fit=crop"
                alt=""></span>
            <div><strong>Emily R.</strong>
              <div style="color:var(--muted);font-size:.9rem">Los Angeles</div>
            </div>
          </div>
        </article>
        <article class="testi">
          <i class="fa-solid fa-star" style="color:var(--gold)"></i>
          “The S-Class was immaculate. Concierge handled everything.”
          <div class="who">
            <span class="avatar"><img
                src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=200&auto=format&fit=crop"
                alt=""></span>
            <div><strong>Daniel M.</strong>
              <div style="color:var(--muted);font-size:.9rem">Miami</div>
            </div>
          </div>
        </article>
        <article class="testi">
          <i class="fa-solid fa-star" style="color:var(--gold)"></i>
          “Booked for our wedding—spectacular arrival and support on the day.”
          <div class="who">
            <span class="avatar"><img
                src="https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?q=80&w=200&auto=format&fit=crop"
                alt=""></span>
            <div><strong>Sophia K.</strong>
              <div style="color:var(--muted);font-size:.9rem">New York</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- TRUST BAR -->
  <section class="section" style="padding-top:24px">
    <div class="container">
      <div class="heading">
        <h2>Trusted Partners</h2>
        <p>We collaborate with the world’s leading brands & networks.</p>
      </div>
      <div class="trustbar">
        <img src="assets/images/amex.png" alt="Amex" style="width:200;height: 60;">
        <img src="assets/images/visa.jpg" alt="Visa" style="width:200;height: 60;">
        <img src="assets/images/mastyercard.jpg" alt="Mastercard" style="width:200;height: 60;">
        <img src="assets/images/hertz.jpg" alt="Hertz" style="width:200;height: 60;">
      </div>
    </div>
  </section>

  <!-- CTA -->
  <div class="cta">
    <div>
      <strong style="font-size:1.1rem">Ready to elevate your next journey?</strong>
      <div style="opacity:.8">Premium cars, concierge care, flexible plans.</div>
    </div>
    <a href="#">Get a Quote</a>
  </div>
  <?php include("includes/footer.php"); ?>
  <script src="assets/js/service.js"></script>
</body>

</html>