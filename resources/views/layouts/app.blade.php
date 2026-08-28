<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta tags, font, dan CSS tetap sama seperti aslinya -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sadena - Makanan Cepat Saji & Restaurant</title>
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet"/>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
      <link href="{{ asset('css/aos.css') }}" rel="stylesheet"/>
      <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet"/>
      <link rel="stylesheet" href="{{ asset('css/all.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
   </head>
   <body>
      <!-- TOP BAR -->
      <div id="topbar">
         <!-- Isi Topbar (Phone, Email, dll) -->
      </div>

      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg" id="nav">
         <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               <div class="blogo">
                  <div class="bico"><i class="fas fa-utensils"></i></div>
                  <div>
                     <div class="bname">Sad<span>ena</span></div>
                     <div class="bsub">Makanan Cepat Saji & Restaurant</div>
                  </div>
               </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
               <i class="fas fa-bars" style="color:var(--primary);font-size:1.35rem;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('menu') ? 'active' : '' }}" href="{{ url('/menu') }}">Menu</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('chefs') ? 'active' : '' }}" href="{{ url('/chefs') }}">Koki</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('reservation') ? 'active' : '' }}" href="{{ url('/reservation') }}">Reservasi</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('reviews') ? 'active' : '' }}" href="{{ url('/reviews') }}">Ulasan</a></li>
                  <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Kontak</a></li>
               </ul>
               <div class="d-flex align-items-center gap-1">
                  <button id="navSearchBtn" title="Search"><i class="fas fa-search"></i></button>
                  <a href="{{ url('/menu') }}" class="nav-link nav-cta"><i class="fas fa-shopping-bag me-1"></i>Pesan Sekarang</a>
               </div>
            </div>
         </div>
      </nav>

      <!-- SEARCH OVERLAY POPUP -->
     <div id="searchOv">
         <button class="sovclose" id="searchClose"><i class="fas fa-times"></i></button>
         <div class="sovbox">
            <h4>What are you craving today?</h4>
            <div class="sovinput">
               <input type="text" id="searchInput" placeholder="Search burgers, pizza, chicken..." autocomplete="off"/>
               <button><i class="fas fa-search"></i></button>
            </div>
            <!-- Categories inside search box -->
            <div class="sovcats">
               <div class="sovcat active" data-cat="all">
                  <img src="img/menu/1.jpg" alt=""/>All Items
               </div>
               <div class="sovcat" data-cat="Classic Burger">
                  <img src="img/menu/1.jpg" alt=""/>Classic Burger
               </div>
               <div class="sovcat" data-cat="pizza">
                  <img src="img/menu/2.jpg" alt=""/>Pizza
               </div>
               <div class="sovcat" data-cat="chicken">
                  <img src="img/menu/3.jpg" alt=""/>Chicken
               </div>
               <div class="sovcat" data-cat="wraps">
                  <img src="img/menu/4.jpg" alt=""/>Wraps
               </div>
               <div class="sovcat" data-cat="pasta">
                  <img src="img/menu/5.jpg" alt=""/>Pasta
               </div>
               <div class="sovcat" data-cat="desserts">
                  <img src="img/menu/6.jpg" alt=""/>Desserts
               </div>
            </div>
            <div class="sovtrend">
               <p><i class="fas fa-fire me-1" style="color:var(--secondary);"></i>Trending Searches</p>
               <span class="ttag">Smash Burger</span>
               <span class="ttag">Nashville Chicken</span>
               <span class="ttag">Truffle Pizza</span>
               <span class="ttag">Lava Cake</span>
               <span class="ttag">Loaded Fries</span>
               <span class="ttag">Mango Shake</span>
            </div>
         </div>
      </div>

      <!-- TEMPAT KONTEN HALAMAN BERADA -->
      <main>
          @yield('content')
      </main>

      <!-- FOOTER -->
       <footer>
         <div class="container">
            <div class="row g-5">
               <div class="col-lg-4">
                  <div class="fnm">Sad<span>ena</span></div>
                  <p class="fdesc">Nikmati kelezatan kuliner dunia dengan pelayanan cepat, ramah, dan harga terjangkau. Setiap suapan disiapkan dengan penuh cinta.</p>
                  <div class="fsoc">
                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                     <a href="#"><i class="fab fa-instagram"></i></a>
                     <a href="#"><i class="fab fa-twitter"></i></a>
                     <a href="#"><i class="fab fa-youtube"></i></a>
                     <a href="#"><i class="fab fa-tiktok"></i></a>
                  </div>
               </div>
               <div class="col-sm-6 col-lg-2">
                  <div class="ftit">Akses Cepat</div>
                  <ul class="flinks ps-0">
                     <li><a href="#hero"><i class="fas fa-chevron-right"></i>Beranda</a></li>
                     <li><a href="#about"><i class="fas fa-chevron-right"></i>Tentang Kami</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Menu</a></li>
                     <li><a href="#reservation"><i class="fas fa-chevron-right"></i>Reservasi</a></li>
                     <li><a href="#blog"><i class="fas fa-chevron-right"></i>Artikel</a></li>
                     <li><a href="#contact-section"><i class="fas fa-chevron-right"></i>Kontak</a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-2">
                  <div class="ftit">Menu Kami</div>
                  <ul class="flinks ps-0">
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Classic Burger</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Classic Pizza</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Nashville Chiken</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Loaded Cheese Fries</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Crispy Golden Onion Rings</a></li>
                     <li><a href="#menu"><i class="fas fa-chevron-right"></i>Loaded Beef Burrito</a></li>
                  </ul>
               </div>
               <div class="col-lg-4">
                  <div class="ftit">Hubungi Kami</div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-map-marker-alt"></i></div>
                     <div class="fciinfo"><strong>Alamat</strong>JL. Sekolahan No.123, Kecamatan Buduran, Kabupaten Sidoarjo</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-phone-alt"></i></div>
                     <div class="fciinfo"><strong>Nomor Telepon</strong>+62 876 123 4567</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-envelope"></i></div>
                     <div class="fciinfo"><strong>Email</strong>hello@sadenafood.com</div>
                  </div>
                  <div class="fci">
                     <div class="fciico"><i class="fas fa-clock"></i></div>
                     <div class="fciinfo"><strong>Jam Buka</strong><div>Senin-Jum'at: 08.00 - 20.00 WIB</div>Minggu-Sabtu: 10.00-18.00 WIB</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="fbot">
            <div class="container">
               <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                  <p>&copy 2026 <span>Sadena Restaurant</span>. All Rights Reserved by <a target="_blank" class="mx-0 fw-bold text-success" href="https://bestwpware.com/">Bestwpware</a>. Made with <span><i class="fas fa-heart"></i></span>  <br>Distributed by <a target="_blank" class="mx-0 fw-bold text-success" href="https://themewagon.com">ThemeWagon</a></p>
                  <div><a href="#">Privacy Policy</a><a href="#">Terms</a><a href="#">Cookies</a></div>
               </div>
            </div>
         </div>
      </footer>

      <button id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i class="fas fa-chevron-up"></i></button>
    
      <!-- SCRIPTS -->
      <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/aos.js') }}"></script>
      <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
   </body>
</html>