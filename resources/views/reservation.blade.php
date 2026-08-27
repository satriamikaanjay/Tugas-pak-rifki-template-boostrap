@extends('layouts.app')

@section('content')
    <!-- RESERVATION FORM -->
    <section id="reservation" class="pt-5 mt-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl">Pesan Meja Anda!</span>
                <h2 class="stitle">Pesan Untuk<span>Reservasi</span></h2>
                <div class="sline"></div>
                <p class="sdesc mx-auto" style="max-width:480px;">Ayo tunggu apalagi reservasi meja Anda sekarang dan nikmati pengalaman makan yang tak terlupakan!</p>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-lg-4" data-aos="fade-right">
                    <div style="background:linear-gradient(135deg, var(--dark), #344d90);border-radius:18px;padding:36px;">
                        <h4 style="color:#fff;font-size:1.3rem;margin-bottom:8px;">Info Kontak</h4>
                        <p style="color:rgba(255,255,255,.55);font-size:.85rem;margin-bottom:26px;">Kami senang membantu Anda merencanakan pengalaman makan yang tak terlupakan.</p>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-clock"></i></div>
                                <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Jam Buka</strong><span style="color:#fff;font-size:.87rem;">Senin - Jumat, 8.00 - 20.00 WIB & Minggu - Sabtu, 10.00 - 18.00 WIB</span></div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-phone-alt"></i></div>
                                <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Nomor Telepon</strong><span style="color:#fff;font-size:.87rem;">+62 876 123 4567</span></div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-users"></i></div>
                                <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Dining Kelompok</strong><span style="color:#fff;font-size:.87rem;">Menu khusus untuk 10+ orang</span></div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div style="width:46px;height:46px;border-radius:11px;background:rgba(232,40,26,.2);display:flex;align-items:center;justify-content:center;color:var(--primary);font-size:1.1rem;flex-shrink:0;"><i class="fas fa-map-marker-alt"></i></div>
                                <div><strong style="display:block;color:#ccc;font-size:.78rem;text-transform:uppercase;letter-spacing:.8px;">Alamat</strong><span style="color:#fff;font-size:.87rem;">JL. Sekolahan No. 123 kecamatan buduran kabupaten sidoarjo</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="fcard">
                        <div class="row g-3">
                            <div class="col-sm-6"><label class="flbl">Nama Lengkap *</label><input type="text" class="fctrl" placeholder="Satria Mika Narendra  "/></div>
                            <div class="col-sm-6"><label class="flbl">Nomor Telepon *</label><input type="tel" class="fctrl" placeholder="+62 876 123 4567"/></div>
                            <div class="col-sm-6"><label class="flbl">Alamat Email *</label><input type="email" class="fctrl" placeholder="you@email.com"/></div>
                            <div class="col-sm-6">
                                <label class="flbl">Jumlah Tamu *</label>
                                <select class="fctrl">
                                    <option>1 Orang</option>
                                    <option>2 Orang</option>
                                    <option>3 - 4 Orang</option>
                                    <option>5 - 6 Orang</option>
                                    <option>7 - 10 Orang</option>
                                    <option>10+ Orang</option>
                                </select>
                            </div>
                            <div class="col-sm-6"><label class="flbl">Tanggal *</label><input type="date" class="fctrl"/></div>
                            <div class="col-sm-6">
                                <label class="flbl">Waktu *</label>
                                <select class="fctrl">
                                    <option>09:00 WIB</option>
                                    <option>10:00 WIB</option>
                                    <option>11:00 WIB</option>
                                    <option>12:00 WIB</option>
                                    <option>13:00 WIB</option>
                                    <option>14:00 WIB</option>
                                    <option>06:00 WIB</option>
                                    <option>07:00 WIB</option>
                                    <option>08:00 WIB</option>
                                    <option>09:00 WIB</option>
                                    <option>10:00 WIB</option>
                                </select>
                            </div>
                            <div class="col-12"><label class="flbl">Permintaan Spesial</label><textarea class="fctrl" rows="3" placeholder="Permintaan khusus..."></textarea></div>
                            <div class="col-12"><button class="btn-red w-100 justify-content-center" id="resBtn"><i class="fas fa-calendar-check"></i>Konfirmasi Reservasi</button></div>
                        </div>
                        <div class="sucmsg" id="resOk">
                            <i class="fas fa-check-circle"></i>
                            <p>Meja berhasil di reservasi, info lebih lanjut akan dikirim melalui email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOURS -->
    <section id="hours" class="pb-5">
        <div class="hrsbg"></div>
        <div class="container" style="position:relative;z-index:2;">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="slbl" style="color:#a5d6bc;">Jam Buka</span>
                <h2 class="stitle" style="color:#fff;">Kami Buka <span style="color:var(--secondary);">Untuk Anda</span></h2>
                <div class="sline"></div>
            </div>
            <div class="row g-4 align-items-start">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="hrscard">
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Senin</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">08:00 - 20:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Selasa</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">08:00 - 20:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Rabu</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">08:00 - 20:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Kamis</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">08:00 - 20:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Jumat</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">08:00 - 20:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Sabtu</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">10:00 - 18:00 WIB</span>
                            </div>
                        </div>
                        <div class="hrsrow">
                            <span class="hrsday"><i class="fas fa-calendar-day me-2" style="color:var(--secondary);"></i>Minggu</span>
                            <div class="d-flex align-items-center gap-2">
                                <div class="hdot on"></div>
                                <span class="hrstime">10:00 - 18:00 WIB</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" data-aos="zoom-in">
                    <div class="hrscta">
                        <i class="fas fa-truck-fast fa-2x mb-3" style="color:rgba(255,255,255,.8);"></i>
                        <h4>Pesan Secara Online</h4>
                        <p>Makanan lezat akan diantar ke meja Anda dalam 25 menit</p>
                        <a href="{{ url('/menu') }}" class="btnw">Pesan Sekarang &rarr;</a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="hrscard">
                        <h5 style="color:#fff;margin-bottom:18px;font-family:'Poppins',sans-serif;font-size:.95rem;font-weight:700;"><i class="fas fa-map-marker-alt me-2" style="color:var(--secondary);"></i>Temui Kami</h5>
                        <div class="hrsrow"><span class="hrsday"><i class="fas fa-location-dot me-2" style="color:var(--secondary);"></i>Alamat</span><span class="hrstime" style="font-size:.8rem;">JL. Sekolahan No. 123</span></div>
                        <div class="hrsrow"><span class="hrsday"><i class="fas fa-phone me-2" style="color:var(--secondary);"></i>No. Telepon</span><span class="hrstime" style="font-size:.8rem;">+62 876 123 4567</span></div>
                        <div class="hrsrow"><span class="hrsday"><i class="fas fa-envelope me-2" style="color:var(--secondary);"></i>Email</span><span class="hrstime" style="font-size:.8rem;">sadena@gmail.com</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection