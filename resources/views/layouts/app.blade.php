<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kulo Outdoor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <!-- Custom Styles -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Open Sans', sans-serif;
    }

    h1, h2, h3, .btn {
      font-family: 'Montserrat', sans-serif;
    }

    .navbar-brand {
      font-weight: 700;
    }

    .btn-primary {
      background-color: #2D5F3C;
      border: none;
    }

    .btn-primary:hover {
      background-color: #244d31;
    }
  </style>
</head>
<body>

  <!-- Header/Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-forest-50">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/img/logo-kula.png" alt="Kulo Outdoor" style="height: 75px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <!-- MENU DI KIRI -->
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/produk">Catalog</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">Cart</a></li>
          <li class="nav-item"><a class="nav-link" href="/kontak">About Us</a></li>
        </ul>

        <!-- LOGIN REGISTER DI KANAN -->
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
          <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        </ul>
      </div>
      </div>
    </nav>
  </header>

  <!-- Konten Dinamis -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="text-center py-3 bg-forest text-muted">
    <p4 class="mb-5">&copy; {{ date('Y') }} Kulo Outdoor. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
