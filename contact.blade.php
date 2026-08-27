@extends('layouts.app')

@section('content')
    <!-- CONTACT FORM -->
    <section id="contact-section" class="pt-5 mt-5 pb-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <!-- <span class="slbl"></span> -->
                <h2 class="stitle">Hubungi <span>Kami</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Punya pertanyaan, masukan, atau ingin merencanakan acara khusus? Kami ingin mendengar dari Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="ctdark">
                        <h4>Silahkan Hubungi Kami</h4>
                        <p class="ctsub">Kami biasanya merespons dalam 2 jam selama jam kerja.</p>
                        <div class="ctitem">
                            <div class="cticon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="ctinfo"><strong>Alamat</strong><span>JL Sekolah No. 123<br/>Sidoarjo, Jawa Timur</span></div>
                        </div>
                        <div class="ctitem">
                            <div class="cticon"><i class="fas fa-phone-alt"></i></div>
                            <div class="ctinfo"><strong>No. Telepon</strong><span>+62 812 3456 7890</span></div>
                        </div>
                        <div class="ctitem">
                            <div class="cticon"><i class="fas fa-envelope"></i></div>
                            <div class="ctinfo"><strong>Email</strong><span>sadena@gmail.com</span></div>
                        </div>
                        <div class="ctitem">
                            <div class="cticon"><i class="fas fa-clock"></i></div>
                            <div class="ctinfo"><strong>jam Kerja</strong><span>Senin - Jumat: 08.00 - 20.00 WIB, Sabtu - Minggu: 09.00 - 17.00 WIB</span></div>
                        </div>
                        <div class="ctsocrow">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="fcard">
                        <div class="row g-3">
                            <div class="col-sm-6"><label class="flbl">Nama Anda *</label><input type="text" class="fctrl" placeholder="John Doe"/></div>
                            <div class="col-sm-6"><label class="flbl">Alamat Email *</label><input type="email" class="fctrl" placeholder="you@email.com"/></div>
                            <div class="col-sm-6"><label class="flbl">Nomor Telepon</label><input type="tel" class="fctrl" placeholder="+62 812 3456 7890"/></div>
                            <div class="col-sm-6">
                                <label class="flbl">Subjek *</label>
                                <select class="fctrl">
                                    <option>Pertanyaan Umum</option>
                                    <option>Catering &amp; Acara</option>
                                    <option>Feedback</option>
                                    <option>Kemitraan</option>
                                    <option>Media &amp; Press</option>
                                </select>
                            </div>
                            <div class="col-12"><label class="flbl">Pesan *</label><textarea class="fctrl" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea></div>
                            <div class="col-12"><button class="btn-red" id="ctcBtn"><i class="fas fa-paper-plane"></i>Kirim Pesan</button></div>
                        </div>
                        <div class="sucmsg" id="ctcOk">
                            <i class="fas fa-check-circle"></i>
                            <p>Pesan dikirim! Kami akan merespons dalam 2 jam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection