<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style/pemesanan.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/pesan.css') }}" />
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
                <li><a href="/helpcentre">Bantuan</a></li>
            </ul>
            <div class="profile">
                <img src="{{ asset('img/assets/fi_user.png') }}" alt="">
            </div>
        </div>
    </header>

    <main>
        <div class="pl-0 p-5 h-full font-poppins">
            <div class="w-full h-96 relative">
                <div class="w-full h-64 left-[-0px] top-[92.01px] absolute mr-3">
                    <div class="h-full bg-sky-700 rounded-lg border-2 border-black">
                    </div>
                </div>
                <div class="w-full h-80 left-[11px] top-[56.07px] absolute pr-[20px]">
                    <div class="bg-black rounded-lg h-full"> </div>
                </div>
                <div class="w-full h-96 left-[20px] top-[20px] absolute pr-[38px]">
                    <div class="bg-neutral-100 rounded-lg border-2 border-black h-full px-10 py-5">
                        <div class="flex flex-col gap-10">
                            <div class="flex justify-between">
                                <h1 class="font-poppins text-5xl self-center"><span class="font-bold">TEMUKAN</span>
                                    KERETAMU</h1>
                                <img src="{{ asset('img/assets/logo.png') }}" class="w-[60px] h-full" alt="" />
                            </div>
                            <div class="flex w-full gap-16">
                                <div class="flex w-full gap-5">
                                    <div class="p-5 bg-[#202020] flex flex-col rounded-lg w-full gap-5">
                                        <div class="bg-[#0B56A7] rounded-lg py-2 text-center">
                                            <p class="font-bold text-white">Asal</p>
                                        </div>
                                        <div>
                                            <select name="" id=""
                                                class="w-full bg-[#202020] text-white text-lg font-medium">
                                                <option value="">Kota Surabaya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="self-center">
                                        <img src="{{ asset('img/assets/exchange.svg') }}" class="w-[100px]"
                                            alt="" />
                                    </div>
                                    <div class="p-5 bg-[#202020] flex flex-col rounded-lg w-full gap-5">
                                        <div class="bg-[#0B56A7] rounded-lg py-2 text-center">
                                            <p class="font-bold text-white">Tujuan</p>
                                        </div>
                                        <div>
                                            <select name="" id=""
                                                class="w-full bg-[#202020] text-white text-lg font-medium">
                                                <option value="">Kab. Bangkalan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full gap-2">
                                    <div class="p-5 bg-[#202020] flex flex-col rounded-lg w-full gap-5">
                                        <div class="bg-[#0B56A7] rounded-lg py-2 text-center">
                                            <p class="font-bold text-white">Keberangkatan</p>
                                        </div>
                                        <div>
                                            <select name="" id=""
                                                class="w-full bg-[#202020] text-white text-lg font-medium">
                                                <option value="">10 Oktober 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="self-center">
                                        <img src="{{ asset('img/assets/exchange.svg') }}" class="w-[150px]"
                                            alt="" />
                                    </div>
                                    <div class="p-5 bg-[#202020] flex flex-col rounded-lg w-full gap-5">
                                        <div class="bg-[#0B56A7] rounded-lg py-2 text-center">
                                            <p class="font-bold text-white">Kembali</p>
                                        </div>
                                        <div>
                                            <select name="" id=""
                                                class="w-full bg-[#202020] text-white text-lg font-medium">
                                                <option value="">10 Oktober 2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="p-5 bg-[#202020] flex flex-col rounded-lg w-full gap-5">
                                        <div class="bg-[#0B56A7] rounded-lg py-2 text-center">
                                            <p class="font-bold text-white">Penumpang</p>
                                        </div>
                                        <div>
                                            <select name="" id=""
                                                class="w-full bg-[#202020] text-white text-lg font-medium">
                                                <option value="">1 dewasa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="font-medium text-white bg-[#0B56A7] w-full py-3 text-lg rounded-full">Cari
                                    Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 px-5">
                <div class="flex flex-col gap-5">
                    <div class="flex justify-between">
                        <div class="flex">
                            <input type="checkbox" id="toggle" name="toggle" class="hidden" />
                            <label for="toggle" class="flex items-center cursor-pointer select-none">
                                <div class="relative w-[70px] h-7 rounded-full border-2 border-black mr-3">
                                    <div id="thumb"
                                        class="absolute inset-0 top-1 left-1 w-4 h-4 rounded-full bg-[#0B56A7] shadow-md transform scale-110 transition-transform duration-300 ease-in-out">
                                    </div>
                                </div>
                            </label>
                            <p class="font-bold text-2xl self-center">Filter Ketersediaan Jadwal Kereta</p>
                        </div>
                        <div class="flex rounded-full border-2 border-black p-1 gap-2 self-center">
                            <button
                                class="text-white bg-[#0B56A7] font-bold text-lg px-4 py-1 rounded-full">List</button>
                            <button
                                class="text-black bg-[#white] font-bold text-lg px-4 py-1 rounded-full">Grid</button>
                        </div>
                    </div>
                    <div class="p-3 border-2 border-black rounded-lg">
                        <div class="grid grid-cols-4 gap-7">
                            <div class="flex flex-col gap-3 border-r-2 border-[#d0d0d0] pr-5">
                                <div class="flex justify-between">
                                    <p class="font-semibold self-center">Urutkan berdasarkan</p>
                                    <div>
                                        <img src="{{ asset('img/assets/down.svg') }}" class="w-[23px]"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <input type="radio" id="radio1" name="radioGroup"
                                            class="hidden bg-[#0b56a7]" />
                                        <label for="radio1" class="flex items-center cursor-pointer select-none">
                                            <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                            <span class="text-gray-700 font-semibold">Semua</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="radio1" name="radioGroup"
                                            class="hidden bg-[#0b56a7]" />
                                        <label for="radio1" class="flex items-center cursor-pointer select-none">
                                            <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                            <span class="text-gray-700 font-semibold">Harga Terendah</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="radio1" name="radioGroup"
                                            class="hidden bg-[#0b56a7]" />
                                        <label for="radio1" class="flex items-center cursor-pointer select-none">
                                            <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                            <span class="text-gray-700 font-semibold">Harga Tertinggi</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 border-r-2 border-[#d0d0d0] pr-5">
                                <div class="flex justify-between">
                                    <p class="font-semibold self-center">Waktu Keberangkatan</p>
                                    <div>
                                        <img src="{{ asset('img/assets/down.svg') }}" class="w-[23px]"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="w-full">
                                    <p class="text-center">00.00 - 24.00</p>
                                    <input type="range" min="0" max="100" value="50"
                                        id="customRange"
                                        class="appearance-none w-full h-[2px] rounded-full bg-black outline-none" />
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 border-r-2 border-[#d0d0d0] pr-5">
                                <div class="flex justify-between">
                                    <p class="font-semibold self-center">Kelas Kereta</p>
                                    <div>
                                        <img src="{{ asset('img/assets/down.svg') }}" class="w-[23px]"
                                            alt="" />
                                    </div>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Semua</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Ekonomi</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Bisnis</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Eksekutif</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="flex justify-between">
                                    <p class="font-semibold self-center">Nama Kereta</p>
                                    <div>
                                        <img src="{{ asset('img/assets/down.svg') }}" class="w-[23px]"
                                            alt="" />
                                    </div>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Semua</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Arjonegoro</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Doho</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                            class="hidden" />
                                        <label for="customCheckbox" class="flex items-center cursor-pointer">
                                            <div
                                                class="w-6 h-6 border-2 border-black mr-3 flex items-center justify-center">
                                                <div id="checkmark" class="w-4 h-4 rounded-sm bg-blue-500 opacity-0">
                                                </div>
                                            </div>
                                            <span class="text-black font-medium">Argojati</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="flex flex-col gap-3 mt-10 w-1/2">
                                <button
                                    class="font-medium text-white bg-[#0B56A7] w-full py-2 text-sm rounded-full">Terapkan</button>
                                <button
                                    class="font-medium border-2 border-[#d0d0d0] text-[#0B56A7] w-full py-2 text-sm rounded-full">Atur
                                    Ulang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
