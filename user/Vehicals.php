<?php include("includes/topbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Rental - Listings</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
:root {
  --bg-1: #071022;
  --bg-2: #0f2940;
  --accent: #ffb020;
  --accent-2: #3ad7c0;
  --muted: #8b98a6;
  --card: #ffffff;
  --glass: rgba(255, 255, 255, 0.06);
}

body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  background: var(--bg-1);
  color: #fff;
}

header {
  text-align: center;
  padding: 2rem 1rem;
}

header h1 {
  color: var(--accent);
  font-size: 2.2rem;
  margin-bottom: .5rem;
}

.filter-bar {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  background: var(--bg-2);
  padding: 1rem;
  justify-content: center;
  border-radius: 10px;
  margin: 0 1rem;
}

.filter-bar input,
.filter-bar select {
  padding: .5rem;
  border-radius: 5px;
  border: none;
  outline: none;
}

.price-range {
  display: flex;
  align-items: center;
  gap: 5px;
}

.car-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
  gap: 1rem;
  padding: 1rem;
}

.car-card {
  background: var(--glass);
  border-radius: 12px;
  overflow: hidden;
  backdrop-filter: blur(6px);
  transition: 0.3s;
}

.car-card:hover {
  transform: translateY(-5px);
}

.car-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.car-info {
  padding: 1rem;
}

.car-info h3 {
  margin: 0;
  font-size: 1.2rem;
}

.car-meta {
  display: flex;
  gap: 10px;
  font-size: .9rem;
  color: var(--muted);
  margin: .5rem 0;
}

.price {
  font-weight: bold;
  color: var(--accent);
  margin-bottom: .5rem;
}

.btn {
  background: var(--accent);
  border: none;
  padding: .5rem 1rem;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}

.btn:hover {
  background: #e09a12;
}

/* Modal */
.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.8);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background: var(--bg-2);
  padding: 1.5rem;
  border-radius: 12px;
  max-width: 500px;
  width: 90%;
  animation: zoomIn .3s ease;
}

@keyframes zoomIn {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

.modal img {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 1rem;
}

.modal h2 {
  margin-top: 0;
  color: var(--accent);
}

.modal .car-meta {
  margin-bottom: 1rem;
}

.close-btn {
  background: transparent;
  border: none;
  font-size: 1.5rem;
  color: #fff;
  float: right;
  cursor: pointer;
}
</style>
</head>
<body>

<header>
  <h1>Find Your Perfect Ride</h1>
  <p>Search, filter, and book your dream car instantly</p>
</header>

<div class="filter-bar">
  <input type="text" id="search" placeholder="Search by name...">
  
  <select id="brandFilter">
    <option value="">All Brands</option>
    <option value="Toyota">Toyota</option>
    <option value="BMW">BMW</option>
    <option value="Audi">Audi</option>
  </select>
  
  <select id="typeFilter">
    <option value="">All Types</option>
    <option value="SUV">SUV</option>
    <option value="Sedan">Sedan</option>
    <option value="Hatchback">Hatchback</option>
  </select>
  
  <div class="price-range">
    <label>Max Price: $<span id="priceValue">100</span></label>
    <input type="range" id="priceFilter" min="20" max="200" value="100">
  </div>
</div>

<div class="car-grid" id="carGrid">
  <!-- Cars will load here -->
</div>

<!-- Modal -->
<div class="modal" id="carModal">
  <div class="modal-content">
    <button class="close-btn" onclick="closeModal()">&times;</button>
    <img id="modalImage" src="" alt="">
    <h2 id="modalName"></h2>
    <div class="car-meta">
      <span><i class="fa-solid fa-user-group"></i> <span id="modalSeats"></span></span>
      <span><i class="fa-solid fa-gas-pump"></i> <span id="modalFuel"></span></span>
      <span><i class="fa-solid fa-gear"></i> <span id="modalTransmission"></span></span>
    </div>
    <p id="modalDescription"></p>
    <div class="price" id="modalPrice"></div>
    <button class="btn">Book Now</button>
  </div>
</div>

<script>
const cars = [
  {name: "Toyota Fortuner", brand: "Toyota", type: "SUV", seats: 7, fuel: "Diesel", transmission: "Manual", price: 80, description: "Spacious and powerful SUV for family trips.", image: "https://via.placeholder.com/400x200"},
  {name: "BMW X5", brand: "BMW", type: "SUV", seats: 5, fuel: "Petrol", transmission: "Automatic", price: 150, description: "Luxury SUV with premium comfort.", image: "https://via.placeholder.com/400x200"},
  {name: "Audi A4", brand: "Audi", type: "Sedan", seats: 5, fuel: "Petrol", transmission: "Automatic", price: 100, description: "Elegant sedan with smooth handling.", image: "https://via.placeholder.com/400x200"}
];

function loadCars() {
  const search = document.getElementById('search').value.toLowerCase();
  const brand = document.getElementById('brandFilter').value;
  const type = document.getElementById('typeFilter').value;
  const maxPrice = document.getElementById('priceFilter').value;
  
  const carGrid = document.getElementById('carGrid');
  carGrid.innerHTML = "";
  
  cars.filter(c => 
    c.name.toLowerCase().includes(search) &&
    (brand === "" || c.brand === brand) &&
    (type === "" || c.type === type) &&
    c.price <= maxPrice
  ).forEach(c => {
    const card = document.createElement('div');
    card.className = "car-card";
    card.innerHTML = `
      <img src="${c.image}" alt="${c.name}">
      <div class="car-info">
        <h3>${c.name}</h3>
        <div class="car-meta">
          <span><i class="fa-solid fa-user-group"></i> ${c.seats}</span>
          <span><i class="fa-solid fa-gas-pump"></i> ${c.fuel}</span>
          <span><i class="fa-solid fa-gear"></i> ${c.transmission}</span>
        </div>
        <div class="price">$${c.price}/day</div>
        <button class="btn" onclick='viewDetails(${JSON.stringify(c)})'>View Details</button>
      </div>
    `;
    carGrid.appendChild(card);
  });
}

function viewDetails(car) {
  document.getElementById('modalImage').src = car.image;
  document.getElementById('modalName').textContent = car.name;
  document.getElementById('modalSeats').textContent = car.seats;
  document.getElementById('modalFuel').textContent = car.fuel;
  document.getElementById('modalTransmission').textContent = car.transmission;
  document.getElementById('modalDescription').textContent = car.description;
  document.getElementById('modalPrice').textContent = `$${car.price}/day`;
  document.getElementById('carModal').style.display = "flex";
}

function closeModal() {
  document.getElementById('carModal').style.display = "none";
}

document.getElementById('search').addEventListener('input', loadCars);
document.getElementById('brandFilter').addEventListener('change', loadCars);
document.getElementById('typeFilter').addEventListener('change', loadCars);
document.getElementById('priceFilter').addEventListener('input', e => {
  document.getElementById('priceValue').textContent = e.target.value;
  loadCars();
});

loadCars();
</script>

</body>
</html>
