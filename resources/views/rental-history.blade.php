<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rental History - Kula Outdoor</title>
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
    h2 {
      color: #5F4B32;
      font-weight: 900;
      margin-bottom: 25px;
    }
    .search-box {
      margin-bottom: 20px;
    }
    .search-box input {
      padding: 10px 15px;
      border-radius: 20px;
      border: 1px solid #ddd;
      width: 300px;
    }
    .history-table {
      width: 100%;
      border-collapse: collapse;
    }
    .history-table th {
      background-color: #f8f9fa;
      padding: 12px 15px;
      text-align: left;
      border-bottom: 2px solid #dee2e6;
      font-weight: 600;
    }
    .history-table td {
      padding: 12px 15px;
      border-bottom: 1px solid #dee2e6;
    }
    .history-table tr:last-child td {
      border-bottom: none;
    }
    .status-badge {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
    }
    .status-completed {
      background-color: #d4edda;
      color: #155724;
    }
    .status-pending {
      background-color: #fff3cd;
      color: #856404;
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
      <a href="/rental-history" class="active"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main Content -->
    <main class="col-md-10 py-4">
      <div>
        <h2>History from Our Journey!</h2>
      </div>
        <div class="main-content">
        
        <div class="search-box">
          <input type="text" placeholder="Search here..." class="form-control">
        </div>
        
        <table class="history-table">
          <thead>
            <tr>
              <th>Invoice</th>
              <th>Date</th>
              <th>Items</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Payment</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>INV-001</td>
              <td>23 May 2025</td>
              <td>1 Tent for 2 Cap</td>
              <td>1</td>
              <td>Rp 40.000</td>
              <td><span class="status-badge status-completed">Completed</span></td>
            </tr>
            <tr>
              <td>INV-001</td>
              <td>23 May 2025</td>
              <td>3 Shoes, 1 TP</td>
              <td>4</td>
              <td>Rp 150.000</td>
              <td><span class="status-badge status-completed">Completed</span></td>
            </tr>
            <tr>
              <td>INV-001</td>
              <td>23 May 2025</td>
              <td>1 Shoes</td>
              <td>1</td>
              <td>Rp 45.000</td>
              <td><span class="status-badge status-completed">Completed</span></td>
            </tr>
            <tr>
              <td>INV-001</td>
              <td>23 May 2025</td>
              <td>1 TP</td>
              <td>1</td>
              <td>Rp 20.000</td>
              <td><span class="status-badge status-pending">Pending</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>