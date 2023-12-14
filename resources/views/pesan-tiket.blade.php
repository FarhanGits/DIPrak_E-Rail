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
                <a href="/pemesanan">
                    <span class="right">eRail</span><span class="left"> Access</span>
                </a>
            </div>
            <div class="search">
                <input type="text" src="">
                <img src="{{ asset('img/assets/icons8-search-50.png') }}" alt="">
            </div>
            <ul class="nav-list">
                <li><a href="/home">Beranda</a></li>
                <li><a href="/pemesanan">Pemesanan</a></li>
                <li><a href="/riwayat">Riwayat</a></li>
                <li><a href="/help-center">Bantuan</a></li>
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
                <li class="step1"><a href=""></a>Detail Tiket</li>
                <li class=""><a href=""></a>Penumpang</li>
                <li class=""><a href=""></a>Tempat Duduk</li>
                <li class=""><a href=""></a>Pembayaran</li>
                <li class=""><a href=""></a>Detail Pemesanan</li>
            </div>
        </section>
        <section style="width: 100%; column-count:2;  display: flex;
        ">
            <div class="ticketing">
                <div class="tittle">
                    <p>Tiket</p>
                </div>
                <div class="ticket-content">
                    <div class="class">
                        <p>Ekonomi</p>
                        <p style="margin-left: 77%; color: #E40000;">24 Tersisa</p>
                    </div>
                    <div class="tour">
                        <h1>Gubeng (GB)</h1>
                        <img src="{{ asset('img/assets/arrow.png') }}" alt="">
                        <h1>Trunojoyo (TNJ)</h1>
                    </div>
                    <div class="fromto">
                        <p>Kota Surabaya</p>
                        <p style="margin-left: 22%; font-weight:bold;">Durasi 2 Jam 24 Menit</p>
                        <p style="margin-left: 22%">Kab. Bangkalan</p>
                    </div>
                    <div class="time">
                        <p>05:05</p>
                        <p style="margin-left: 84.5%">07:29</p>
                    </div>
                    <div class="calendar">
                        <p>10 Oktober 2023</p>
                        <p style="margin-left: 65%">10 Oktober 2023</p>
                    </div>
                </div>
            </div>
            <div class="price-detail">
                <div>
                    <div class="tittle">
                        <p>Detail Harga</p>
                    </div>
                </div>
                <div class="price-content">
                    <div class="class">
                        <p>1x Tiket Pembelian</p>
                    </div>
                    <div class="detail">
                        <li>Ekonomi (C)</li>
                        <li>1 Kursi</li>
                    </div>
                    <hr>
                    <div class="price">
                        <p>Total</p>
                        <p style="margin-left: 40%">Rp. 12.000,-</p>
                    </div>
                </div>
                <div class="next">
                    <a href="/penumpang"> Lanjutkan</a>
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
