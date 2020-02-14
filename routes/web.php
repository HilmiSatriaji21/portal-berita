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

// Relasi
Route::get('penulis', function(){
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data){
        echo "Judul     : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug      : $data->slug<br>";
        echo "<hr>";
    }
});
use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;

Route::get('relasi-1', function(){
    #Mencari Mahasiswa Dengan NIM 210903
    $mahasiswa = Mahasiswa::where('nim', '=', '0123090')->first();

    #Menampilkan Nama Wali Dari Mahasiswa Tersebut
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function(){
    #Mencari Mahasiswa Dengan NIM 210903
    $mahasiswa = Mahasiswa::where('nim', '=', '0123091')->first();

    #Menampilkan Nama Wali Dari Mahasiswa Tersebut
    return $mahasiswa->wali->nama;
});

Route::get('relasi-3', function(){
    #Mencari Mahasiswa Dengan Yang Bernama Satia
    $mahasiswa = Mahasiswa::where('nama', '=', 'Satia')->first();

    #Menampilkan Seluruh Data Maha Siswa Dari Dosen Tersebut
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li>Nama : ' . $temp->nama .
        '<strong>' . $temp->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function(){
    #Mencari Data Mahasiswa Yang Memiliki Nama Satia
    $novay = Mahasiswa::where('nama', '=', 'Satia')->first();

    #Menampilkan Seluruh Data Maha Siswa Dari Dosen Tersebut
    foreach ($novay->hobi as $temp) {
        echo '<li>'. $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function(){
    #Mencari Data Hobi Mandi Es
    $mandi_es = Hobi::where('hobi', '=', 'Mandi Es')->first();
    #Menampilkan Seluruh Data Maha Siswa Yang Mempunyai Hobi Mandi Es
    foreach ($mandi_es->mahasiswa as $temp) {
        echo '<li> Nama : '. $temp->nama . '<strong>
        ' . $temp->nim . '</strong></li>';
    }
});

// Siswa
Route::resource('siswa', 'SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('daftarsiswa', 'SiswaController');
Route::get('/tabungan/report', 'TabunganController@jumlah_tabungan');
Route::Resource('tabungan', 'TabunganController');
Route::Resource('hobi', 'HobiController');
