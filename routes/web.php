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

    Route::controller(BarangController::class)->group(function () {
        Route::get('/admin/barang','index')->name('admin.barang');
        Route::get('/admin/barang/tambah', 'tambah')->name('admin.addBarang');
        Route::post('/admin/barang/tambah/action', 'store')->name('admin.storeBarang');
        Route::get('/admin/barang/edit/{id}', 'edit')->name('admin.editBarang');
        Route::post('/admin/barang/edit/{id}/action', 'update')->name('admin.updateBarang');
        Route::post('/admin/barang/delete/{id}/action', 'delete')->name('admin.deleteBarang');
    });
});


Route::middleware('auth', 'checkRole:manager')->group(function () {
    Route::get('/manager/dashboard', function () {
        return view('manager.dashboard');
    })->name('manager.dashboard');
    Route::get('/manager/barang', function () {
        return view('manager.barang', [
            'barang' => Barang::all(),
            'kategori' => Kategori::all(),
            'pemasok' => Pemasok::all(),
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

    Route::controller(KategoriController::class)->group(function () {
        Route::get('/manager/kategori/tambah', 'tambah')->name('manager.addKategori');
        Route::post('/manager/kategori/tambah/action', 'store')->name('manager.storeKategori');
        Route::get('/manager/kategori/edit/{id}', 'edit')->name('manager.editKategori');
        Route::post('/manager/kategori/edit/{id}/action', 'update')->name('manager.updateKategori');
        Route::post('/manager/kategori/delete/{id}/action', 'delete')->name('manager.deleteKategori');
        Route::get('/manager/kategori/download_excel', 'download_excel')->name('manager.downloadDataKategori');
    });

    Route::controller(PemasokController::class)->group(function () {
        Route::get('/manager/pemasok/tambah', 'tambah')->name('manager.addPemasok');
        Route::post('/manager/pemasok/tambah/action', 'store')->name('manager.storePemasok');
        Route::get('/manager/pemasok/edit/{id}', 'edit')->name('manager.editPemasok');
        Route::post('/manager/pemasok/edit/{id}/action', 'update')->name('manager.updatePemasok');
        Route::post('/manager/pemasok/delete/{id}/action', 'delete')->name('manager.deletePemasok');
        Route::get('/manager/pemasok/download_excel', 'download_excel')->name('manager.downloadDataPemasok');
    });

    Route::controller(BarangController::class)->group(function () {
        Route::get('/manager/barang','index')->name('manager.barang');
        Route::get('/manager/barang/download_excel', 'download_excel')->name('manager.downloadDataBarang');
    });
});
