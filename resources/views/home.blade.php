@extends('layouts.app')

@section('content')
    <!-- HERO SECTION -->
    <section id="hero">
       <div class="hs hs1"></div>
         <div class="hs hs2"></div>
         <div class="hbgtxt">Makanan</div>
         <div class="container">
            <div class="row align-items-center g-5" style="min-height:88vh;">
               <div class="col-lg-6">
                  <div class="hbadge">
                     <div class="hbi"><i class="fas fa-star"></i></div>
                     <span>#1 Makanan Cepat Saji Di Indonesia</span>
                  </div>
                  <h1 class="htitle">Kelezatan <span class="hl">Cepat Saji</span><br/>Di setiap Suasana</h1>
                  <p class="hdesc">Manjakan lidahmu dengan cita rasa kaya dari bahan premium. Dari burger yang renyah sampai pizza gourmet setiap gigitannya layak dirayakan.</p>
                  <div class="d-flex flex-wrap gap-3 mb-2">
                     <a href="#menu" class="btn-red"><i class="fas fa-utensils"></i>Lihat Menu</a>
                     <!-- FIX 2: Magnific popup video trigger -->
					 <a href="https://www.youtube.com/watch?v=RXv_uIN6e-Y" class="magnific_popup btn-play popup-youtube">
						<div class="pico"><i class="fas fa-play"></i></div>
						<span>tonton Kisah Kami</span>
					 </a>
                  </div>
                  <div class="hstats d-flex gap-3 flex-wrap mt-4">
                     <div class="hstat"><span class="snum">850<em>+</em></span><small>Kepuasan Pelanggan</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">120<em>+</em></span><small>Semua Menu</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">15<em>+</em></span><small>Koki Profesional</small></div>
                     <div class="sdiv"></div>
                     <div class="hstat"><span class="snum">12<em>th</em></span><small>pengalaman</small></div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div style="position:relative;text-align:center;">
                     <div class="hcircle">
                        <img src="img/banner-img.jpg" alt="Burger"/>
                     </div>
                     <div class="fcard fc1">
                        <div class="fcoi r"><i class="fas fa-fire"></i></div>
                        <div><span class="fcnum">Diskon</span><span class="fcsm">30% Hari Ini</span></div>
                     </div>
                     <div class="fcard fc2">
                        <div class="fcoi y"><i class="fas fa-star"></i></div>
                        <div><span class="fcnum">4.9/5</span><span class="fcsm">2k+ ulasan</span></div>
                     </div>
                     <div class="fcard fc3">
                        <div class="fcoi g"><i class="fas fa-clock"></i></div>
                        <div><span class="fcnum">20 min</span><span class="fcsm">Pesanan Cepat</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </section>

    <!-- MARQUEE -->
    <div class="mqsec">
        <div class="mqtrack">
            <div class="mqitem"><i class="fas fa-circle"></i>Classic Burger</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Classic Pizza</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Classic Pizza</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Loaded Cheese Fries</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Crispy Golden Onion Rings</div>
            <div class="mqitem"><i class="fas fa-circle"></i>Loaded Beef Burrito</div>
         </div>
    </div>

    <!-- CATEGORY -->
    <section id="category">
     <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Pilihan Terbaik Yang Kami Sajikan</span>
               <h2 class="stitle">Pilih Sesuai <span>Favoritmu</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">Dari burger gurih nan renyah sampai kuliner khas dunia — temukan hidangan favoritmu di menu kami.</p>
            </div>
            <div class="row g-3 justify-content-center">
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="0">
                  <div class="catcard active" data-filter="all">
                     <img class="catimg" src="img/category/1.jpg" alt=""/>
                     <div class="catnm">Classic Burger</div>
                     <div class="catct">24 Menu</div>
                  </div>
               </div>
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="70">
                  <div class="catcard" data-filter="burgers">
                     <img class="catimg" src="img/category/3.jpg" alt=""/>
                     <div class="catnm">Classic  Pizza</div>
                     <div class="catct">24 Menu</div>
                  </div>
               </div>
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="140">
                  <div class="catcard" data-filter="pizza">
                     <img class="catimg" src="img/category/Nashville Chicken.jpg" alt=""/>
                     <div class="catnm">Nashville Chiken</div>
                     <div class="catct">18 Menu</div>
                  </div>
               </div>
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="210">
                  <div class="catcard" data-filter="chicken">
                     <img class="catimg" src="img/category/Loaded cheese fries.jpg" alt=""/>
                     <div class="catnm">Loaded Cheese Fries</div>
                     <div class="catct">15 Menu</div>
                  </div>
               </div>
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="280">
                  <div class="catcard" data-filter="wraps">
                     <img class="catimg" src="img/category/onion rings.jpg" alt=""/>
                     <div class="catnm">Crispy Golden Onion Rings</div>
                     <div class="catct">12 items</div>
                  </div>
               </div>
               <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="350">
                  <div class="catcard" data-filter="desserts">
                     <img class="catimg" src="img/category/Loaded Steak Burrito.jpg" alt=""/>
                     <div class="catnm">Loaded Beef Burrito</div>
                     <div class="catct">20 items</div>
                  </div>
               </div>
            </div>
         </div>
    </section>
@endsection