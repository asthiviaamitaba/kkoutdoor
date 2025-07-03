<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
    <link rel="icon" href="/img/logo-kula.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Montserrat', 'Open Sans', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      display: flex;
      min-height: 100vh;
    }
    .left {
      width: 50%;
      background: url('img/for-regislogin.png') no-repeat center center;
      background-size: cover;
      border-top-left-radius: 24px;
      border-bottom-left-radius: 24px;
    }
    .right {
      width: 50%;
      background: #CFC3B5; /* sesuai palette Earth Brown terang */
      display: flex;
      justify-content: center;
      align-items: center;
      border-top-right-radius: 24px;
      border-bottom-right-radius: 24px;
    }
    .form-box {
      background: #705C47; /* warna card coklat gelap */
      padding: 40px;
      border-radius: 32px;
      width: 80%;
      max-width: 400px;
      color: white;
    }
    .form-box h2 {
      text-align: center;
      margin-bottom: 24px;
      font-size: 24px;
      color: #402c1e;
    }
    .form-group {
      margin-bottom: 16px;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
    }
    .form-group label {
      margin-bottom: 6px;
      display: block;
    }
    .form-box button {
      width: 100%;
      padding: 12px;
      background: #5F4B32;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      margin-top: 8px;
    }
    .text-center {
      text-align: center;
      margin-top: 12px;
    }
    .text-center a {
      color: #000;
      text-decoration: none;
    }
  </style>
</head>
<body>
  {{-- Navbar --}}
  <nav style="width: 100%; display: flex; justify-content: flex-end; align-items: center; padding: 25px; background-color: transparent; position: absolute; top: 0; z-index: 10;">
    <div style="margin-left: -40px;">
        <a class="navbar-brand" href="/#">
            <img src="/img/logo-kula.png" alt="Kula Outdoor" style="height: 75px;">
        </a>
        
    </div>
    <div style="margin-right: 40px;">
        <a href="/login" style="margin-right: 20px; text-decoration: none; font-weight: 700; color: #131927;">Login</a>
        <a href="/#" style="text-decoration: none; font-weight: 700; color: #131927;">Home</a>
    </div>
  </nav>
    <div class="left"></div>
  <div class="right">
    <div class="form-box">
      <h2>Create New Account !!!</h2>
      <form>
        <div class="form-group">
          <input type="text" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" placeholder="Telepon">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Repeat Password">
        </div>
        <div class="form-group">
          <input type="checkbox"> By registering, you agree to the terms, conditions and policy.
        </div>
        <button type="submit">Daftar</button>
        <div class="text-center">
          Have an account? <a href="/login">Log in</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
