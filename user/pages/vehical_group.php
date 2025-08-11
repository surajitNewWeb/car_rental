<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vehicle Selection</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background: #fff;
        font-family: Arial, sans-serif;
    }
    .filter-btns button {
        margin: 5px;
        border-radius: 20px;
        border: none;
        padding: 8px 16px;
        font-size: 14px;
        background: #f0f0f0;
        transition: all 0.3s ease;
    }
    .filter-btns button.active {
        background: #6c4cff;
        color: #fff;
    }
    .card {
        border-radius: 12px;
        border: 1px solid #eee;
        transition: transform 0.2s ease;
    }
    .card:hover {
        transform: translateY(-4px);
    }
    .price {
        color: #6c4cff;
        font-weight: bold;
    }
    .footer-logos img {
        height: 40px;
        margin: 10px;
        filter: grayscale(100%);
        transition: filter 0.3s ease;
    }
    .footer-logos img:hover {
        filter: none;
    }
</style>
</head>
<body>

<div class="container my-5">

    <h3 class="text-center mb-4">Select a vehicle group</h3>

    <!-- Filter Buttons -->
    <div class="d-flex justify-content-center filter-btns flex-wrap">
        <button class="active" data-filter="all">All Vehicles</button>
        <button data-filter="Sedan">Sedan</button>
        <button data-filter="Sport">Sport</button>
        <button data-filter="SUV">SUV</button>
    </div>

    <!-- Car Cards -->
    <div class="row mt-4" id="car-list">
        <!-- Dynamic Content from JS -->
    </div>

    <!-- Footer Logos -->
    <div class="footer-logos text-center mt-5">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.png" alt="Toyota">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Ford_logo_flat.svg" alt="Ford">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Mercedes-Benz_logo_2010.svg" alt="Mercedes">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Jeep_logo.svg" alt="Jeep">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9b/Audi_logo.svg" alt="Audi">
    </div>

</div>

<script>
const cars = [
    { brand: "Mercedes", type: "Sedan", price: 25, img: "https://via.placeholder.com/300x150" },
    { brand: "Mercedes", type: "Sport", price: 50, img: "https://via.placeholder.com/300x150" },
    { brand: "Mercedes", type: "Sedan", price: 45, img: "https://via.placeholder.com/300x150" },
    { brand: "Porsche", type: "SUV", price: 40, img: "https://via.placeholder.com/300x150" },
    { brand: "Toyota", type: "Sedan", price: 35, img: "https://via.placeholder.com/300x150" },
    { brand: "Porsche", type: "SUV", price: 50, img: "https://via.placeholder.com/300x150" },
    { brand: "Mercedes", type: "Sport", price: 50, img: "https://via.placeholder.com/300x150" },
    { brand: "Toyota", type: "Sedan", price: 35, img: "https://via.placeholder.com/300x150" },
    { brand: "Maybach", type: "SUV", price: 70, img: "https://via.placeholder.com/300x150" }
];

const carList = document.getElementById("car-list");
const filterButtons = document.querySelectorAll(".filter-btns button");

function displayCars(filter) {
    carList.innerHTML = "";
    const filteredCars = filter === "all" ? cars : cars.filter(car => car.type === filter);
    filteredCars.forEach(car => {
        carList.innerHTML += `
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card p-3">
                <img src="${car.img}" class="card-img-top" alt="${car.brand}">
                <div class="card-body">
                    <h5 class="card-title">${car.brand} <span class="price">$${car.price}</span> <small>/day</small></h5>
                    <p class="card-text">${car.type}</p>
                    <p class="text-muted small">Automat | PB 95 | Air Conditioner</p>
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        `;
    });
}

filterButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        document.querySelector(".filter-btns button.active").classList.remove("active");
        btn.classList.add("active");
        displayCars(btn.dataset.filter);
    });
});

displayCars("all");
</script>

</body>
</html>
