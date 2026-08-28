@extends('layouts.app')

@section('content')
    <!-- ABOUT SECTION -->
    <section id="about">
       <div class="container">
            <div class="row align-items-center g-5">
               <div class="col-lg-5" data-aos="fade-right">
                  <div class="astack">
                     <div class="aexp"><span class="anum">12+</span><small>Tahun<br/>Pengalaman</small></div>
                     <div class="amain"><img src="img/about1.jpg" alt="Restaurant"/></div>
                     <div class="asm"><img src="img/about2.jpg" alt=""/></div>
                  </div>
               </div>
               <div class="col-lg-7" data-aos="fade-left">
                  <span class="slbl">Our Story</span>
                  <h2 class="stitle text-start">Yuk,<br/>Berkunjung <span>Ke Restoran Kami!</span></h2>
                  <div class="sline lft"></div>
                  <p class="sdesc mb-4">Berdiri sejak tahun 2012, Sadena berawal dari kedai kecil di sudut jalan dengan mimpi besar menyajikan hidangan yang menyatukan setiap momen hangat. Kini, kami bangga dapat melayani ribuan pelanggan bahagia setiap minggunya dengan semangat yang tetap sama seperti saat pertama kali memulai.</p>
                  <div class="mb-4">
                     <div class="fti">
                        <div class="ftico r"><i class="fas fa-leaf"></i></div>
                        <div>
                           <h6>100% Bahan Segar</h6>
                           <p>Kami menggunakan bahan lokal berkualitas secara berkelanjutan. Setiap bahan dipilih langsung setiap hari demi menjamin kesegarannya.</p>
                        </div>
                     </div>
                     <div class="fti">
                        <div class="ftico y"><i class="fas fa-award"></i></div>
                        <div>
                           <h6>Resep Pemenang penghargaan</h6>
                           <p>Resep andalan kami telah memenangkan penghargaan kuliner tingkat nasional selama 5 tahun berturut-turut</p>
                        </div>
                     </div>
                     <div class="fti">
                        <div class="ftico g"><i class="fas fa-shipping-fast"></i></div>
                        <div>
                           <h6>Pengiriman Kilat</h6>
                           <p>Pesan secara online dan nikmati makanan hangat serta segar tiba di depan rumahmu dalam waktu kurang dari 25 menit, dijamin!</p>
                        </div>
                     </div>
                  </div>
                  <a href="#menu" class="btn-red"><i class="fas fa-book-open"></i>Lihat Menu Lengkap</a>
               </div>
            </div>
         </div>
    </section>

    <!-- Kamu juga bisa memasukkan section history ke halaman ini jika mau -->
    <section id="history">
       <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <span class="slbl">Perjalanan Kami</span>
               <h2 class="stitle">Sejarah <span>Restoran</span></h2>
               <div class="sline"></div>
               <p class="sdesc mx-auto" style="max-width:480px;">Dari awal yang sederhana hingga menjadi restoran paling dicintai setiap babak ditulis dengan penuh semangat.</p>
            </div>
            <div class="timeline" data-aos="fade-up">
               <!-- ODD ? text on LEFT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2012</div>
                     <h5>Awal Berdirinya Restoran</h5>
                     <p>Sadena membuka kedai pertama berisi 20 kursi di Flavor Street. Dalam 3 bulan, antrean mengular setiap sore seiring lezatnya hidangan kami mulai dikenal luas.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2012</div>
                     <h5>Awal Berdirinya Restoran</h5>
                     <p>Sadena membuka kedai pertama berisi 20 kursi di Flavor Street. Dalam 3 bulan, antrean mengular setiap sore seiring lezatnya hidangan kami mulai dikenal luas.</p>
                  </div>
               </div>
               <!-- EVEN ? text on RIGHT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2015</div>
                     <h5>Konsep &amp; Fine Dining</h5>
                     <p>Memperluas visi kami memperkenalkan menu tasting andalan dan merekrut chef berpengalaman standar Michelin, membawa kualitas kuliner kami ke tingkat baru.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2015</div>
                     <h5>Konsep &amp; Fine Dining</h5>
                     <p>Memperluas visi kami memperkenalkan menu tasting andalan dan merekrut chef berpengalaman standar Michelin, membawa kualitas kuliner kami ke tingkat baru.</p>
                  </div>
               </div>
               <!-- ODD ? text on LEFT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2019</div>
                     <h5>Inovasi Fast Food Modern</h5>
                     <p>Peluncuran menu cepat saji andalan yang memadukan kualitas gourmet dengan kecepatan dan kemudahan. Dalam 6 bulan, kami meraih 3 penghargaan kuliner bergengsi tingkat nasional.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2019</div>
                     <h5>Inovasi Fast Food Modern</h5>
                     <p>Peluncuran menu cepat saji andalan yang memadukan kualitas gourmet dengan kecepatan dan kemudahan. Dalam 6 bulan, kami meraih 3 penghargaan kuliner bergengsi tingkat nasional.</p>
                  </div>
               </div>
               <!-- EVEN ? text on RIGHT -->
               <div class="tli">
                  <div class="tl-left">
                     <div class="tlyear">2026</div>
                     <h5>Ekspansi Nasional</h5>
                     <p>Kini beroperasi di 8 kota besar dengan platform pesanan online yang melayani 10.000+ pesanan setiap minggunya dan terus berkembang setiap hari.</p>
                  </div>
                  <div class="tl-center">
                     <div class="tldot"></div>
                  </div>
                  <div class="tl-right">
                     <div class="tlyear">2026</div>
                     <h5>Ekspansi Nasional</h5>
                     <p>Kini beroperasi di 8 kota besar dengan platform pesanan online yang melayani 10.000+ pesanan setiap minggunya dan terus berkembang setiap hari.</p>
                  </div>
               </div>
            </div>
         </div>
    </section>
@endsection
