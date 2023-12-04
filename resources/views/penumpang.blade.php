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
                <li class="step2"><a href=""></a>Penumpang</li>
                <li class=""><a href=""></a>Tempat Duduk</li>
                <li class=""><a href=""></a>Penyebaran</li>
                <li class=""><a href=""></a>Detail Pemesanan</li>
            </div>
        </section>
        <section style="width: 100%;   display: flex;">
            <div class="penumpang">
                <div class="tittle">
                    <p>Penumpang</p>
                    <a href="">+ Tambah Penumpang</a>
                </div>
                <div class="penumpang-content">
                    <form action="" class="form">
                        <div>
                            <div class="mb-3">
                                <label for="nama">Nama Depan</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Ahmad" />
                            </div>
                            <div class="mb-3">
                                <label for="no_hp">NIK</label>
                                <input type="text" id="nik" name="nik" class="form-control"
                                    placeholder="08216330840" />
                            </div>
                            <div class="mb-3">
                                <label for="nama">Tempat Lahir</label>
                                <input type="text" name="tempat" id="tempat" class="form-control"
                                    placeholder="Bangkalan" />
                            </div>
                            <div class="mb-3">
                                <label for="no_hp">Nomor Telepon</label>
                                <input type="text" id="no_hp" name="no_hp" class="form-control"
                                    placeholder="08216330840" />
                            </div>
                            <div class="mb-3">
                                <label for="nama">Nama Belakang</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    placeholder="Rayhan" />
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label> <br>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                                    style="width: 85%;">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                    style="margin-top: 10px;">
                            </div>
                            <div class="mb-3">
                                <label for="email">Alamat Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="contoh@gmail.com" />
                            </div>
                        </div>
                    </form>
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
                    <a href="/pembayaran"> Lanjutkan</a>
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
