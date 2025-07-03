<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Invoice - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #E2E2E2;
      font-family: 'Open Sans', sans-serif;
    }
    .sidebar {
      background-color: #D9D9D9;
      min-height: 100vh;
      padding: 20px;
    }
    .sidebar a {
      display: block;
      color: #4A4A4A;
      padding: 10px;
      text-decoration: none;
      border-radius: 10px;
      margin-bottom: 5px;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #A8B9A9;
      font-weight: bold;
    }
    .rightbar {
      background-color: #F6F6F6;
      min-height: 100vh;
      padding: 20px;
    }
    .invoice-container {
      background: white;
      border-radius: 15px;
      padding: 30px;
      margin: 30px 0;
    }
    h2 {
      color: #5F4B32;
      font-weight: bold;
    }
    .table td, .table th {
      vertical-align: middle;
    }
    .payment-details {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar Left -->
    <div class="col-md-2 sidebar">
      <div class="text-center mb-4">
        <img src="/img/logo-kula.png" alt="Logo" class="img-fluid" style="max-width: 120px;">
      </div>
      <a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a>
      <a href="/requirement"><i class="bi bi-journal-text"></i> Requirement</a>
      <a href="/catalog"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice" class="active"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </div>

    <!-- Main Content -->
    <div class="col-md-8">
      <h2 class="mt-4">Please Make Payment ! 🫣</h2>

      <div class="invoice-container shadow">
        <h4>INVOICE</h4>
        <p>#2</p>
        <div class="row">
          <div class="col-md-6">
            <p><strong>BILL TO</strong><br>
              Asthivia Amitaba<br>
              Depok, Sleman, DIY<br>
              ast@gmail.com</p>
          </div>
          <div class="col-md-6 text-end">
            <p><strong>Kula Outdoor</strong><br>
              KK Store<br>
              Klaten, Jawa Tengah<br>
              kulaoutdoor@gmail.com</p>
            <p><strong>AMOUNT DUE</strong> <span class="text-danger">$0.00</span><br>
              Issued on: May 23, 2025</p>
          </div>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>Description of Item</th>
              <th>Rate</th>
              <th>Qty</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>TDK/dl-k2 Tent - Double Layer</td>
              <td>$0.00</td>
              <td>1</td>
              <td>$0.00</td>
            </tr>
          </tbody>
        </table>

        <div class="text-end">
          <p>Subtotal : $0.00</p>
          <p>TAX(34.43%) : $0.00</p>
          <p>Discount : -$3.00</p>
          <h5>Total Amount: <strong>$0.00</strong></h5>
        </div>

        <hr>

        <div class="payment-details">
          <p><strong>PAYMENT DETAILS</strong></p>
          <p>Bank name: BRI<br>
            Account No: 3242 323 233423<br>
            Swift Code:<br>
            IFSC Code:<br>
            Paypal: <br>
            Link:</p>
          <p>Note: Diambil siang</p>
        </div>
      </div>
    </div>

    <!-- Sidebar Right -->
    <div class="col-md-2 rightbar">
      <p class="text-end">Hallo, <br><strong>Asthivia Amitaba</strong></p>

      <div class="mb-4">
        <p>Your Calendar For Activity</p>
        <input type="text" id="calendar" class="form-control" readonly>
      </div>

      <div class="mb-4">
        <p>More Info from Owners</p>
        <img src="/img/rinjani-promo.png" class="img-fluid rounded">
      </div>

      <div class="mb-4">
        <p>Massage from Store</p>
        <div class="alert alert-secondary p-2">
          Kula Outdoor<br>
          Hi there, let's go payment your cart 🫣
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#calendar", {
    inline: true,
    defaultDate: "2021-09-19"
  });
</script>
</body>
</html>
