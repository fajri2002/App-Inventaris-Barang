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

    Route::get('/listBarang', function () {
        return view('list-barang');
    });

    Route::post('/add-ruang', [App\Http\Controllers\RuangController::class, 'create'])->name('add-ruang');

    Route::get('/listRuang', [App\Http\Controllers\RuangController::class, 'index'])->name('listRuang');

    Route::get('/tambahRuang', function () {
        return view('tambah-ruang');
    });

    Route::get('/tambahBarang', function () {
        return view('tambah-barang');
    });
});
