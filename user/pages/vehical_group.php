<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Luxury Cars</title>
<link rel="stylesheet" href="#">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<style>
  body {
  font-family: Arial, sans-serif;
  background: #0d1321;
  color: #fff;
  margin: 0;
  padding: 20px;
}

.car-section {
  max-width: 1300px;
  margin: auto;
}

.car-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
  gap: 20px;
}

.car-card {
  background: #121b2c;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.car-img {
  position: relative;
}
.car-img img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.badge {
  position: absolute;
  top: 10px;
  left: 10px;
  padding: 4px 10px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
}
.badge.best-seller { background: #ffc107; color:#000; }
.badge.new { background: #ff9800; color:#fff; }
.badge.limited { background: #cddc39; color: #000; }
.badge.executive { background: #2196f3; color:#fff; }

.car-info {
  padding: 15px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.car-info h3 {
  font-size: 1.2rem;
}

.car-meta {
  display: flex;
  gap: 10px;
  font-size: 0.9rem;
  color: #ccc;
}

.price {
  color: #ffeb3b;
  font-size: 1.1rem;
  font-weight: bold;
}

.car-buttons {
  display: flex;
  gap: 10px;
}

.btn {
  flex: 1;
  padding: 8px;
  border-radius: 6px;
  border: none;
  font-weight: bold;
  cursor: pointer;
}
.btn.yellow {
  background: #ffeb3b;
  color: #000;
}
.btn.outline {
  background: transparent;
  border: 1px solid #ccc;
  color: #ccc;
}

/* MODAL */
.modal-overlay {
  position: fixed;
  top:0; left:0; right:0; bottom:0;
  background: rgba(0,0,0,0.8);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  padding: 20px;
}

.modal-content {
  background: #0f172a;
  border-radius: 12px;
  max-width: 960px;
  width: 100%;
  overflow: hidden;
  position: relative;
}

.modal-body {
  display: flex;
  flex-direction: row;
}

.modal-left {
  flex: 1;
  background: #000;
}

.modal-left img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.modal-right {
  flex: 1;
  padding: 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  color: white;
}

.modal-right h2 {
  font-size: 1.8rem;
  margin-bottom: 10px;
}

.modal-price {
  font-size: 1.6rem;
  font-weight: 800;
  color: #facc15;
  margin-bottom: 20px;
}

.modal-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 20px;
}

.modal-meta span {
  background: rgba(255,255,255,0.08);
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  gap: 6px;
}

.modal-description {
  font-size: 0.95rem;
  color: #cbd5e1;
  margin-bottom: 30px;
  line-height: 1.5;
}

.modal-buttons {
  display: flex;
  gap: 12px;
}

.modal-buttons .btn {
  padding: 12px 20px;
  font-size: 1rem;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  flex: 1;
  text-align: center;
}

.modal-buttons .btn.yellow {
  background: #facc15;
  color: #000;
  border: none;
}

.modal-buttons .btn.outline {
  background: transparent;
  border: 2px solid #facc15;
  color: #facc15;
}

.close-modal {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 2rem;
  cursor: pointer;
  color: #facc15;
}

</style>
</head>
<body>

<section class="car-section">
  <div class="car-grid">
    <?php
    $sql = "SELECT * FROM cars";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="car-card">
              <div class="car-img">
                <span class="badge '.$row['badge'].'">'.$row['badge'].'</span>
                <img src="'.$row['image'].'" alt="'.$row['name'].'">
              </div>
              <div class="car-info">
                <h3>'.$row['name'].'</h3>
                <div class="car-meta">
                  <span><i class="fa-solid fa-user-group"></i> '.$row['seats'].'</span>
                  <span><i class="fa-solid fa-gas-pump"></i> '.$row['fuel'].'</span>
                  <span><i class="fa-solid fa-gear"></i> '.$row['transmission'].'</span>
                </div>
                <div class="price">$'.$row['price'].'/day</div>
                <div class="car-buttons">
                  <button class="btn yellow view-details" 
                    data-name="'.$row['name'].'" 
                    data-price="$'.$row['price'].'/day" 
                    data-features="'.$row['features'].'" 
                    data-description="'.$row['description'].'" 
                    data-image="'.$row['image'].'">View Details</button>
                  <button class="btn outline">Add to Wishlist</button>
                </div>
              </div>
            </div>
            ';
        }
    }
    ?>
  </div>
</section>

<!-- Modal -->
<div class="modal-overlay" style="display:none;">
  <div class="modal-content">
    <span class="close-modal">&times;</span>
    <div class="modal-body">
      <div class="modal-left">
        <img id="modal-image" src="" alt="">
      </div>
      <div class="modal-right">
        <h2 id="modal-title"></h2>
        <div class="modal-price" id="modal-price"></div>
        <div class="modal-meta" id="modal-features"></div>
        <div class="modal-description" id="modal-description"></div>
        <div class="modal-buttons">
          <button class="btn yellow">Book Now</button>
          <button class="btn outline"><i class="fa-solid fa-share"></i> Share</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script >
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

</script>
</body>
</html>
