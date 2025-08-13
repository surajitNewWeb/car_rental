<?php include("includes/topbar.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Car Rental</title>
  <!-- contact css -->
  <link rel="stylesheet" href="assets/css/contact.css">
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

  <header>
    <h1>Contact Us</h1>
    <p>We’re here to help you with your car rental needs. Reach out to us anytime!</p>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">

    <!-- Contact Info -->
    <div class="contact-info">
      <h2>Get In Touch</h2>
      <p>Whether you have a question, need assistance, or want to book your ride, our team is ready to assist you.</p>
      <div class="info-item">
        <strong>📍 Address:</strong>
        New Town, Kolkata City, India
      </div>
      <div class="info-item">
        <strong>📞 Phone:</strong>
        +91 7866846668
      </div>
      <div class="info-item">
        <strong>📧 Email:</strong>
        support@carrental.com
      </div>
    </div>

    <!-- Contact Form -->
    <form class="contact-form">
      <label for="name">Full Name</label>
      <input type="text" id="name" placeholder="Enter your name" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" placeholder="Enter your email" required>

      <label for="message">Your Message</label>
      <textarea id="message" rows="5" placeholder="Write your message" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </section>
  <?php include("includes/footer.php"); ?>
</body>

</html>