<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('style/riwayat.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <header class="navbar">
        <div class="nav-container">
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
                <li><a href="/helpcentre">Bantuan</a></li>
            </ul>
            <div class="profile">
                <img src="{{ asset('img/assets/fi_user.png') }}" alt="">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="filter">
            <div class="toggle">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <span>Filter</span>
            </div>
            <div class="filter-form">
                <div class="filter1">
                    <div class="filter-name">
                        <p class="medium-text" style="font-family: 'PoppinsSemiBold';">Waktu Transaksi</p>
                        <img src="{{ asset('img/assets/list-filter.png') }}" alt="">
                    </div>
                    <div class="filter1-list">
                        <div class="tanggal-dari">
                            <label for="" class="datelabel">Dari Tanggal</label>
                            <input class="datefilter" type="text" placeholder="Pilih tanggal" name=""id="">
                        </div>
                        <div class="tanggal-sampai">
                            <label for="" class="datelabel">Sampai Tanggal</label>
                            <input class="datefilter" type="text" placeholder="Pilih Tanggal" name=""id="">
                        </div>
                    </div>
                </div>

                <span class="list-devider"></span>

                <div class="filter2">
                    <div class="filter-name">
                        <p class="medium-text" style="font-family: 'PoppinsSemiBold';">Kelas Kereta</p>
                        <img src="{{ asset('img/assets/list-filter.png') }}" alt="">
                    </div>
                    <div class="filter2-list">
                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox1">Semua</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox2">Ekonomi</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox3">Bisnis</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox4">Eksekutif</label>
                        </div>
                    </div>
                </div>

                <span class="list-devider"></span>

                <div class="filter3">
                    <div class="filter-name">
                        <p class="medium-text" style="font-family: 'PoppinsSemiBold';">Nama Kereta</p>
                        <img src="{{ asset('img/assets/list-filter.png') }}" alt="">
                    </div>
                    <div class="filter2-list">
                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox1">Semua</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox2">Arjonegoro</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox3">Doho</label>
                        </div>

                        <div class="checkbox-item">
                            <input type="checkbox" id="checkbox">
                            <label class="checkbox-label" for="checkbox4">Argojati</label>
                        </div>
                    </div>
                </div>

                <button class="add-filter">Terapkan</button>
                <button class="reset-filter">Atur Ulang</button>
            </div>
            {{-- <form action="" class="filter-form"></form> --}}
        </div>

        <div class="content">

            {{-- Tiket 1 --}}
            <a href="/detail" class="ticket">
                <div class="ticket-header">
                    <div class="header-info">
                        <p class="headline">Surabaya - Bangkalan</p>
                        <p class="detail-text">10 Oktober 2023</p>
                    </div>
                    <div class="header-status">
                        <p class="medium-text" style="font-family: 'PoppinsBold';">Berhasil</p>
                    </div>
                </div>
                <div class="ticket-info">
                    <div class="detail-info">
                        <p class="medium-text" style="margin-top: 15px">Kode Pemesanan <strong>XLLC2L1</strong></p>
                        <p class="headline" style="margin-top: 15px">Commuter Line Arjonegoro (502)</p>
                        <div class="ticket-route" style="margin-top: 15px">
                            <div class="departure-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Gubeng (GB)</p>
                                <div class="departure-info" style="margin-top: 15px">
                                    <p class="detail-text">Berangkat</p>
                                    <p class="detail-text"><strong>05.00</strong></p>
                                </div>
                            </div>
                            <img src="{{ asset('img/assets/vector rute arah tujuan.png') }}" alt="">
                            <div class="arrival-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Trunojoyo (TNJ)</p>
                                <div class="arrival-info" style="margin-top: 15px">
                                    <p class="detail-text">Tiba</h6>
                                    <p class="detail-text"><strong>07.29</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-info">
                        <p class="medium-text">Total Harga</p>
                        <p class="semilarge-text" style="font-family: 'PoppinsBold'; color: #0B56A7">Rp 21.645</p>
                    </div>
                </div>
            </a>

            {{-- Tiket 2 --}}
            <a href="/detail" class="ticket">
                <div class="ticket-header">
                    <div class="header-info">
                        <p class="headline">Surabaya - Bangkalan</p>
                        <p class="detail-text">10 Oktober 2023</p>
                    </div>
                    <div class="header-status">
                        <p class="medium-text" style="font-family: 'PoppinsBold';">Berhasil</p>
                    </div>
                </div>
                <div class="ticket-info">
                    <div class="detail-info">
                        <p class="medium-text" style="margin-top: 15px">Kode Pemesanan <strong>XLLC2L1</strong></p>
                        <p class="headline" style="margin-top: 15px">Commuter Line Arjonegoro (502)</p>
                        <div class="ticket-route" style="margin-top: 15px">
                            <div class="departure-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Gubeng (GB)</p>
                                <div class="departure-info" style="margin-top: 15px">
                                    <p class="detail-text">Berangkat</p>
                                    <p class="detail-text"><strong>05.00</strong></p>
                                </div>
                            </div>
                            <img src="{{ asset('img/assets/vector rute arah tujuan.png') }}" alt="">
                            <div class="arrival-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Trunojoyo (TNJ)</p>
                                <div class="arrival-info" style="margin-top: 15px">
                                    <p class="detail-text">Tiba</h6>
                                    <p class="detail-text"><strong>07.29</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-info">
                        <p class="medium-text">Total Harga</p>
                        <p class="semilarge-text" style="font-family: 'PoppinsBold'; color: #0B56A7">Rp 21.645</p>
                    </div>
                </div>
            </a>

            {{-- Tiket 3 --}}
            <a href="/detail" class="ticket">
                <div class="ticket-header">
                    <div class="header-info">
                        <p class="headline">Surabaya - Bangkalan</p>
                        <p class="detail-text">10 Oktober 2023</p>
                    </div>
                    <div class="header-status">
                        <p class="medium-text" style="font-family: 'PoppinsBold';">Berhasil</p>
                    </div>
                </div>
                <div class="ticket-info">
                    <div class="detail-info">
                        <p class="medium-text" style="margin-top: 15px">Kode Pemesanan <strong>XLLC2L1</strong></p>
                        <p class="headline" style="margin-top: 15px">Commuter Line Arjonegoro (502)</p>
                        <div class="ticket-route" style="margin-top: 15px">
                            <div class="departure-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Gubeng (GB)</p>
                                <div class="departure-info" style="margin-top: 15px">
                                    <p class="detail-text">Berangkat</p>
                                    <p class="detail-text"><strong>05.00</strong></p>
                                </div>
                            </div>
                            <img src="{{ asset('img/assets/vector rute arah tujuan.png') }}" alt="">
                            <div class="arrival-route">
                                <p class="semilarge-text" style="font-family: 'PoppinsBold';">Trunojoyo (TNJ)</p>
                                <div class="arrival-info" style="margin-top: 15px">
                                    <p class="detail-text">Tiba</h6>
                                    <p class="detail-text"><strong>07.29</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-info">
                        <p class="medium-text">Total Harga</p>
                        <p class="semilarge-text" style="font-family: 'PoppinsBold'; color: #0B56A7">Rp 21.645</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

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

    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
