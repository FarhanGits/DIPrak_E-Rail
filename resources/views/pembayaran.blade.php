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
                <li class="step4"><a href=""></a>Penyebaran</li>
                <li class=""><a href=""></a>Detail Pemesanan</li>
            </div>
        </section>
        <section style="width: 100%; column-count:2;  display: flex;">
            <div class="buying">
                <div class="tittle">
                    <p>Metode Pembayaran</p>
                </div>
                <div class="buy-content">
                    <div class="buy">
                        <div>
                            <a href="">
                                <p>Kartu Kredit</p>
                                <div href="" class="buy-option">
                                    <img style="height: 100%;"
                                        src="{{ asset('img/assets/mastercard-3-svgrepo-com 1.png') }}" alt="">
                                    <img style="height: 100%;" src="{{ asset('img/assets/visa-svgrepo-com 1.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <a href="">
                                <p>E-Wallet</p>
                                <div href="" class="buy-option">
                                    <img style="height: 50%;" src="{{ asset('img/assets/shopee.png') }}" alt="">
                                    <img style="height: 50%; padding-left: 20px;"
                                        src="{{ asset('img/assets/ovo.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div style="margin-left: 40px;">
                            <a href="">
                                <p>Transfer Bank</p>
                                <div href="" class="buy-option">
                                    <img src="{{ asset('img/assets/bni.png') }}" alt="">
                                    <img src="{{ asset('img/assets/mandiri.png') }}" alt="">
                                    <img src="{{ asset('img/assets/bca.png') }}" alt="">
                                </div>
                            </a>
                            <a href="">
                                <p>Minimarket</p>
                                <div href="" class="buy-option">
                                    <img style="height: 50%;" src="{{ asset('img/assets/alfamart.png') }}"
                                        alt="">
                                    <img style="height: 50%;" src="{{ asset('img/assets/indomart.png') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-detail-2">
                <div>
                    <div class="tittle">
                        <p>Detail Harga</p>
                    </div>
                </div>
                <div class="ticket-content-2">
                    <div class="class-2">
                        <p>Ekonomi</p>
                        <p style="margin-left: 72%; color: #E40000;">24 Tersisa</p>
                    </div>
                    <div class="tour-2">
                        <h1>Gubeng (GB)</h1>
                        <img src="{{ asset('img/assets/arrow.png') }}" alt="">
                        <h1>Trunojoyo (TNJ)</h1>
                    </div>
                    <div class="fromto-2">
                        <p>Kota Surabaya</p>
                        <p style="margin-left: 19%; font-weight:bold;">Durasi 2 Jam 24 Menit</p>
                        <p style="margin-left: 19%">Kab. Bangkalan</p>
                    </div>
                    <div class="time-2">
                        <p>05:05</p>
                        <p style="margin-left: 81.5%">07:29</p>
                    </div>
                    <div class="calendar-2">
                        <p>10 Oktober 2023</p>
                        <p style="margin-left: 60%">10 Oktober 2023</p>
                    </div>
                    <hr>
                    <div class="price-content">
                        <div class="class-3">
                            <p>1x Tiket Pembelian</p>
                            <p style="margin-left: 33%;">Rp. 21.645,00</p>
                        </div>
                        <div class="detail">
                            <div class="class-4">
                                <p>Ekonomi (C)</p>
                                <p style="margin-left: 43%;">Rp. 12.000,00</p>
                            </div>
                            <div class="class-5">
                                <p>1 Kursi</p>
                                <p style="margin-left: 58%;">Rp. 7.500,00</p>
                            </div>
                            <div class="class-6">
                                <p>PPN</p>
                                <p style="margin-left: 63%;">Rp. 2.145,00</p>
                            </div>
                        </div>
                        <hr>
                        <div class="price-1">
                            <p>Total</p>
                            <p style="margin-left: 50%">Rp. 12.000,-</p>
                        </div>
                    </div>
                    <div class="next-1">
                        <a href="/success"> Lanjutkan</a>
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
                                <button type="submit"><a href=""><img
                                            src="{{ asset('img/assets/submit.png') }}" alt=""></a></button>
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
