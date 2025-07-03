@extends('layouts.app')

@section('content')
<section class="py-5 bg-forest-25 position-relative overflow-hidden">
  <div class="container position-relative z-2">
    <div class="row">
      <div class="col-md-8">
        <h1 class="font-montserrat font-black text-9xl">Gear Up Instantly for Your Next Adventure</h1>
        <p class="lead">From tents to backpacks, we offer fast and easy rentals to make your outdoor experience unforgettable.</p>
        <a href="/login" class="btn-sm rent-btn">Rent Now !!!</a>
      </div>
    </div>
  </div>
  <!-- Gambar dekorasi kanan bawah -->
  <img src="img/kompas.png" 
       class="position-absolute" 
       style="top : 85px; bottom: 25px; right: 0; width: 550px; max-width: 100%; z-index:1;" alt="Adventure">
</section>

<section class="py-5 text-center bg-white position-relative">
  <div class="container">
    <h2 class="fw-bold mb-3">Our Partner & Journey</h2>
    <p01 class="text-muted mb-2">We proudly collaborate with trusted brands and outdoor gear suppliers to ensure the best equipment for your adventure.</p01>
    <h1></h1>
    <!-- Slider berjalan -->
  <div class="partner-slider-container position-absolute start-50 translate-middle-x w-100" style="bottom: -80px;">
    <div class="partner-slider bg-light py-3">
      <div class="slider">
        <div class="slide-track gap-10">
          <!-- Logo utama -->
          <img src="img/bg eiger.png" class="mx-4 img-fluid" style="max-height: 80px;" alt="Eiger">
          <img src="img/bg jangkar o.png" class="mx-4 img-fluid" style="max-height: 80px;" alt="Jangkar Outdoor">
          <img src="img/bg kk.png" class="mx-4 img-fluid" style="max-height: 80px;" alt="Kulo Klaten">
          <img src="img/bg src.png" class="mx-4 img-fluid" style="max-height: 80px;" alt="Sri Rejeki Coffee">
          <img src="img/bg tnf.png" class="mx-4 img-fluid" style="max-height: 80px;" alt="The North Face">
          <img src="img/bg rei.png" class="mx-1 img-fluid" style="max-height: 50px;" alt="Rei">
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="py-5 bg-forest-25 text-center position-relative">
  <div class="container d-flex flex-wrap justify-content-center gap-10 mt-5" style="top: 0; bottom: 0;">
    @for ($i = 0; $i < 3; $i++)
    <div>
      <img src="img/andong.jpg" class="rounded" width="250">
      <p></p>
      <p01>Picture of Open Trip Andong Peak</p01>
      <p01>with New Team</p01>
    </div>
    @endfor
  </div>
</section>

<section class="py-5 text-center bg-light">
  <img src="img/logo-kula.png" width="120">
  <p></p>
  <p2 class="mt-3">
    Founded with a love for nature and adventure, KK Outdoor is here to make outdoor experiences accessible to everyone...
  </p2>
</section>

<section1 class="py-5 bg-forest-25 text-center">
  <img src="img/laptop.png" width="300">
  <p class="mt-3">Access to our complete catalog is available for registered users. <a href="/login">Log in</a> to continue.</p>
</section1>

<section>
  <div class="bg-blue-500 text-white text-center p-4">
    <h1 class="text-center text-2xl font-bold mt-10">Produk Terbaru</h1>
    @include('components.product-cards')
  </div>
</section>

<section class="py-5 bg-forest-25 text-center">
  <h1>Ready to start your adventure?</h2>
  <p00>Book your gear today and enjoy an <a href="#" class="text-sky-blue fw-bold">exclusive discount for first-time users</a>, simple booking, quality gear, and big savings on your first rental!</p00>
  <p></p>
  <img src="img/new-arrival.png" width="600">
  <p class="mt-3">Don’t have an account? <a href="/register" class="text-primary fw bold">Create an account</a></p>
</section>
@endsection