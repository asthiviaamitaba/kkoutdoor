<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Account - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet" />
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
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h1 {
      color: #5F4B32;
      font-weight: 900;
      margin-bottom: 10px;
    }
    h2 {
      color: #5F4B32;
      font-weight: 700;
      margin: 25px 0 15px 0;
    }
    .profile-table {
      width: 100%;
      border-collapse: collapse;
    }
    .profile-table td {
      padding: 12px 0;
      border-bottom: 1px solid #eee;
    }
    .profile-table td:first-child {
      width: 30%;
      font-weight: 600;
      color: #555;
    }
    .section-divider {
      border-top: 1px solid #ddd;
      margin: 20px 0;
    }
    .upload-section {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      margin: 15px 0;
    }
    .btn-upload {
      background-color: #2D5F3C;
      color: white;
      padding: 8px 15px;
      border-radius: 5px;
      border: none;
      font-weight: 600;
    }
    .btn-upload:hover {
      background-color: #1e4b2d;
    }
    .btn-account {
      display: inline-block;
      margin: 5px 0;
      padding: 8px 15px;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 5px;
      color: #333;
      text-decoration: none;
      font-weight: 600;
    }
    .btn-account:hover {
      background-color: #e9ecef;
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
      <a href="/catalog"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account" class="active"><i class="bi bi-person"></i> My Account</a>
      <a href="/"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 py-4">
      <div><h1>Hallo,</h1>
            <h2><strong>{{ $user['name'] }}</strong></h2>
        </div>
        <div class="main-content">
        <h2>User Profile</h2>
        <table class="profile-table">
        <tr>
            <td>Email</td>
            <td>: {{ $user['email'] }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>: {{ $user['name'] }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>: {{ $user['gender'] }}</td>
        </tr>
        <tr>
            <td>Age</td>
            <td>: {{ $user['age'] }}</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>: {{ $user['dob'] }}</td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>: {{ $user['phone'] }}</td>
        </tr>
        </table>

        <div class="section-divider"></div>

        <h2>Jaminan</h2>
        <div class="upload-section">
          <p>Upload foto / Scan</p>
          <button class="btn-upload">Upload File</button>
        </div>
        
        <a href="#" class="btn-account">Alamat</a>
        <a href="#" class="btn-account">Ubah Password</a>

        <div class="section-divider"></div>

        <h2>Kartu Pelajar</h2>
        <div class="upload-section">
          <p>Upload Photo</p>
          <button class="btn-upload">Upload File</button>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>