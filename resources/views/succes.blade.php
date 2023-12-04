<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style/pemesanan.css') }}" />
    <title>Pesan Tiket</title>
</head>

<body>
    <header class="navbar">
        <div class="container">
            <div class="logo">
                <a href="">
                    <span class="right">eRail</span><span class="left"> Access</span>
                </a>
            </div>
            <div class="search">
                <input type="text" src="">
                <img src="{{ asset('img/assets/icons8-search-50.png') }}" alt="">
            </div>
            <ul class="nav-list">
                <li><a href="">Beranda</a></li>
                <li><a href="">Pemesanan</a></li>
                <li><a href="">Riwayat</a></li>
                <li><a href="">Bantuan</a></li>
            </ul>
            <div class="profile">
                <img src="{{ asset('img/assets/fi_user.png') }}" alt="">
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="route">
                <li style="opacity: 30%;"><a href="">Home / &nbsp;</a></li>
                <li style="opacity: 30%;"><a href="">Jadwal / &nbsp;</a></li>
                <li><a href="/pesan-tiket">Pesan Tiket</a></li>
            </div>
            <div class="step">
                <li class=""><a href=""></a>Detail Tiket</li>
                <li class=""><a href=""></a>Penumpang</li>
                <li class=""><a href=""></a>Tempat Duduk</li>
                <li class=""><a href=""></a>Penyebaran</li>
                <li class="step5"><a href=""></a>Detail Pemesanan</li>
            </div>
        </section>
        <section class="succes">
            <div class="success">
                <img src="{{ asset('img/assets/Vector.png') }}" alt="">
                <p style="color:cadetblue">Pembayaran Berhasil</p>
                <p>Pesanan Anda berhasil diproses. <br>
                    silakan tekan tombol di bawah untuk menuju ke halaman selanjutnya.</p>
                <div class="button">
                    <div class="lihat">
                        <a href="">Lihat Detail Pesanan</a>
                    </div>
                    <div class="home">
                        <a href="">Halaman Utama</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <div class="row1">
                <div class="logoFooter">
                    <a href="">eRail</a>
                    <a href="">Access</a>
                </div>
                <div class="sub-row1">
                    <div class="sub-row1-column1">
                        <p>Planning your next trip?</p>
                        <p>Subscribe toour newsletter. Get the latest travel trends & deals!6</p>
                    </div>
                    <div class="sub-row1-column2">
                        <form action="">
                            <div class="labelButton">
                                <label for="">Enter Your Email</label>
                                <button type="submit"><a href=""><img src="{{ asset('img/assets/submit.png') }}"
                                            alt=""></a></button>
                            </div>
                            <input type="email" name="email" id="email">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row2">
                <div class="nav-menu">
                    <a href="">About Us</a>
                    <a href="">Mobile</a>
                    <a href="">Privacy</a>
                    <a href="">Terms of use</a>
                    <a href="">Career</a>
                    <a href="">Customer Service</a>
                </div>
                <div class="sosmed">
                    <a href=""><img src="{{ asset('img/assets/fb.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('img/assets/ig.png') }}" alt=""></a>
                    <a href=""><img src="{{ asset('img/assets/twitter icon.png') }}" alt=""></a>
                </div>
            </div>
    </footer>

    </div>
</body>

</html>
