<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/listBarang', [App\Http\Controllers\BarangController::class, 'index'])->name('listBarang');

    Route::post('/add-ruang', [App\Http\Controllers\RuangController::class, 'create'])->name('add-ruang');

    Route::get('/listRuang', [App\Http\Controllers\RuangController::class, 'index'])->name('listRuang');

    Route::get('/tambahRuang', function () {
        return view('tambah-ruang');
    });

    Route::get('/tambahBarang', [App\Http\Controllers\BarangController::class, 'create'])->name('createBarang');

    Route::post('/add-barang', [App\Http\Controllers\BarangController::class, 'post'])->name('add-barang');

    Route::get('/editRuang/{id}', [App\Http\Controllers\RuangController::class, 'edit'])->name('editRuang');

    Route::post('/updateRuang/{id}', [App\Http\Controllers\RuangController::class, 'update'])->name('update-ruang');

    Route::get('/editBarang/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('editBarang');

    Route::post('/updateBarang/{id}', [App\Http\Controllers\BarangController::class, 'update'])->name('update-barang');
    
    Route::get('/deleteRuang/{id}', [App\Http\Controllers\RuangController::class, 'delete'])->name('deleteRuang');

    Route::get('/deleteBarang/{id}', [App\Http\Controllers\BarangController::class, 'delete'])->name('deleteBarang');


});
