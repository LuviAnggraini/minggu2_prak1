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

Route::get('/', function () {
    return ('Selamat Datang di Jurusan Teknologi Informasi');
});


Route::prefix('/')->group(function () {
    Route::get('prodi/{nama}', function ($nama) {
    return 'Program Studi - '.$nama;
    });
   });

Route::get('/news/{angka}', function($angka){
    return 'Berita Terkini pada news - '.$angka;
});

Route::prefix('/')->group(function () {
    Route::get('sarana/{nama}', function ($nama) {
    return 'Sarana - '.$nama;
    });
   });

Route::get('/aboutUs', function () {
    return ('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu porttitor leo. Etiam mollis quis dolor eget dictum. Fusce id sollicitudin ante. Suspendisse elit velit, mollis sit amet fermentum sed, eleifend ut mi. Vestibulum convallis massa nec dolor euismod semper. Morbi consequat quis lectus vitae placerat. Maecenas congue justo enim, in ultricies nibh consequat vitae. Mauris facilisis elementum ultricies. Sed semper risus sit amet odio pharetra tincidunt. Nam et gravida tellus, eget condimentum nulla.');
});

Route::get('/post/{nama}/komen/{komen}', function($nama,$komen){
    return ''.$nama.' = '.$komen ;
});
