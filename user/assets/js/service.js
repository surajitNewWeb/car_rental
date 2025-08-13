  document.querySelectorAll(".view-details").forEach(btn => {
  btn.addEventListener("click", function() {
    document.getElementById("modal-title").textContent = this.dataset.name;
    document.getElementById("modal-price").textContent = this.dataset.price;
    document.getElementById("modal-image").src = this.dataset.image;
    
    let features = this.dataset.features.split(",");
    let featuresHTML = features.map(f => `<span>${f.trim()}</span>`).join("");
    document.getElementById("modal-features").innerHTML = featuresHTML;
    
    document.getElementById("modal-description").textContent = this.dataset.description;
    
    document.querySelector(".modal-overlay").style.display = "flex";
  });
});

document.querySelector(".close-modal").addEventListener("click", function() {
  document.querySelector(".modal-overlay").style.display = "none";
});

document.querySelector(".modal-overlay").addEventListener("click", function(e) {
  if (e.target === this) {
    this.style.display = "none";
  }
});