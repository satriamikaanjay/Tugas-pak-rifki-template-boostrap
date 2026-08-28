@extends('layouts.app')

@section('content')
    <!-- TESTIMONIALS -->
    <section id="testimonials" class="pt-5 mt-5 pb-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Apa Kata Mereka</span>
                <h2 class="stitle">Umpan Balik Pelanggan <span>Kami</span></h2>
                <div class="sline"></div>
            </div>
            <div class="swiper tesSwiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <!-- Slider 1 -->
                    <div class="swiper-slide">
                        <div class="tescard">
                            <div class="tesq">"</div>
                            <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testxt">Burger-nya enak banget! Aku suka sekali, terutama smash burger-nya yang crispy dan juicy, aku pasti akan kembali.</p>
                            <div class="tesauth">
                                <img src="{{ asset('img/testimonial/prabowo.jpg') }}" alt="Pak Prabowo"/>
                                <div>
                                    <div class="tesnm">Pak Prabowo</div>
                                    <div class="tesrl">Presiden Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider 2 -->
                    <div class="swiper-slide">
                        <div class="tescard">
                            <div class="tesq">"</div>
                            <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testxt">Restoran ini sangat enak! Pelayanannya ramah dan makanannya lezat. Aku pasti akan datang lagi.</p>
                            <div class="tesauth">
                                <img src="{{ asset('img/testimonial/gibran.jpg') }}" alt="Pak Gibran"/>
                                <div>
                                    <div class="tesnm">Pak Gibran</div>
                                    <div class="tesrl">Wakil Presiden</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider 3 -->
                    <div class="swiper-slide">
                        <div class="tescard">
                            <div class="tesq">"</div>
                            <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testxt">Bagi saya, restoran ini adalah tempat terbaik untuk menikmati makanan lezat dan pelayanan yang sangat baik.</p>
                            <div class="tesauth">
                                <img src="{{ asset('img/testimonial/atta.jpg') }}" alt="Atta Halilintar"/>
                                <div>
                                    <div class="tesnm">Atta Halilintar</div>
                                    <div class="tesrl">Youtuber</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slider 4 -->
                    <div class="swiper-slide">
                        <div class="tescard">
                            <div class="tesq">"</div>
                            <div class="tess"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testxt">Bintang lima untuk restoran ini! Makanannya luar biasa dan pelayanannya sangat ramah.</p>
                            <div class="tesauth">
                                <img src="{{ asset('img/testimonial/anis.jpg') }}" alt="Anies Baswedan"/>
                                <div>
                                    <div class="tesnm">Anies Baswedan</div>
                                    <div class="tesrl">Penguasa Jakarta</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-4" style="position:static;"></div>
            </div>
        </div>
    </section>
@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.tesSwiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      // Breakpoint agar responsif di layar besar
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });
  });
</script>