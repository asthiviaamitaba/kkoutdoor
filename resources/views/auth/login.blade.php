<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Kula Outdoor</title>
  <link rel="icon" href="/img/logo-kula.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    * {
      font-family: 'Montserrat', 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: url('/img/for-regislogin.png') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      position: relative;
    }

    .navbar-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 32px 60px;
      font-weight: 600;
      font-size: 14px;
    }

    .login-card {
      max-width: 400px;
      margin: auto;
      margin-top: 80px;
      background: rgba(0, 0, 0, 0.5);
      padding: 40px 30px;
      border-radius: 24px;
      color: #fff;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    .login-card h2 {
      font-size: 24px;
      text-align: center;
      font-weight: 700;
      margin-bottom: 32px;
    }

    .input-group-text {
      background-color: #AFAFAF;
      border: none;
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
    }

    .form-control {
      background-color: #AFAFAF;
      border: none;
      border-radius: 8px !important;
      padding: 12px;
      font-size: 14px;
    }

     .form-control:focus {
        color: var(--bs-body-color); 
        background-color: #AFAFAF;
        border-color: hsl(0, 0%, 69%);
        outline: 0;
        box-shadow: 0 0 0 .25rem hsl(0, 0%, 69%);
    }

    .form-check-label {
      font-size: 12px;
      color: #fff;
    }

    .login-btn {
      width: 100%;
      background: #4A90B8;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-weight: 600;
      font-size: 16px;
      margin-top: 16px;
    }

    .bottom-text {
      margin-top: 16px;
      text-align: center;
      font-size: 13px;
    }

    .bottom-text a {
      color: #4A90B8;
      font-weight: 700;
      text-decoration: none;
    }

    .forgot {
      font-size: 13px;
      color: #4A90B8;
      text-decoration: none;
      font-weight: 600;
    }

    @media (max-width: 768px) {
      .navbar-top {
        flex-direction: column;
        gap: 8px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar Top -->
  <div class="navbar-top text-dark">
    <div><a class="navbar-brand" href="/#">Hiking & Camping</a></div>
    <div><a class="navbar-brand" href="/#"><img src="/img/logo-kula.png" style="height: 60px;" alt="Logo"></a></div>
    <div><a class="navbar-brand" href="/#">KulaOutdoor.id</a></div>
  </div>

  <!-- Login Card -->
  <div class="login-card">
    <h2>Let’s Login to Your Account</h2>
    <form action="/dashboard" method="GET">
      @csrf
      <div class="mb-3 input-group-text">
        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
        <input type="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3 input-group-text">
        <span class="input-group-text"><i class="bi bi-lock"></i></span>
        <input type="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <a href="#" class="forgot">Forget Password?</a>
      </div>
      <button onclick="window.location='/dashboard'" type="submit" class="login-btn">Log in</button>
      <div class="bottom-text">
        Don’t have an account? <a href="/register">Create an account</a>
      </div>
    </form>
  </div>

</body>
</html>
