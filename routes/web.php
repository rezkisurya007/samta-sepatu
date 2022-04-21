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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::group(['middleware' => ['auth','user']],function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('pesan/{id}', 'PesanController@index');
    Route::post('pesan/{id}', 'PesanController@pesan');
    Route::get('check-out', 'PesanController@check_out');
    Route::delete('check-out/{id}', 'PesanController@delete');
    Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');
    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@update');
    Route::get('history', 'HistoryController@index');
    Route::get('history/{id}', 'HistoryController@detail');
    Route::get('/konfirmasi/{id}', 'HistoryController@konfirmasi');
    Route::get('/bukti', 'buktiController@index'); 
    // Route::view('form', "form");
    Route::get('form/{id}', "buktiController@view");
    Route::post('upload', 'buktiController@upload'); 


    Route::get('refundbarang', "refundController@view");
    Route::post('refund', 'refundController@refund');

});

Route::group(['middleware' => ['auth','admin']],function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');

    });
    Route::get('/pesanan', 'Admin\PesananController@pesanan'); 
Route::delete('/delete/{id}','Admin\PesananController@delete');
Route::get('pesanan/edit/{id}', 'Admin\PesananController@edit');
Route::put('pesanan/update/{id}', 'Admin\PesananController@submit');
Route::get('/barang', 'Admin\BarangController@barang'); 
Route::get('/edit/{id}', 'Admin\BarangController@edit');

Route::put('/update/{id}', 'Admin\BarangController@submit');
Route::delete('/deletee/{id}','Admin\BarangController@delete');
Route::post('/save-barang','Admin\BarangController@store');

Route::get('/detailpesanan', 'Admin\DetailPesananController@detailpesanan');


Route::get('/user', 'Admin\UserController@user'); 
Route::delete('user/delete/{id}','Admin\UserController@delete');

Route::get('/contactus', 'Admin\ContactsController@index'); 
Route::get('/contact-us/{id}','Admin\ContactsController@edit');
Route::put('/contactus-submit/{id}','Admin\ContactsController@submit');
Route::delete('contact-us-delete/{id}','Admin\ContactsController@delete');


Route::get('/layananus', 'Admin\LayanansController@index'); 
Route::get('/layanan-us/{id}','Admin\LayanansController@edit');
Route::put('/layananus-submit/{id}','Admin\LayanansController@submit');
Route::delete('layanan-us-delete/{id}','Admin\LayanansController@delete');

Route::get('/alamatus', 'Admin\AlamatsController@index'); 
Route::get('/alamat-us/{id}','Admin\AlamatsController@edit');
Route::put('/alamatus-submit/{id}','Admin\AlamatsController@submit');
Route::delete('alamat-us-delete/{id}','Admin\AlamatsController@delete');

Route::get('/aboutus', 'Admin\AboutsController@index'); 
Route::get('/about-us/{id}','Admin\AboutsController@edit');
Route::put('/aboutus-submit/{id}','Admin\AboutsController@submit');
Route::delete('about-us-delete/{id}','Admin\AboutsController@delete');

Route::get('/berandaus', 'Admin\BerandasController@index'); 
Route::get('/beranda-us/{id}','Admin\BerandasController@edit');
Route::put('/berandaus-submit/{id}','Admin\BerandasController@submit');
Route::delete('beranda-us-delete/{id}','Admin\BerandasController@delete');

Route::get('/refund', 'refundController@index');

    Route::get('/terima/{id}', 'refundController@verifikasiterima');
    Route::get('/tolak/{id}', 'refundController@verifikasitolak');
    Route::get('/bukti', 'buktiController@index');
});




