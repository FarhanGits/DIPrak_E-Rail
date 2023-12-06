<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Tiket Anda</title>
    <link rel="stylesheet" href="{{ asset('style/detail-tiket.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <a href="/riwayat" class="backpage">
            <img src="{{ asset('img/assets/back arrow button.png') }}" alt="" srcset="">
            <p>Detail Transaksi</p>
        </a>
        <span class="devider"></span>
        <div class="content">
            <div class="header-detail">
                <div class="route-info">
                    <div class="top-route-info">
                        <p>05.05</p>
                        <p>Minggu, 15 Oktober 2023</p>
                    </div>
                    <div class="mid-route-info">
                        <p>2 jam 24 menit</p>
                    </div>
                    <div class="bottom-route-info">
                        <p>07.29</p>
                        <p>Minggu, 15 Oktober 2023</p>
                    </div>
                </div>
                <img src="{{ asset('img/assets/route line.png') }}" alt="" class="route-line">
                <div class="train-info">
                    <p>Gubeng (GB)</p>
                    <div class="train-detail">
                        <img src="{{ asset('img/assets/train logo.svg') }}" alt="">
                        <p>Commuter Line Arjonegoro (502)</p>
                    </div>
                    <p>Trunojoyo (TNJ)</p>
                </div>
            </div>
            <div class="info-detail">
                <div class="top-detail">
                    <div class="kode">
                        <p>KODE PEMESANAN</p>
                        <P><strong>C91F92CJ77YP8NW</strong></P>
                    </div>
                    <div class="tanggal">
                        <p>C91F92CJ77YP8NW</p>
                        <P>10 Oktober 2023</P>
                    </div>
                </div>
                <span class="detail-devider"></span>
                <div class="undertop-detail">
                    <p>INFORMASI PENUMPANG</p>
                    <div class="nama">
                        <p>Ahmad Rayhan</p>
                        <P>Ekonomi (C) 7 / 10 A</P>
                    </div>
                </div>
                <span class="detail-devider"></span>
                <div class="mid-detail">
                    <p>RINCIAN PEMBAYARAN</p>
                    <div class="total">
                        <p>TOTAL TIKET</p>
                        <P>Rp 12.000 x 1</P>
                    </div>
                    <div class="kursi">
                        <p>BIAYA PILIH KURSI</p>
                        <P>Rp 7.500</P>
                    </div>
                    <div class="ppn">
                        <p>PPN</p>
                        <P>Rp 2.145</P>
                    </div>
                    <span class="detail-devider"></span>
                    <div class="pembayaran">
                        <p>TOTAL PEMBAYARAN</p>
                        <P>Rp 21.645</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
