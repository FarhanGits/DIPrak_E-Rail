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
        <div class="pl-0 p-5 h-full font-poppins">
            <div class="flex flex-col gap-16">
                <div>
                    <p class="text-[#acacac] font-semibold text-xl">Home / Jadwal / <span class="text-black">Pesan
                            Tiket</span></p>
                </div>
                <div class="w-2/4">
                    <div class="rounded-full py-2 px-9 border-2 border-black flex justify-between shadow-custom">
                        <div class="self-center">
                            <h3 class="text-md font-semibold">Detail Tiket</h3>
                        </div>
                        <div class="self-center">
                            <h3 class="text-md font-semibold">Penumpang</h3>
                        </div>
                        <div class="bg-[#0B56A7] py-2 px-3 rounded-full">
                            <h3 class="text-md font-semibold text-white">Tempat Duduk</h3>
                        </div>
                        <div class="self-center">
                            <h3 class="text-md font-semibold">Pembayaran</h3>
                        </div>
                        <div class="self-center">
                            <h3 class="text-md font-semibold">Detail Pemesanan</h3>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-5">
                    <div class="rounded-lg border-2 border-black">
                        <div class="px-6 py-4 bg-[#0B56A7] flex justify-between">
                            <h1 class="text-white text-lg font-bold">Pilih Kursi</h1>
                        </div>
                        <div class="py-4 px-6 !pr-20">
                            <div class="flex flex-col gap-5">
                                <div class="flex gap-10">
                                    <div class="flex items-center">
                                        <input type="radio" id="radio1" name="radioGroup"
                                            class="hidden bg-[#0b56a7]" />
                                        <label for="radio1" class="flex items-center cursor-pointer select-none">
                                            <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                            <span class="text-gray-700 font-semibold">Kursi Acak</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="radio1" name="radioGroup"
                                            class="hidden bg-[#0b56a7]" />
                                        <label for="radio1" class="flex items-center cursor-pointer select-none">
                                            <div class="w-6 h-6 border-2 border-black rounded-full mr-3"></div>
                                            <span class="text-gray-700 font-semibold">Pilih Kursi (+ Rp.
                                                7.500,00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <select name="" id=""
                                        class="border border-[#E1DED9] bg-[#EBEBEB] font-bold p-2 rounded-md">
                                        <option value="">Gerbong 7
                                            <p class="!text-[#F69249]">(32 Kursi Tersisa)</p>
                                        </option>
                                    </select>
                                </div>

                                <div class="flex gap-3 w-full">
                                    <div class="flex flex-col gap-3 font-bold">
                                        <p>#</p>
                                        <p>1</p>
                                        <p>2</p>
                                        <p>3</p>
                                        <p>4</p>
                                        <p>5</p>
                                        <p>6</p>
                                        <p>7</p>
                                        <p>8</p>
                                        <p>9</p>
                                        <p>10</p>
                                        <p>11</p>
                                        <p>12</p>
                                    </div>
                                    <div class="grid grid-cols-3 gap-10 w-full">
                                        <div class="flex flex-col gap-3">
                                            <div class="grid grid-cols-2 text-center font-bold">
                                                <p>A</p>
                                                <p>B</p>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden">
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden">
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden">
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden">
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">
                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col gap-3">
                                            <div class="grid grid-cols-2 text-center font-bold">
                                                <p>C</p>
                                                <p>D</p>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 ">
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input type="checkbox" id="customCheckbox" name="customCheckbox"
                                                        class="hidden" />
                                                    <label for="customCheckbox"
                                                        class="flex items-center cursor-pointer">

                                                        <div
                                                            class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                            <div id="checkmark"
                                                                class="w-4 h-4 rounded-sm bg-blue-500 opacity-0"></div>
                                                        </div>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end w-full">
                                        <div class="flex flex-col gap-3">
                                            <div class="flex items-center">
                                                <div
                                                    class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                    <div id="checkmark" class="w-full h-full rounded-sm bg-[#1B66AC]">
                                                    </div>
                                                </div>
                                                <p class="font-bold">Dipilih</p>
                                            </div>
                                            <div class="flex items-center">
                                                <div
                                                    class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                    <div id="checkmark" class="w-full h-full rounded-sm bg-[#838587]">
                                                    </div>
                                                </div>
                                                <p class="font-bold">Terisi</p>
                                            </div>
                                            <div class="flex items-center">
                                                <div
                                                    class="w-6 h-6 border-2 border-black rounded-md mr-3 flex items-center justify-center">
                                                    <div id="checkmark" class="w-full h-full rounded-sm bg-[#FFF]">
                                                    </div>
                                                </div>
                                                <p class="font-bold">Tersedia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="rounded-lg border-2 border-black h-fit">
                            <div class="px-6 py-4 bg-[#0B56A7] flex justify-between">
                                <h1 class="text-white text-lg font-bold">Detail Harga</h1>
                            </div>
                            <div class="py-4 px-6">
                                <div class="flex justify-between">
                                    <div class="flex flex-col">
                                        <h3 class="font-bold text-xl">1x Tiket Pembelian</h3>
                                        <ul class="list-disc ml-5 mt-3">
                                            <li class="font-bold text-lg mb-2">Ekonomi (C)</li>
                                            <li class="font-bold text-lg mb-2">1 Kursi</li>
                                            <li class="font-bold text-lg mb-2">PPN</li>
                                        </ul>
                                    </div>
                                    <div class="flex flex-col gap-[8.5px]">
                                        <p class="font-bold text-lg">Rp. 21.645,00</p>
                                        <p class="font-bold text-lg">Rp. 12.000,00</p>
                                        <p class="font-bold text-lg">Rp. 7.500,00</p>
                                        <p class="font-bold text-lg">Rp. 2.145,00</p>
                                    </div>
                                </div>
                                <div class="w-full h-[2px] my-3 bg-[#c4c4c4]"></div>
                                <div class="flex justify-between">
                                    <p class="text-xl font-bold">Total</p>
                                    <p class="text-lg font-bold">Rp. 21.645,00</p>
                                </div>
                            </div>
                        </div>

                        <a href="/pembayaran" class="text-right mt-3">
                            <button class="font-bold text-white bg-black py-2 px-5 rounded-xl">Lanjutkan</button>
                        </a>
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
