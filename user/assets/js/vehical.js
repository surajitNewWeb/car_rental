 // Filter functionality
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