<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #F4F4F4;
    }
    .sidebar {
      height: 100vh;
      background-color: #E0E0E0;
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
    h2 {
      color: #5F4B32;
      font-weight: 900;
    }
    .breadcrumb {
      font-size: 14px;
    }
    .thumbnail {
      width: 80px;
      border-radius: 10px;
      margin-bottom: 10px;
      cursor: pointer;
    }
    .main-image {
      width: 100%;
      border-radius: 10px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
    }
    .product-detail {
      font-size: 14px;
    }
    .product-detail li {
      margin-bottom: 4px;
    }
    .btn-hari {
      border: none;
      background-color: #EDEDED;
      margin: 3px;
      padding: 6px 12px;
      border-radius: 5px;
      font-weight: 600;
    }
    .btn-hari.active {
      background-color: #4A90B8;
      color: white;
    }
    .qty-control {
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 120px;
      margin-bottom: 15px;
    }
    .qty-control button {
      background-color: transparent;
      border: none;
      padding: 5px 10px;
      font-size: 18px;
    }
    .qty-control input {
      width: 30px;
      text-align: center;
      border: none;
      background-color: transparent;
    }
    .radio-color input[type="radio"] {
      margin-right: 5px;
    }
    .section-divider {
      border-top: 1px solid #ccc;
      margin: 20px 0;
    }
    .product-title {
      font-weight: 700;
      font-size: 20px;
    }
    .price-text {
      font-size: 16px;
      font-weight: 600;
    }
    .action-btn {
      width: 100%;
      padding: 10px;
      font-weight: 600;
      border-radius: 5px;
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
      <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="/requirement"><i class="bi bi-journal-text"></i> Requirement</a>
      <a href="/catalog" class="active"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 main-content">
      <h2>Come on, add it to your cart now ! 🫣</h2>
      <nav class="breadcrumb">
        <a href="/catalog">Catalog</a> / <a href="#">Tent</a> / TDK/dl-k2
      </nav>

      <div class="row">
        <!-- Thumbnails -->
        <div class="col-md-1">
          <img src="/img/tenda.png" class="thumbnail" alt="Thumb1">
          <img src="/img/tenda.png" class="thumbnail" alt="Thumb2">
          <img src="/img/tenda.png" class="thumbnail" alt="Thumb3">
        </div>

        <!-- Main image + details -->
        <div class="col-md-6">
          <img src="/img/tenda.png" class="main-image" alt="Main Image">
          <div class="product-detail">
            <p><strong>Harga :</strong><br>
              2 Hari : Rp 30,000<br>
              3 Hari : Rp 30,000<br>
              4 Hari : Rp 35,000<br>
              5 Hari : Rp 40,000<br>
              Tambahan harga jika lebih dari 5 hari : Rp 5,000 / per hari
            </p>

            <p><strong>Spesifikasi :</strong></p>
            <ul>
              <li>Merk Tendaki</li>
              <li>Kapasitas 2 orang</li>
              <li>Ukuran : 210 × (50+140+50) × 120</li>
              <li>Flysheet lapisan luar : 210T Polyester PU3000mm</li>
              <li>Inner bagian dalam 210T Polyester PU5000mm</li>
              <li>Alas : 210T Polyester Cloth With PU Coating</li>
              <li>Double Door Storm Proof</li>
              <li>Jenis tiang : Aluminium 7,9mm</li>
              <li>Pasak Stainless 10pcs</li>
              <li>Berat : 1,9kgs</li>
              <li>Ukuran Kemasan : 50cm × 12cm × 15cm</li>
              <li>Warna Yellow dan Orange</li>
            </ul>
          </div>
        </div>

        <!-- Form action -->
        <div class="col-md-5">
          <div class="product-title mb-2">Tendaki Double Layer</div>
          <p class="text-muted">Tendaki | <span class="text-success">In Stock</span></p>
          <p class="price-text">Rp 25.000 / 2 hari</p>

          <div class="mb-3">
            <label>Tanggal Keluar</label>
            <input type="text" class="form-control" placeholder="DD/MM/YY">
          </div>
          <div class="mb-3">
            <label>Tanggal Kembali</label>
            <input type="text" class="form-control" placeholder="DD/MM/YY">
          </div>

          <div class="section-divider"></div>

          <div class="mb-3">
            <strong>Colours:</strong><br>
            <div class="radio-color">
              <input type="radio" name="color" checked> Orange
              <input type="radio" name="color"> Red
            </div>
          </div>

          <div class="mb-3">
            <strong>Hari:</strong><br>
            <button class="btn-hari">2</button>
            <button class="btn-hari">3</button>
            <button class="btn-hari">4</button>
            <button class="btn-hari active">5</button>
            <button class="btn-hari">6</button>
          </div>

          <div class="qty-control">
            <button>-</button>
            <input type="text" value="1" readonly>
            <button>+</button>
          </div>

          <button class="btn btn-primary action-btn">Add to Cart</button>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("input[placeholder='DD/MM/YY']", {
    dateFormat: "d/m/Y",
    disableMobile: true
  });
</script>
</body>
</html>
