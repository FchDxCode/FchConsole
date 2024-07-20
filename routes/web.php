<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('product', function () {
    return view('product-details');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('Vlogin');
})->name('login');

Route::get('register', function () {
    return view('Vregister');
});


//Route berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::post('berita/tambah', [BeritaController::class, 'tambah']);
Route::post('berita/hapus', [BeritaController::class, 'hapus']);
Route::post('berita/edit', [BeritaController::class, 'edit']);

//route buat kontak
Route::get('kontak',[KontakController::class, 'index']);
Route::post('kontak/tambah',[KontakController::class,'tambah']);
Route::post('kontak/hapus',[KontakController::class,'hapus']);
Route::post('kontak/edit',[KontakController::class,'edit']);

//router buat profile
Route::get('profile',[ProfileController::class, 'index']);
Route::post('profile/tambah',[ProfileController::class,'tambah']);
Route::post('profile/hapus',[ProfileController::class,'hapus']);
Route::post('profile/edit',[ProfileController::class,'edit']);

//router buat game
Route::get('game',[GameController::class, 'index']);
Route::post('game/tambah',[GameController::class,'tambah']);
Route::post('game/hapus',[GameController::class,'hapus']);
Route::post('game/edit',[GameController::class,'edit']);

//router register
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//Routes login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

//routes logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





