<?php

use Illuminate\Support\Facades\Route;


Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/hello', function () {
    return "HALLO LARAVEL 13!";
});

Route::get('/dikadalin', function() {
    return "JANGAN LUPAA BELI MODUL MOBILE AND WEB SERVICE YG AWALNYA 50 RIBU DISKOUND 20% JADI HANYA 400 RIBU SAJAA";
});

Route::get('/halo', function() {
    return "Halo, selamat datang di Laravel 13!";
});

Route::get('/waktu', 
    fn () => now()->format('d-m-Y H:i:s')       
);

Route::get('profil/{nama}', function (string $nama) {
    return "Halo, {$nama}!";
});

Route::get('/kategori/{nama?}', function (?string $nama = 'semua') {
    return "Menampilkan kategori: {$nama}";
});

Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Kelas {$kode}, NIM {$nim}";
});

Route::get('/artikel/{id}', function (int $id) {
    return "Artikel nomor {$id}";
})->whereNumber('id');

Route::get('/pengguna/{username}', function (string $username) {
    return "Pengguna: {$username}";
})->whereAlpha('username');

Route::get('/kode/{kode}', function (string $kode) {
    return "Kode: {$kode}";
})->where('kode', '[A-Z]{3}[0-9]{2}');

Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/kontak', function () {
    return view('kontak', ['email' => 'info@kampus.ac.id']);
})->name('kontak');
// penulisan rutingnya pake web

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', fn () => 'Dashboard Admin')
        ->name('dashboard');

    Route::get('/pengaturan', fn () => 'Pengaturan Admin')
        ->name('pengaturan');
});

Route::redirect('/beranda', '/');

Route::fallback(function () {
    return response('Halaman tidak ditemukan (kustom).', 404);
});