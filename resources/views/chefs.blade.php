@extends('layouts.app')

@section('content')
    <!-- CHEFS SECTION -->
    <section id="chefs" class="pt-5 pb-5">
        <div class="container mt-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">The Culinary Team</span>
                <h2 class="stitle">Meet Our Expert <span>Chefs</span></h2>
                <div class="sline"></div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="{{ asset('img/chefs/Sisca Soewitomo.jpg') }}" alt="Alice Mortal"/>
                            <div class="chsoc">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Chef Sisca Soewitomo</div>
                            <div class="chrole">Head Chef</div>
                            <div class="chexp">14 Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="{{ asset('img/chefs/Chef Juna.jpg') }}" alt="Michael Corn"/>
                            <div class="chsoc">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Chef Juna Rorimpandey</div>
                            <div class="chrole">Grill Master</div>
                            <div class="chexp">5 Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="{{ asset('img/chefs/Chef Arnold Poernomo.jpg') }}" alt="Faz Chowdel"/>
                            <div class="chsoc">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Chef Arnold Poernomo</div>
                            <div class="chrole">Pastry Chef</div>
                            <div class="chexp">3 Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="chcard">
                        <div class="chimg">
                            <img src="{{ asset('img/chefs/Chef Renatta Moeloek.jpg') }}" alt="William Latnum"/>
                            <div class="chsoc">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="chbody">
                            <div class="chnm">Chef Renatta Moeloek</div>
                            <div class="chrole">Pizza Artisan</div>
                            <div class="chexp">12 Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection