<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
  <!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #4A4A4A20;
    }
    h3 {
  font-family: 'Montserrat', sans-serif;
  font-weight: 900;
}
    .sidebar {
      height: 100vh;
      background-color: #2D5F3C10;
      padding: 30px 20px;
    }
    .sidebar a {
      display: block;
      padding: 12px 10px;
      color: #4A4A4A;
      text-decoration: none;
      border-radius: 10px;
      margin-bottom: 5px;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #2D5F3C50;
      font-weight: bold;
    }
    .main-content {
      padding: 35px;
    }
    .cta {
      background-color: #2D5F3C50;
      color: #5F4B32;
      font-weight: bold;
      border-radius: 20px;
      padding: 30px;
      margin-bottom: 30px;
    }
    .recent-section h4 {
      font-weight: bold;
    }
    .product-card {
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      text-align: center;
    }
    .product-card img {
      width: 100px;
      margin-bottom: 10px;
    }
    .right-sidebar {
      background-color: #2D5F3C10;
      padding: 20px;
      border-radius: 0;
    }
    .calendar, .info-box, .store-message {
      background-color: white;
      border-radius: 20px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .section-divider {
      border-top: 1px solid #ccc;
      margin: 30px 0;
    }
     .flatpickr-calendar {
    border-radius: 15px;
    background-color: white;
    box-shadow: none;
    font-size: 14px;
    width: 100%;
  }
  .flatpickr-day.today {
    background: #4A90B8;
    color: white;
    border-radius: 50%;
  }
  .btn-custom {
  display: inline-block;
  padding: 10px 24px;
  background: linear-gradient(135deg, #4d7155, #5c8c64);
  color: white;
  border: none;
  border-radius: 50px;
  font-weight: bold;
  text-decoration: none;
  transition: background 0.3s ease;
}
.btn-custom:hover {
  background: linear-gradient(135deg, #5c8c64, #4d7155);
}

.cta-box {
  margin-bottom: 30px;
  border-radius: 25px;
}

  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <aside class="col-md-2 sidebar">
    <div class="text-center mb-4">
      <img src="/img/logo-kula.png" alt="Logo" class="img-fluid" style="max-width: 120px;">
    </div>
      <a href="" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="/requirement"><i class="bi bi-journal-text"></i> Requirement</a>
      <a href="/catalog"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/#"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main content -->
    <main class="col-md-7 main-content">
      <h2 class="fw-bold" style="color: #5F4B32;">Let’s Order Rent !</h2>
      <div class="cta-box d-flex justify-content-between align-items-center p-4 rounded-4" style="background-color: #8C9B7E;">
  <div class="cta-text">
  <h3 class="fw-bold mb-3" style="color: #5F4B32;" >
    Gear Up Instantly<br>for Your Next<br>Adventure
  </h3>
    <a href="/catalog" class="btn-custom">Get started</a>
  </div>
  <div class="cta-image">
    <img src="/img/adventure.png" alt="Adventure Illustration" class="img-fluid" style="max-height: 200px;">
  </div>
</div>

      <section class="recent-section">
        <h4 class="mb-3">Recent 👉</h4>
        <div class="row g-3">
          <div class="col-md-4">
            <div class="product-card">
              <img src="/img/tenda.png" alt="Tenda">
              <h6 class="fw-bold">Tendaki Double Layer</h6>
              <p class="text-muted">Tenda Kap 2<br>for Camping at Mount / Beach</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-card">
              <img src="/img/sepatu.png" alt="Sepatu">
              <h6 class="fw-bold">The North Face</h6>
              <p class="text-muted">Sepatu size 42<br>for Hiking</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-card">
              <img src="/img/sepatu.png" alt="Sepatu">
              <h6 class="fw-bold">The North Face</h6>
              <p class="text-muted">Sepatu size 42<br>for Hiking</p>
            </div>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <section>
        <h4 class="text-center mb-4">~ Our Story ~</h4>
        <div class="row g-3">
          <div class="col-md-6">
            <img src="/img/andong.jpg" class="img-fluid rounded" alt="Story 1">
          </div>
          <div class="col-md-6">
            <img src="/img/andong.jpg" class="img-fluid rounded" alt="Story 2">
          </div>
        </div>
      </section>
    </main>

    <!-- Right Sidebar -->
    <aside class="col-md-3 right-sidebar">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <small>Hallo,</small><br>
          <strong>Asthivia Amitaba</strong>
        </div>
        <i class="bi bi-person-circle fs-2"></i>
      </div>

      <div>
        <h6>Your Calendar For Activity</h6>
      </div>
      <div class="calendar">
        <input type="text" id="calendar-widget" class="form-control bg-white" readonly style="cursor: default;">
      </div>

      <div>
        <h6>More Info from Owners</h6>
      </div>
      <div class="info-section mb-4">
        <a href="https://www.instagram.com/kula.outdoor/" target="_blank">
        <img src="/img/rinjani.png" class="img-fluid" alt="Info">
        </a>
      </div>


      <div>
         <h6>Massage from Store</h6>
      </div>
      <div>
        <div class="alert alert-light mt-2">
          <strong>Kula Outdoor</strong><br>
          Hi there, let’s go payment your cart 😉
        </div>
      </div>
    </aside>
  </div>
</div>
</body>
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#calendar-widget", {
    inline: true,
    defaultDate: new Date(),
    disableMobile: true,
    locale: {
      firstDayOfWeek: 1 // Monday as first day
    }
  });
</script>

</html>
