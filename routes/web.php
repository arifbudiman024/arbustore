<?php

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

//Route - Front
Route::view('/', 'front.beranda');
Route::view('/shop', 'front.shop');

//--------------------------------------------------------------------------

//Route - Admin
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/', function () {
        return view('admin.dashboard.index');
    });

    Route::get('/profil', function () {
        return view('admin.profil');
    });

    Route::resource('carabeli','CaraBeliController');
    Route::resource('kategori','KategoriController');
    Route::resource('jasakirim','JasaKirimController');
    Route::resource('produk','ProdukController');

});