<?php

use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\KategoriController;

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


Route::middleware('auth', 'checkRole:admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/barang', function () {
        return view('admin.barang', [
            'barang' => Barang::all(),
            'kategori' => Kategori::all(),
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

    Route::controller(KategoriController::class)->group(function () {
        Route::get('/admin/kategori/tambah', 'tambah')->name('admin.addKategori');
        Route::post('/admin/kategori/tambah/action', 'store')->name('admin.storeKategori');
        Route::get('/admin/kategori/edit/{id}', 'edit')->name('admin.editKategori');
        Route::post('/admin/kategori/edit/{id}/action', 'update')->name('admin.updateKategori');
        Route::post('/admin/kategori/delete/{id}/action', 'delete')->name('admin.deleteKategori');
    });

    Route::controller(BarangController::class)->group(function () {
        Route::get('/admin/barang/tambah', 'tambah')->name('admin.addBarang');
        Route::post('/admin/barang/tambah/action', 'store')->name('admin.storeBarang');
        Route::get('/admin/barang/edit/{id}', 'edit')->name('admin.editBarang');
        Route::post('/admin/barang/edit/{id}/action', 'update')->name('admin.updateBarang');
        Route::post('/admin/barang/delete/{id}/action', 'delete')->name('admin.deleteBarang');
    });

    Route::controller(PemasokController::class)->group(function () {
        Route::get('/admin/pemasok/tambah', 'tambah')->name('admin.addPemasok');
        Route::post('/admin/pemasok/tambah/action', 'store')->name('admin.storePemasok');
        Route::get('/admin/pemasok/edit/{id}', 'edit')->name('admin.editPemasok');
        Route::post('/admin/pemasok/edit/{id}/action', 'update')->name('admin.updatePemasok');
        Route::post('/admin/pemasok/delete/{id}/action', 'delete')->name('admin.deletePemasok');
    });
});


Route::middleware('auth', 'checkRole:manager')->group(function () {
    Route::get('/manager/dashboard', function () {
        return view('manager.dashboard');
    })->name('manager.dashboard');
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
});
