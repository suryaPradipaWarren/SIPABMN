<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Events\RouteMatched;
use App\Http\Controllers\PeminjamanController;

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
});

Route::prefix('/peminjaman')->group(function() {
    Route::get('/', [PeminjamanController::class, 'index'])->name('bmn.index');
    Route::get('/tambah', [PeminjamanController::class, 'tambah'])->name('bmn.tambah');
    Route::post('/store', [PeminjamanController::class, 'store'])->name('bmn.store');
    Route::get('/edit/{id}', [PeminjamanController::class, 'edit'])->name('bmn.edit');
    Route::put('/update/{id}', [PeminjamanController::class, 'update'])->name('bmn.update');
    Route::post('/destroy/{id}', [PeminjamanController::class, 'destroy'])->name('bmn.destroy');
});

Route::prefix('/barang')->group(function() {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
});
// Route::resource('tabel', barangController::class);
// Route::get('/form', [barangController::class, 'create'])->name('barang.create');

Route::group(['Middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

});

Route::group(['Middleware' => 'auth'], function() {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

});
