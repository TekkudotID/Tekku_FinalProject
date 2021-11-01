<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekku - Layanan Penyedia Jasa</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Tekku<span>.ID</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Beranda</a></li>
                <li><a href="#about" class="menu-btn">Tentang Kami</a></li>
                <li><a href="#services" class="menu-btn">Layanan</a></li>

                <li><a href="#client" class="menu-btn">Client</a></li>
                <li><a href="#contact" class="menu-btn">Kontak</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Selamat Datang di</div>
                <div class="text-2">TEKKU</div>
                <div class="text-3">Penyedia Jasa Pembuatan <span class="typing"></span></div>
                <a href="#services">Order</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Tentang Kami</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="assets/img/logo.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Kami adalah Penyedia jasa pembuatan <span class="typing-2"></span></div>
                    <p>Sebagai jasa pembuatan website profesional, TekkuID adalah partner terbaik untuk bisnis Anda dalam menghadapi Era Digital yang serba teknologi. Perluas jangkauan bisnis Anda, jadikan bisnis Anda sebagai bisnis modern yang mudah dijangkau semua orang di Indonesia.</p>
                    <a href="tentangkami.html">Kenali Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Layanan</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="pempek"></i>
                        <div class="text" onclick="location.href='pempek.html';">Website</div>
                        <p onclick="location.href='website.html';">Website perusahaan, ecommerce, portal berita, dll.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="enicila"></i>
                        <div class="text" onclick="location.href='aplikasi.html';">Aplikasi Android</div>
                        <p>ecommerce, cek resi, restoran, dll.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="Helly"></i>
                        <div class="text" onclick="location.href='design.html';">Design</div>
                        <p>Logo, Ilustrator, Produk design, Banner Iklan, dll.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>



    <!-- teams section start -->
    <section class="teams" id="client">
        <div class="max-width">
            <h2 class="title">Client Kami</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="assets/img/gdrive.png" alt="">
                        <div class="text">Google Drive</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/img/googlemaps.png" alt="">
                        <div class="text">Google Maps</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/img/firebase.png" alt="">
                        <div class="text">Firebase</div>

                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="assets/img/sqlite.png" alt="">
                        <div class="text">SQLiteb</div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Hubungi Kami</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Kenali Lebih Dekat</div>
                    <p>Untuk kritik dan saran, serta kesempatan bekerja sama dengan kami, silakan hubungi kami. </p>
                    <div class="icons">
                        {{-- <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nama</div>
                                <div class="sub-title">TekkuID</div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">tekkudotid@gmail.com</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Alamat</div>
                                <div class="sub-title">Jalan Guntur Raya No.1, Kelurahan Kayuringin Jaya, Bekasi Selatan, Kota Bekasi, Jawa Barat 17144</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Kirim Kami Pesan</div>
                    <form action="https://formsubmit.co/fiqih1666@gmail.com" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nama" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subyek" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Pesan.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Kirim</button>
                        </div>
                    </form>
                    <div id="status"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Powered by <a href="https://www.infoteks17.my.id">Tekku.id</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
