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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/trial', function () {
    return view('headfooproto1');
});

Route::get('/', ['as' => 'beranda', 'uses' => 'maincontroller@beranda']);

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('beranda', ['as' => 'beranda', 'uses' => 'maincontroller@beranda']);

Route::put('/aksicari', 'maincontroller@aksicari');

Route::get('tentangkami', ['as' => 'tentangkami', 'uses' => 'maincontroller@tentangkami']);
Route::get('profil', ['as' => 'profil', 'uses' => 'maincontroller@profil']);
Route::get('hubunganinvestor', ['as' => 'hubunganinvestor', 'uses' => 'maincontroller@hubunganinvestor']);
Route::get('laporankeuangan', ['as' => 'laporankeuangan', 'uses' => 'maincontroller@laporankeuangan']);
Route::get('laporantahunan', ['as' => 'laporantahunan', 'uses' => 'maincontroller@laporantahunan']);
Route::get('laporancgc', ['as' => 'laporancgc', 'uses' => 'maincontroller@laporancgc']);
Route::get('manajemen', ['as' => 'manajemen', 'uses' => 'maincontroller@manajemen']);
Route::get('dewankomisaris', ['as' => 'dewankomisaris', 'uses' => 'maincontroller@dewankomisaris']);
Route::get('direksi', ['as' => 'direksi', 'uses' => 'maincontroller@direksi']);
Route::get('kepaladivisi', ['as' => 'kepaladivisi', 'uses' => 'maincontroller@kepaladivisi']);
Route::get('pimpinancabang', ['as' => 'pimpinancabang', 'uses' => 'maincontroller@pimpinancabang']);

Route::get('simulasi', ['as' => 'simulasi', 'uses' => 'maincontroller@simulasi']);
Route::put('/simulasihitung', 'maincontroller@simulasihitung');

Route::get('layanan', ['as' => 'layanan', 'uses' => 'maincontroller@layanan']);
Route::get('kredit', ['as' => 'kredit', 'uses' => 'maincontroller@kredit']);
Route::get('kreditcerahinkusif', ['as' => 'kreditcerahinkusif', 'uses' => 'maincontroller@kreditcerahinkusif']);
Route::get('kreditmultiguna', ['as' => 'kreditmultiguna', 'uses' => 'maincontroller@kreditmultiguna']);
Route::get('tabungan', ['as' => 'tabungan', 'uses' => 'maincontroller@tabungan']);
Route::get('tabunganumumparama', ['as' => 'tabunganumumparama', 'uses' => 'maincontroller@tabunganumumparama']);
Route::get('tabungancitraparama4', ['as' => 'tabungancitraparama4', 'uses' => 'maincontroller@tabungancitraparama4']);
Route::get('tabunganarjuna11', ['as' => 'tabunganarjuna11', 'uses' => 'maincontroller@tabunganarjuna11']);
Route::get('tabunganku', ['as' => 'tabunganku', 'uses' => 'maincontroller@tabunganku']);
Route::get('tabunganarjuna12', ['as' => 'tabunganarjuna12', 'uses' => 'maincontroller@tabunganarjuna12']);
Route::get('tabunganharirayaqurmatasya', ['as' => 'tabunganharirayaqurmatasya', 'uses' => 'maincontroller@tabunganharirayaqurmatasya']);
Route::get('tabungansimpel', ['as' => 'tabungansimpel', 'uses' => 'maincontroller@tabungansimpel']);
Route::get('tabunganarjuna13', ['as' => 'tabunganarjuna13', 'uses' => 'maincontroller@tabunganarjuna13']);
Route::get('deposito', ['as' => 'deposito', 'uses' => 'maincontroller@deposito']);
Route::get('beritalainnya', ['as' => 'beritalainnya', 'uses' => 'maincontroller@beritalainnya']);
Route::get('berita/{id}', 'maincontroller@berita');

Route::get('pengumumanlainnya', ['as' => 'pengumumanlainnya', 'uses' => 'maincontroller@pengumumanlainnya']);
Route::get('pengumuman/{id}', 'maincontroller@pengumuman');


Route::get('karir', ['as' => 'karir', 'uses' => 'maincontroller@karir']);

