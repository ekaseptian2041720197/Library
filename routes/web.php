<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\BController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriC;

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
// FRONT
Route::get('/', function () {
    return view('index',[
        'title' => 'home'
    ]);
});
Route::get('/bukuHome', [BController::class, 'index']);

// Login - Logout
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/registeradmin', [RegisterController::class, 'storeadmin']);
Route::post('/registeruser', [RegisterController::class, 'storeuser']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// Admin - Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Admin - Admin
Route::resource('admin', AdminController::class)->middleware('auth');
Route::post('/resetpassword/{id}', [AdminController::class, 'reset'])->middleware('auth');

// Admin - User
Route::resource('useradmin', UserAdminController::class)->middleware('auth');
Route::post('/resetpassworduser/{id}', [UserAdminController::class, 'reset'])->middleware('auth');

// User
Route::resource('user', UserController::class)->middleware('auth');

//buku
Route::resource('/buku', BukuController::class);

//kategori
Route::resource('/kategori', KategoriC::class);

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});