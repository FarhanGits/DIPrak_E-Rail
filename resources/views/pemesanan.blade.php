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
                <li><a href="">Bantuan</a></li>
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
                <div class="flex w-full gap-16">
                    <div class="w-[20rem]">
                        <div class="flex flex-col gap-8">
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="checkbox" id="toggle" name="toggle" class="hidden" />
                                    <label for="toggle" class="flex items-center cursor-pointer select-none">
                                        <div class="relative w-[70px] h-7 rounded-full border-2 border-black mr-3">
                                            <div id="thumb"
                                                class="absolute inset-0 top-1 left-1 w-4 h-4 rounded-full bg-[#0B56A7] shadow-md transform scale-110 transition-transform duration-300 ease-in-out">
                                            </div>
                                        </div>
                                        <p class="font-bold text-xl">Filter</p>
                                    </label>
                                </div>
                            </div>
                            <div class="p-3 border-2 border-black rounded-lg">
                                <div class="grid grid-cols-1 gap-7">
                                    <div class="flex flex-col gap-3 border-b-2 border-[#d0d0d0] pb-6">
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
                                                <label for="radio1"
                                                    class="flex items-center cursor-pointer select-none">
                                                    <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                                    <span class="text-gray-700 font-semibold">Semua</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" id="radio1" name="radioGroup"
                                                    class="hidden bg-[#0b56a7]" />
                                                <label for="radio1"
                                                    class="flex items-center cursor-pointer select-none">
                                                    <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                                    <span class="text-gray-700 font-semibold">Harga Terendah</span>
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input type="radio" id="radio1" name="radioGroup"
                                                    class="hidden bg-[#0b56a7]" />
                                                <label for="radio1"
                                                    class="flex items-center cursor-pointer select-none">
                                                    <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                                    <span class="text-gray-700 font-semibold">Harga Tertinggi</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-4 border-b-2 border-[#d0d0d0] pb-6">
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
                                    <div class="flex flex-col gap-4 border-b-2 border-[#d0d0d0] pb-6">
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                                                        <div id="checkmark"
                                                            class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
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
                    <div class="w-full">
                        <div class="flex justify-between">
                            <p class="font-bold text-2xl self-center">Ketersediaan Jadwal Kereta</p>
                            <div class="flex rounded-full border-2 border-black p-1 gap-2 self-center">
                                <button
                                    class="text-white bg-[#0B56A7] font-bold text-lg px-4 py-1 rounded-full">List</button>
                                <button
                                    class="text-black bg-[#white] font-bold text-lg px-4 py-1 rounded-full">Grid</button>
                            </div>
                        </div>

                        <div class="flex flex-col gap-8 mt-3">
                            <div class="rounded-lg border-2 border-black">
                                <div class="px-6 py-4 bg-[#0B56A7] flex justify-between">
                                    <h1 class="text-white text-xl font-bold">Commuter Line Arjonegoro (502)</h1>
                                    <div>
                                        <h1 class="text-white text-xl font-bold">Rp. 12.000,-</h1>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <div class="flex justify-between">
                                        <div class="flex flex-col gap-3">
                                            <p class="font-bold mb-2">Ekonomi (C)</p>
                                            <h3 class="font-bold text-2xl">Gubeng (GB)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">05:05</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                        <div class="self-center text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="514" height="25"
                                                viewBox="0 0 514 30" fill="none">
                                                <path
                                                    d="M0.666667 15C0.666667 22.3638 6.6362 28.3333 14 28.3333C21.3638 28.3333 27.3333 22.3638 27.3333 15C27.3333 7.6362 21.3638 1.66667 14 1.66667C6.6362 1.66667 0.666667 7.6362 0.666667 15ZM514 15L489 0.566243V29.4338L514 15ZM14 17.5H19V12.5H14V17.5ZM29 17.5H39V12.5H29V17.5ZM49 17.5H59V12.5H49V17.5ZM69 17.5H79V12.5H69V17.5ZM89 17.5H99V12.5H89V17.5ZM109 17.5H119V12.5H109V17.5ZM129 17.5H139V12.5H129V17.5ZM149 17.5H159V12.5H149V17.5ZM169 17.5H179V12.5H169V17.5ZM189 17.5H199V12.5H189V17.5ZM209 17.5H219V12.5H209V17.5ZM229 17.5H239V12.5H229V17.5ZM249 17.5H259V12.5H249V17.5ZM269 17.5H279V12.5H269V17.5ZM289 17.5H299V12.5H289V17.5ZM309 17.5H319V12.5H309V17.5ZM329 17.5H339V12.5H329V17.5ZM349 17.5H359V12.5H349V17.5ZM369 17.5H379V12.5H369V17.5ZM389 17.5H399V12.5H389V17.5ZM409 17.5H419V12.5H409V17.5ZM429 17.5H439V12.5H429V17.5ZM449 17.5H459V12.5H449V17.5ZM469 17.5H479V12.5H469V17.5ZM489 17.5H499V12.5H489V17.5Z"
                                                    fill="black" />
                                            </svg>

                                            <p class="mt-3 font-medium">Durasi 2 jam 24 menit</p>
                                        </div>
                                        <div class="flex flex-col gap-3 text-right">
                                            <p class="font-medium mb-2 text-[#E40000]">24 Tersisa</p>
                                            <h3 class="font-bold text-2xl">Trunojoyo (TNJ)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">07:29</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg border-2 border-black">
                                <div class="px-6 py-4 bg-[#0B56A7] flex justify-between">
                                    <h1 class="text-white text-xl font-bold">Commuter Line Arjonegoro (502)</h1>
                                    <div>
                                        <h1 class="text-white text-xl font-bold">Rp. 12.000,-</h1>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <div class="flex justify-between">
                                        <div class="flex flex-col gap-3">
                                            <p class="font-bold mb-2">Ekonomi (C)</p>
                                            <h3 class="font-bold text-2xl">Gubeng (GB)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">05:05</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                        <div class="self-center text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="514" height="25"
                                                viewBox="0 0 514 30" fill="none">
                                                <path
                                                    d="M0.666667 15C0.666667 22.3638 6.6362 28.3333 14 28.3333C21.3638 28.3333 27.3333 22.3638 27.3333 15C27.3333 7.6362 21.3638 1.66667 14 1.66667C6.6362 1.66667 0.666667 7.6362 0.666667 15ZM514 15L489 0.566243V29.4338L514 15ZM14 17.5H19V12.5H14V17.5ZM29 17.5H39V12.5H29V17.5ZM49 17.5H59V12.5H49V17.5ZM69 17.5H79V12.5H69V17.5ZM89 17.5H99V12.5H89V17.5ZM109 17.5H119V12.5H109V17.5ZM129 17.5H139V12.5H129V17.5ZM149 17.5H159V12.5H149V17.5ZM169 17.5H179V12.5H169V17.5ZM189 17.5H199V12.5H189V17.5ZM209 17.5H219V12.5H209V17.5ZM229 17.5H239V12.5H229V17.5ZM249 17.5H259V12.5H249V17.5ZM269 17.5H279V12.5H269V17.5ZM289 17.5H299V12.5H289V17.5ZM309 17.5H319V12.5H309V17.5ZM329 17.5H339V12.5H329V17.5ZM349 17.5H359V12.5H349V17.5ZM369 17.5H379V12.5H369V17.5ZM389 17.5H399V12.5H389V17.5ZM409 17.5H419V12.5H409V17.5ZM429 17.5H439V12.5H429V17.5ZM449 17.5H459V12.5H449V17.5ZM469 17.5H479V12.5H469V17.5ZM489 17.5H499V12.5H489V17.5Z"
                                                    fill="black" />
                                            </svg>

                                            <p class="mt-3 font-medium">Durasi 2 jam 24 menit</p>
                                        </div>
                                        <div class="flex flex-col gap-3 text-right">
                                            <p class="font-medium mb-2 text-[#E40000]">24 Tersisa</p>
                                            <h3 class="font-bold text-2xl">Trunojoyo (TNJ)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">07:29</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-lg border-2 border-black">
                                <div class="px-6 py-4 bg-[#0B56A7] flex justify-between">
                                    <h1 class="text-white text-xl font-bold">Commuter Line Arjonegoro (502)</h1>
                                    <div>
                                        <h1 class="text-white text-xl font-bold">Rp. 12.000,-</h1>
                                    </div>
                                </div>
                                <div class="py-4 px-6">
                                    <div class="flex justify-between">
                                        <div class="flex flex-col gap-3">
                                            <p class="font-bold mb-2">Ekonomi (C)</p>
                                            <h3 class="font-bold text-2xl">Gubeng (GB)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">05:05</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                        <div class="self-center text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="514" height="25"
                                                viewBox="0 0 514 30" fill="none">
                                                <path
                                                    d="M0.666667 15C0.666667 22.3638 6.6362 28.3333 14 28.3333C21.3638 28.3333 27.3333 22.3638 27.3333 15C27.3333 7.6362 21.3638 1.66667 14 1.66667C6.6362 1.66667 0.666667 7.6362 0.666667 15ZM514 15L489 0.566243V29.4338L514 15ZM14 17.5H19V12.5H14V17.5ZM29 17.5H39V12.5H29V17.5ZM49 17.5H59V12.5H49V17.5ZM69 17.5H79V12.5H69V17.5ZM89 17.5H99V12.5H89V17.5ZM109 17.5H119V12.5H109V17.5ZM129 17.5H139V12.5H129V17.5ZM149 17.5H159V12.5H149V17.5ZM169 17.5H179V12.5H169V17.5ZM189 17.5H199V12.5H189V17.5ZM209 17.5H219V12.5H209V17.5ZM229 17.5H239V12.5H229V17.5ZM249 17.5H259V12.5H249V17.5ZM269 17.5H279V12.5H269V17.5ZM289 17.5H299V12.5H289V17.5ZM309 17.5H319V12.5H309V17.5ZM329 17.5H339V12.5H329V17.5ZM349 17.5H359V12.5H349V17.5ZM369 17.5H379V12.5H369V17.5ZM389 17.5H399V12.5H389V17.5ZM409 17.5H419V12.5H409V17.5ZM429 17.5H439V12.5H429V17.5ZM449 17.5H459V12.5H449V17.5ZM469 17.5H479V12.5H469V17.5ZM489 17.5H499V12.5H489V17.5Z"
                                                    fill="black" />
                                            </svg>

                                            <p class="mt-3 font-medium">Durasi 2 jam 24 menit</p>
                                        </div>
                                        <div class="flex flex-col gap-3 text-right">
                                            <p class="font-medium mb-2 text-[#E40000]">24 Tersisa</p>
                                            <h3 class="font-bold text-2xl">Trunojoyo (TNJ)</h3>
                                            <div class="mt-2">
                                                <p class="font-medium">07:29</p>
                                                <p class="font-medium mt-2">10 Oktober 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
