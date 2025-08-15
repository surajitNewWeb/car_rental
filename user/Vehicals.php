<?php include("includes/topbar.php"); ?>
<?php include("config/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Car Rental - Filter & Modal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
:root {
  --navy: #0b1a2e;
  --navy-2: #0f2742;
  --ink: #0b1020;
  --gold: #d4af37;
  --gold-2: #b48900;
  --glass: rgba(255, 255, 255, .06);
  --muted: #a5b0c2;
  --card: #0e2038;
  --white: #f7f8fb;
}

/* Basic Reset */
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  font-family: Arial, sans-serif;
  background-color: var(--navy);
  color: var(--white);
}

/* Filter Bar */
.filter-bar {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  padding: 15px;
  background: var(--navy-2);
  position: sticky;
  top: 0;
  z-index: 100;
}
.filter-bar input, .filter-bar select {
  padding: 8px;
  border: 1px solid var(--gold);
  border-radius: 4px;
  background: var(--ink);
  color: var(--white);
}
.filter-bar input[type="range"] {
  width: 150px;
}
.filter-bar label {
  color: var(--gold);
  font-weight: bold;
}

/* Grid */
.car-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 20px;
  padding: 20px;
}
.car-card {
  background: var(--card);
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.2s ease;
}
.car-card:hover { transform: scale(1.02); }
.car-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
.info {
  padding: 15px;
}
.info h3 {
  margin-bottom: 10px;
  color: var(--gold);
}
.icons p {
  font-size: 14px;
  color: var(--muted);
  margin: 3px 0;
}
.icons i {
  color: var(--gold);
  margin-right: 6px;
}
.price {
  font-weight: bold;
  margin: 10px 0;
  color: var(--gold);
}
.view-btn {
  background: var(--gold);
  color: var(--ink);
  padding: 8px 12px;
  border: none;
  cursor: pointer;
  border-radius: 4px;
}
.view-btn:hover {
  background: var(--gold-2);
}

/* Modal Updated Style */
.modal {
  display: none;
  position: fixed;
  z-index: 200;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.8);
  justify-content: center;
  align-items: center;
  padding: 20px;
}
.modal-content {
  background: var(--glass);
  backdrop-filter: blur(12px);
  border: 1px solid var(--gold);
  padding: 20px;
  border-radius: 12px;
  width: 100%;
  max-width: 550px;
  color: var(--white);
  animation: fadeIn 0.3s ease;
  box-shadow: 0 4px 25px rgba(0,0,0,0.5);
}
.modal-content img {
  border-radius: 8px;
  margin-bottom: 15px;
}
.modal-content h2 {
  color: var(--gold);
  margin-bottom: 10px;
}
.modal-content p {
  margin: 6px 0;
}
@keyframes fadeIn {
  from { transform: scale(0.9); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
.close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 28px;
  cursor: pointer;
  color: var(--gold);
}
.close:hover { color: var(--gold-2); }
</style>
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
<div class="car-card"
     data-name="<?php echo $row['name']; ?>"
     data-brand="<?php echo $row['brand']; ?>"
     data-type="<?php echo $row['type']; ?>"
     data-price="<?php echo $row['price']; ?>">

    <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
    <div class="info">
        <h3><?php echo $row['name']; ?></h3>
        <div class="icons">
            <p><i class="fa-solid fa-car"></i><span class="meta"> Brand:</span> <?php echo $row['brand']; ?></p>
            <p><i class="fa-solid fa-list"></i><span class="meta"> Type:</span> <?php echo $row['type']; ?></p>
            <p><i class="fa-solid fa-chair"></i><span class="meta"> Seats:</span> <?php echo $row['seats']; ?></p>
            <p><i class="fa-solid fa-gas-pump"></i><span class="meta"> Fuel:</span> <?php echo $row['fuel']; ?></p>
            <p><i class="fa-solid fa-gear"></i><span class="meta"> Transmission:</span> <?php echo $row['transmission']; ?></p>
        </div>
        <div class="price">$<?php echo $row['price']; ?> /day</div>
        <button class="view-btn" onclick="openModal(this)">View Details</button>
    </div>
</div>
<?php } ?>
</div>

<!-- Modal -->
<div class="modal" id="carModal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage" src="" style="width:100%;">
    <h2 id="modalTitle"></h2>
    <p><strong>Brand:</strong> <span id="modalBrand"></span></p>
    <p><strong>Type:</strong> <span id="modalType"></span></p>
    <p><strong>Seats:</strong> <span id="modalSeats"></span></p>
    <p><strong>Fuel:</strong> <span id="modalFuel"></span></p>
    <p><strong>Transmission:</strong> <span id="modalTransmission"></span></p>
    <p><strong>Price:</strong> $<span id="modalPrice"></span> /day</p>
  </div>
</div>

<script>
const searchInput = document.getElementById("searchInput");
const typeFilter = document.getElementById("typeFilter");
const brandFilter = document.getElementById("brandFilter");
const priceRange = document.getElementById("priceRange");
const priceValue = document.getElementById("priceValue");
const carGrid = document.getElementById("carGrid").children;

function filterCars() {
    const searchText = searchInput.value.toLowerCase();
    const type = typeFilter.value;
    const brand = brandFilter.value;
    const maxPrice = parseInt(priceRange.value);

    for (let card of carGrid) {
        const name = card.dataset.name.toLowerCase();
        const cType = card.dataset.type;
        const cBrand = card.dataset.brand;
        const cPrice = parseInt(card.dataset.price);

        const matches = 
            (name.includes(searchText)) &&
            (type === "" || cType === type) &&
            (brand === "" || cBrand === brand) &&
            (cPrice <= maxPrice);

        card.style.display = matches ? "block" : "none";
    }
}

searchInput.addEventListener("input", filterCars);
typeFilter.addEventListener("change", filterCars);
brandFilter.addEventListener("change", filterCars);
priceRange.addEventListener("input", () => {
    priceValue.textContent = priceRange.value;
    filterCars();
});

// Modal
function openModal(btn) {
    const card = btn.closest(".car-card");
    document.getElementById("modalImage").src = card.querySelector("img").src;
    document.getElementById("modalTitle").innerText = card.dataset.name;

    const details = card.querySelectorAll(".icons p");
    document.getElementById("modalBrand").innerText = details[0].textContent.replace('Brand:', '').trim();
    document.getElementById("modalType").innerText = details[1].textContent.replace('Type:', '').trim();
    document.getElementById("modalSeats").innerText = details[2].textContent.replace('Seats:', '').trim();
    document.getElementById("modalFuel").innerText = details[3].textContent.replace('Fuel:', '').trim();
    document.getElementById("modalTransmission").innerText = details[4].textContent.replace('Transmission:', '').trim();
    document.getElementById("modalPrice").innerText = card.dataset.price;

    document.getElementById("carModal").style.display = "flex";
}
function closeModal() {
    document.getElementById("carModal").style.display = "none";
}
</script>

</body>
</html>
