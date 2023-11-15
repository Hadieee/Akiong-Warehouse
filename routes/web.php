<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pemasok;

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
    return view('home', ['title' => 'Welcome to Akiong Warehouse']);
});


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');


// Route::middleware('auth')->group(function () {
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.daspemasokhboard');
Route::get('/admin/barang', function () {
    return view('admin.barang', [
        'barang' => Barang::all(),
    ]);
})->name('admin.barang');
Route::get('/admin/pemasok', function () {
    return view('admin.pemasok', [
        'pemasok' => Pemasok::all(),
    ]);
})->name('admin.pemasok');
Route::get('/admin/kategori', function () {
    return view('admin.kategori', [
        'kategori' => Kategori::all(),
    ]);
})->name('admin.kategori');

Route::get('/manager/dashboard', function () {
    return view('manager.dashboard');
})->name('manager.daspemasokhboard');
Route::get('/manager/barang', function () {
    return view('manager.barang', [
        'barang' => Barang::all(),
    ]);
})->name('manager.barang');
Route::get('/manager/pemasok', function () {
    return view('manager.pemasok', [
        'pemasok' => Pemasok::all(),
    ]);
})->name('manager.pemasok');
Route::get('/manager/kategori', function () {
    return view('manager.kategori', [
        'kategori' => Kategori::all()
    ]);
})->name('manager.kategori');
// });
