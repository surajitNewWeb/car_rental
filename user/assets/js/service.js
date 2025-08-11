// ====== Data ======
const cars = [
  {name: "Koenigsegg", type: "Sport", capacity: 2, price: 99, oldPrice: null, img: "https://via.placeholder.com/300x150?text=Koenigsegg"},
  {name: "Nissan GT-R", type: "Sport", capacity: 2, price: 80, oldPrice: null, img: "https://via.placeholder.com/300x150?text=Nissan+GT-R"},
  {name: "Rolls Royce", type: "Sport", capacity: 4, price: 96, oldPrice: null, img: "https://via.placeholder.com/300x150?text=Rolls+Royce"},
  {name: "All New Rush", type: "SUV", capacity: 4, price: 72, oldPrice: 80, img: "https://via.placeholder.com/300x150?text=All+New+Rush"},
  {name: "CR-V", type: "SUV", capacity: 6, price: 80, oldPrice: null, img: "https://via.placeholder.com/300x150?text=CR-V"},
  {name: "All New Terios", type: "SUV", capacity: 6, price: 74, oldPrice: null, img: "https://via.placeholder.com/300x150?text=All+New+Terios"},
  {name: "MG ZX Exclusive", type: "Hatchback", capacity: 4, price: 76, oldPrice: null, img: "https://via.placeholder.com/300x150?text=MG+ZX+Exclusive"},
  {name: "New MG ZS", type: "Hatchback", capacity: 4, price: 80, oldPrice: null, img: "https://via.placeholder.com/300x150?text=New+MG+ZS"},
  {name: "MG ZX Excite", type: "Hatchback", capacity: 4, price: 74, oldPrice: null, img: "https://via.placeholder.com/300x150?text=MG+ZX+Excite"}
];

// ====== Dynamic Filters ======
const typeSet = [...new Set(cars.map(c => c.type))];
const capacitySet = [...new Set(cars.map(c => c.capacity))];

function createFilters() {
  const typeFilters = document.getElementById("typeFilters");
  typeFilters.innerHTML = typeSet.map(type => `
    <label>
      <input type="checkbox" class="filter-type" value="${type}" checked> ${type}
    </label>
  `).join("");

  const capacityFilters = document.getElementById("capacityFilters");
  capacityFilters.innerHTML = capacitySet.map(cap => `
    <label>
      <input type="checkbox" class="filter-capacity" value="${cap}" checked> ${cap} Person
    </label>
  `).join("");
}
createFilters();

// ====== Render Cars ======
function renderCars() {
  const carList = document.getElementById("carList");
  const selectedTypes = [...document.querySelectorAll(".filter-type:checked")].map(cb => cb.value);
  const selectedCapacity = [...document.querySelectorAll(".filter-capacity:checked")].map(cb => Number(cb.value));
  const maxPrice = Number(document.getElementById("priceSlider").value);

  const filteredCars = cars.filter(car => 
    selectedTypes.includes(car.type) &&
    selectedCapacity.includes(car.capacity) &&
    car.price <= maxPrice
  );

  carList.innerHTML = filteredCars.map(car => `
    <div class="car-card">
      <img src="${car.img}" alt="${car.name}">
      <h4>${car.name}</h4>
      <p class="price">$${car.price.toFixed(2)}/day</p>
      ${car.oldPrice ? `<p class="old-price">$${car.oldPrice.toFixed(2)}</p>` : ""}
      <button class="btn">Rent Now</button>
    </div>
  `).join("");
}
renderCars();

// ====== Event Listeners ======
document.getElementById("priceSlider").addEventListener("input", e => {
  document.getElementById("priceValue").textContent = e.target.value;
  renderCars();
});
document.addEventListener("change", e => {
  if (e.target.classList.contains("filter-type") || e.target.classList.contains("filter-capacity")) {
    renderCars();
  }
});