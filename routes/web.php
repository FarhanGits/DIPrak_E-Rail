<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/home', function () {
    return view('homepage');
})->name('home');


Route::get('/helpcentre', function () {
    return view('helpcentre');
})->name('helpcentre');

Route::get('/riwayat', function () {
    return view('riwayat');
})->name('riwayat');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/pesan-tiket', function () {
    return view('pesan-tiket');
})->name('pesan-tiket');

Route::get('/penumpang', function () {
    return view('penumpang');
})->name('penumpang');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/pemesanan/empty', function () {
    return view('empty');
})->name('empty');

Route::get('/pemesanan', function () {
    return view('pemesanan');
})->name('pemesanan');

Route::get('/pilih-kursi', function () {
    return view('pilih-kursi');
})->name('pilih-kursi');

Route::get('/detail', function () {
    return view('detail-tiket');
})->name('detail');

