<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return ('Halaman Home');
});

route::get('/about', function () {
    return ('Halaman About');
});

route::get('/blog', function () {
    return ('Halaman Blog');
});

route::get('/nara', function () {
    return ('Nama saya Nabilah Najwa Ramadhani Aysyah');
});

route::get('/belajar', function () {
    echo '<h1>hello world</h1>';
    echo '<p>sedang belajar laravel</p>';
}); 

route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>welcome to 11 rpl</u></h2>';
}); 

route::get('/siswa/{nara}', function ($nara) {
    return "tampilkan data siswa bernama $nara";
}); 

route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "cek sisa stok untuk $jenis $merek";
});
route::get('/profile', function () {
    return view('profile');
});