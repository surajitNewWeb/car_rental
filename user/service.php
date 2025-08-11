<?php include("includes/header.php"); ?>
<!-- main css -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Booking Section</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f5f5f5;
    }

    .booking-section {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        background: #5a2ef4;
        color: white;
        padding: 40px 20px;
        border-radius: 25px;
        max-width: 1200px;
        margin: auto;
        gap: 30px;
    }

    .booking-text {
        flex: 1 1 400px;
        max-width: 500px;
    }

    .booking-text h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .booking-text p {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 25px;
    }

    .booking-text button {
        background: #ff9800;
        border: none;
        color: white;
        padding: 12px 25px;
        font-size: 1rem;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .booking-text button:hover {
        background: #e68900;
    }

    .booking-form {
        background: white;
        color: black;
        padding: 30px;
        border-radius: 15px;
        flex: 1 1 350px;
        max-width: 400px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .booking-form h2 {
        font-size: 1.5rem;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .booking-form select,
    .booking-form input {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: none;
        background: #f5f5f5;
        border-radius: 8px;
        font-size: 1rem;
    }

    .booking-form button {
        background: #ff9800;
        color: white;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        cursor: pointer;
        transition: 0.3s;
    }

    .booking-form button:hover {
        background: #e68900;
    }

    @media (max-width: 768px) {
        .booking-text h1 {
            font-size: 2rem;
        }
        .booking-text {
            text-align: center;
        }
        .booking-form {
            max-width: 100%;
        }
    }
</style>
</head>
<body>

<section class="booking-section">
    <!-- Left Text Section -->
    <div class="booking-text">
        <h1>Experience the road like never before</h1>
        <p>Aliquam adipiscing velit semper morbi. Purus non eu cursus porttitor tristique et gravida. Quis nunc interdum gravida ullamcorper.</p>
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

</body>
</html>