Route::get('kontakkami', ['as' => 'kontakkami', 'uses' => 'maincontroller@kontakkami']);


Route::get('adminlogin', ['as' => 'adminlogin', 'uses' => 'maincontroller@adminlogin']);

Route::put('/aksilogin', 'maincontroller@loginaksi');
Route::get('adminpage', ['as' => 'adminpage', 'uses' => 'maincontroller@adminpage']);
Route::get('adminaturpassword', ['as' => 'adminaturpassword', 'uses' => 'maincontroller@adminaturpassword']);
Route::put('/aksiaturpassword', 'maincontroller@aksiaturpassword');

Route::get('adminfile', ['as' => 'adminfile', 'uses' => 'maincontroller@adminfile']);
Route::get('adminfileupload', ['as' => 'adminfileupload', 'uses' => 'maincontroller@adminfileupload']);
Route::put('/aksitambahfile', 'maincontroller@aksitambahfile');
Route::get('downloadfile/{id}', 'maincontroller@downloadfile');
Route::get('hapusfile/{id}', 'maincontroller@hapusfile');

Route::get('adminberita', ['as' => 'adminberita', 'uses' => 'maincontroller@adminberita']);
Route::get('hapusberita/{id}', 'maincontroller@hapusberita');
Route::get('adminberitabuat', ['as' => 'adminberitabuat', 'uses' => 'maincontroller@adminberitabuat']);
Route::put('/buatberitaaksi', 'maincontroller@buatberitaaksi');

Route::get('adminpengumuman', ['as' => 'adminpengumuman', 'uses' => 'maincontroller@adminpengumuman']);
Route::get('hapuspengumuman/{id}', 'maincontroller@hapuspengumuman');
Route::get('adminpengumumanbuat', ['as' => 'adminpengumumanbuat', 'uses' => 'maincontroller@adminpengumumanbuat']);
Route::put('/buatpengumumanaksi', 'maincontroller@buatpengumumanaksi');
Route::get('editartikel/{id}', 'maincontroller@editartikel');
Route::put('editartikelaksi/{id}', 'maincontroller@editartikelaksi');



Route::get('adminlaporankeuangan', ['as' => 'adminlaporankeuangan', 'uses' => 'maincontroller@adminlaporankeuangan']);
Route::get('adminlaporankeuanganupload', ['as' => 'adminlaporankeuanganupload', 'uses' => 'maincontroller@adminlaporankeuanganupload']);
Route::put('/buatlaporankeuanganaksi', 'maincontroller@buatlaporankeuanganaksi');
Route::get('hapuslaporankeuangan/{id}', 'maincontroller@hapuslaporankeuangan');

Route::get('adminlaporantahunan', ['as' => 'adminlaporantahunan', 'uses' => 'maincontroller@adminlaporantahunan']);
Route::get('adminlaporantahunanupload', ['as' => 'adminlaporantahunanupload', 'uses' => 'maincontroller@adminlaporantahunanupload']);
Route::put('/buatlaporantahunanaksi', 'maincontroller@buatlaporantahunanaksi');
Route::get('hapuslaporantahunan/{id}', 'maincontroller@hapuslaporantahunan');

Route::get('adminlaporancgc', ['as' => 'adminlaporancgc', 'uses' => 'maincontroller@adminlaporancgc']);
Route::get('adminlaporancgcupload', ['as' => 'adminlaporancgcupload', 'uses' => 'maincontroller@adminlaporancgcupload']);
Route::put('/buatlaporancgcaksi', 'maincontroller@buatlaporancgcaksi');
Route::get('hapuslaporancgc/{id}', 'maincontroller@hapuslaporancgc');

Route::put('/buatlaporanlamaranaksi', 'maincontroller@buatlaporanlamaranaksi');
Route::get('hapuslamaran/{id}', 'maincontroller@hapuslamaran');

Route::get('logout', ['as' => 'logout', 'uses' => 'maincontroller@logout']);


Route::get('1beranda', ['as' => '1beranda', 'uses' => 'maincontroller@beranda1']);
Route::get('1berita/{id}', 'maincontroller@1berita');
