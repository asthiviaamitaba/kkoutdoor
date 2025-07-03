<!-- resources/views/cart.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap" rel="stylesheet" />
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
    h2 {
      color: #5F4B32;
      font-weight: 900;
    }
    .cart-table {
      background-color: white;
      border-radius: 20px;
      padding: 20px;
    }
    .cart-table table {
      width: 100%;
    }
    .cart-table th, .cart-table td {
      padding: 12px 10px;
      vertical-align: middle;
    }
    .status-booking {
      border-radius: 5px;
      padding: 3px 8px;
      font-size: 12px;
      color: white;
    }
    .no-booking {
      background-color: orange;
    }
    .booking {
      background-color: #2D5F3C;
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
      <a href="/requirement"><i class="bi bi-journal-text"></i> Requirement</a>
      <a href="/catalog"><i class="bi bi-grid"></i> Catalog</a>
      <a href="/cart" class="active"><i class="bi bi-cart"></i> Cart</a>
      <a href="/invoice"><i class="bi bi-receipt"></i> Invoice</a>
      <a href="/rental-history"><i class="bi bi-clock-history"></i> Rental History</a>
      <hr>
      <a href="/my-account"><i class="bi bi-person"></i> My Account</a>
      <a href="/"><i class="bi bi-box-arrow-right"></i> Sign Out</a>
      <a href="https://api.whatsapp.com/send/?phone=6281226114094&text&type=phone_number&app_absent=0"><i class="bi bi-question-circle"></i> Help</a>
    </aside>

    <!-- Main content -->
    <main class="col-md-7 main-content">
      <h2>Let’s Check Out You Need to Rent 🫣</h2>

      <div class="cart-table mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5>Cart</h5>
          <button class="btn btn-primary">Check Out</button>
        </div>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>#</th>
              <th>Time</th>
              <th>Item</th>
              <th>Amount</th>
              <th>Price</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach (range(1,5) as $i)
            <tr @if($i%2==0) style="background-color:#f7f5fb;" @endif>
              <td>{{ $i }}</td>
              <td>10:00 | 23 May</td>
              <td>
                Tendaki 2 Cap<br>
                Tent - Double Layer
              </td>
              <td>{{ $i == 2 ? 2 : 1 }}</td>
              <td>{{ $i == 2 ? '40.000' : '20.000' }}</td>
              <td>
                <span class="status-booking {{ $i == 5 ? 'booking' : 'no-booking' }}">
                  {{ $i == 5 ? 'booking' : 'no booking' }}
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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

      <div>
        <h6>Your Calendar For Activity</h6>
      </div>
      <div class="calendar">
        <input type="text" id="calendar-widget" class="form-control bg-white" readonly style="cursor: default;">
      </div>

      <div>
        <h6>More Info from Owners</h6>
        <a href="https://www.instagram.com/kula.outdoor/" target="_blank">
          <img src="/img/rinjani.png" class="img-fluid rounded mt-2" alt="Info">
        </a>
      </div>

      <div class="mt-4">
        <h6>Message from Store</h6>
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
