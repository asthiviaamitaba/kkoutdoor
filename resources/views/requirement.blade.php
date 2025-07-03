<!-- resources/views/requirement.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Requirement - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #4A4A4A20;
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
    .requirement-box {
      background-color: #BFB6A8;
      padding: 30px;
      border-radius: 25px;
      color: #4A4A4A;
    }
    .right-sidebar {
      background-color: #2D5F3C10;
      padding: 20px;
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
      <a href="/requirement" class="active"><i class="bi bi-journal-text"></i> Requirement</a>
      <a href="/catalog"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/#"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main Content -->
    <main class="col-md-7 main-content">
      <h2 class="fw-bold" style="color: #5F4B32;">Requirement to Order Rent !</h2>
      <div class="requirement-box mt-3">
        <h3 class="fw-bold text-center mb-4">Syarat & Ketentuan<br>Penyewaan Alat Outdoor</h3>
        <ol>
          <li>Setiap penyewa wajib menyertakan dokumen jaminan berupa salah satu dari berikut:
            <ul>
              <li>KTP (Kartu Tanda Penduduk)</li>
              <li>SIM (Surat Izin Mengemudi)</li>
              <li>Kartu Pelajar (untuk mahasiswa/pelajar)</li>
            </ul>
          </li>
          <li>Jaminan diserahkan dalam bentuk scan/foto yang diunggah melalui sistem saat konfirmasi penyewaan.</li>
          <li>Pembayaran dilakukan penuh di awal melalui metode yang tersedia (transfer manual atau otomatis).</li>
          <li>Peralatan yang disewa harus dikembalikan dalam kondisi baik dan lengkap sesuai dengan daftar saat peminjaman.</li>
          <li>Keterlambatan pengembalian alat akan dikenakan denda sebesar Rp10.000 per hari per item.</li>
          <li>Jika terjadi kerusakan atau kehilangan alat, penyewa wajib mengganti sesuai harga pasar atau membayar biaya perbaikan.</li>
          <li>Penyewa wajib memeriksa kembali tanggal dan durasi sewa sebelum melakukan konfirmasi.</li>
          <li>Dengan menyewa alat melalui website ini, penyewa dianggap telah membaca dan menyetujui semua syarat dan ketentuan yang berlaku.</li>
        </ol>
        <p class="text-end mt-4 fw-bold">Owner Kula Outdoor</p>
      </div>
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
      <div><h6>Your Calendar For Activity</h6></div>
      <div class="calendar">
        <input type="text" id="calendar-widget" class="form-control bg-white" readonly style="cursor: default;">
      </div>
      <div><h6>More Info from Owners</h6></div>
      <div class="info-section mb-4">
        <a href="https://www.instagram.com/kula.outdoor/" target="_blank">
          <img src="/img/rinjani.png" class="img-fluid" alt="Info">
        </a>
      </div>
      <div><h6>Massage from Store</h6></div>
      <div class="store-message">
        <strong>Kula Outdoor</strong><br>
        Hi there, let’s go payment your cart 😉
      </div>
    </aside>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#calendar-widget", {
    inline: true,
    defaultDate: new Date(),
    disableMobile: true,
    locale: {
      firstDayOfWeek: 1
    }
  });
</script>
</body>
</html>
