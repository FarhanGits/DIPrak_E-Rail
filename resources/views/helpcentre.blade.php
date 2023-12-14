<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style/bantuan.css') }}" />
    <title>Bantuan</title>
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
                <li><a href="/pesan-tiket">Bantuan</a></li>
            </div>
        </section>
        <section style="width: 100%; column-count:2;  display: flex;">
            <div class="rute">
                </div>
                <img src="{{ asset('img/assets/kreta-cepat.jpg') }}" alt="" style="border: 1px solid #000; width : 1000px ; height : 500px">
                </div>
            </div>
        </section>
        <section style="width: 100%; column-count:2;  display: flex;">
            <div class="rute">
                </div>
                <img src="{{ asset('img/assets/Jalur.jpg') }}" alt="" style="border: 1px solid #000; width : 300px ; height : 400px">
                </div>
            </div>
            <div class="price-detail">
                <div class="tittle">
                    Hubungi Kami
                </div>
                <div class="price-content">
                    <div class="sub-title">
                        Layanan Pelanggan
                    </div>
                    <div class="detail">
                        Di manapun Anda berada, kami ada untuk membantu Anda. Hubungi kami melalui call center kami di bawah ini.
                    </div>
                    <div class="detail">
                        Email     :  customercare@Erail.com <br>
                        Whatsapp  : (+62)811-193-70777 (hanya melayani chat)
                    </div>
                    <div class="detail">
                        Anda juga dapat menyampaikan masukan atau pertanyaan melalui <br>
                        formulir daring kami.
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