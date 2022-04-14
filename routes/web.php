<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

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


Route::get('/tampil_data', [LaporanController::class, 'index'])->name('tampil_data');
Route::get('/tambah_data', [LaporanController::class, 'input'])->name('tambah_data');
Route::get('/ceklist', [LaporanController::class, 'ceklist'])->name('ceklist');