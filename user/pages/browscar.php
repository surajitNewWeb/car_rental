<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Car Rental UI</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background: #f6f7fb; font-family: 'Inter', sans-serif; }
.card-car { border-radius: 12px; background: #fff; padding: 18px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); height: 100%; display: flex; flex-direction: column; justify-content: space-between; }
.card-car img { height: 140px; object-fit: contain; display: block; margin: auto; }
.price { color: #ff7a00; font-weight: 700; font-size: 1.1rem; }
.old-price { text-decoration: line-through; color: #b0b0b0; font-size: .9rem; }
.heart { cursor: pointer; float: right; color: #dcdcdc; }
.heart.active { color: red; }
.meta { font-size: 0.9rem; color: #777; }
.detail-small-img { width: 80px; border-radius: 8px; display: block; }
</style>
</head>
<body>

<div class="container-fluid py-4">
  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <div class="card p-3">
        <h6>Pick - Up</h6>
        <div class="row g-2">
          <div class="col-4"><select class="form-select"><option>Select city</option></select></div>
          <div class="col-4"><input type="date" class="form-control"></div>
          <div class="col-4"><input type="time" class="form-control"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3">
        <h6>Drop - Off</h6>
        <div class="row g-2">
          <div class="col-4"><select class="form-select"><option>Select city</option></select></div>
          <div class="col-4"><input type="date" class="form-control"></div>
          <div class="col-4"><input type="time" class="form-control"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Car Listing -->
    <div class="col-lg-8">
      <div class="d-flex justify-content-between mb-3">
        <h5>Recommendation Car</h5>
        <div>
          <input id="searchBox" type="text" class="form-control" placeholder="Search cars...">
        </div>
      </div>
      <div id="carList" class="row g-4"></div>
    </div>

    <!-- Rental Details -->
    <div class="col-lg-4">
      <div class="card p-3 sticky-top" style="top: 20px;">
        <h6>Details Rental</h6>
        <div id="rentalDetails" class="text-muted">Select a car to view details</div>
      </div>
    </div>
  </div>
</div>

<script>
// Sample Car Data
const cars = [
  {id:1, name:"Toyota RAV4", type:"SUV", fuel:70, trans:"Manual", seats:6, price:72, old:80, img:"https://via.placeholder.com/200?text=RAV4"},
  {id:2, name:"Volkswagen Tiguan", type:"SUV", fuel:80, trans:"Manual", seats:6, price:80, old:95, img:"https://via.placeholder.com/200?text=Tiguan"},
  {id:3, name:"Hyundai Tucson", type:"SUV", fuel:90, trans:"Manual", seats:6, price:74, old:85, img:"https://via.placeholder.com/200?text=Tucson"},
  {id:4, name:"BMW M3", type:"Sport", fuel:60, trans:"Automatic", seats:4, price:150, old:180, img:"https://via.placeholder.com/200?text=BMW+M3"}
];

const carList = document.getElementById('carList');
const searchBox = document.getElementById('searchBox');
const rentalDetails = document.getElementById('rentalDetails');

function renderCars(filterText='') {
  carList.innerHTML = '';
  const filtered = cars.filter(c => c.name.toLowerCase().includes(filterText.toLowerCase()));
  if (!filtered.length) {
    carList.innerHTML = '<div class="col-12"><div class="p-4 bg-white rounded">No cars found.</div></div>';
    return;
  }
  filtered.forEach(c => {
    const col = document.createElement('div');
    col.className = 'col-sm-6 col-lg-4';
    col.innerHTML = `
      <div class="card-car">
        <div>
          <div class="d-flex justify-content-between align-items-start mb-2">
            <div>
              <div class="text-muted small">${c.type}</div>
              <h6 class="mb-0">${c.name}</h6>
            </div>
            <div class="heart" onclick="this.classList.toggle('active')">&hearts;</div>
          </div>
          <img src="${c.img}" alt="${c.name}">
          <div class="meta mt-3 d-flex gap-3">
            <div>⛽ ${c.fuel}L</div>
            <div>⚙️ ${c.trans}</div>
            <div>👥 ${c.seats} People</div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
          <div>
            <div class="price">$${c.price.toFixed(2)}/day</div>
            <div class="old-price">$${c.old.toFixed(2)}</div>
          </div>
          <button class="btn btn-primary btn-sm" onclick="showDetails(${c.id})">Rent Now</button>
        </div>
      </div>
    `;
    carList.appendChild(col);
  });
}

function showDetails(id) {
  const car = cars.find(c => c.id === id);
  rentalDetails.innerHTML = `
    <div class="d-flex gap-3">
      <img src="${car.img}" class="detail-small-img">
      <div>
        <h6>${car.name}</h6>
        <div class="text-muted">${car.type} • ${car.trans}</div>
        <div class="mt-2 price">$${car.price.toFixed(2)}</div>
      </div>
    </div>
    <hr>
    <strong>Pick - Up</strong>
    <div class="row g-2 mt-1 mb-2">
      <div class="col-12"><select class="form-select"><option>Kota Semarang</option></select></div>
      <div class="col-6"><input type="date" class="form-control"></div>
      <div class="col-6"><input type="time" class="form-control"></div>
    </div>
    <strong>Drop - Off</strong>
    <div class="row g-2 mt-1 mb-2">
      <div class="col-12"><select class="form-select"><option>Kota Semarang</option></select></div>
      <div class="col-6"><input type="date" class="form-control"></div>
      <div class="col-6"><input type="time" class="form-control"></div>
    </div>
    <hr>
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <div class="text-muted small">Total Rental Price</div>
        <div class="price">$${car.price.toFixed(2)}</div>
      </div>
      <button class="btn btn-primary">Payment</button>
    </div>
  `;
}

searchBox.addEventListener('input', () => renderCars(searchBox.value));

// Initial render
renderCars();
</script>

</body>
</html>
