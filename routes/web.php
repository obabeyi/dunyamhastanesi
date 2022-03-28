<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\YonetimController;
use App\Http\Controllers\backend\TibbiKadroController;
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
Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
Route::get('admin/chengepass', [AdminController::class, 'Reset'])->name('reset.password');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

//Yonetim Kadrosu ALL ROUTES
Route::get('yonetimkadrosu', [YonetimController::class, 'index'])->name('yonetim.index');


//TIBBI KADRO ALLROUTES
Route::get('tibbikadro', [TibbiKadroController::class, 'index'])->name('tibbikadro.index');
Route::get('tibbikadro/create', [TibbiKadroController::class, 'create'])->name('tibbikadro.create');
Route::get('tibbikadro/update/{id}', [TibbiKadroController::class, 'update'])->name('tibbikadro.update');
Route::post('tibbikadro/store', [TibbiKadroController::class, 'store'])->name('tibbikadro.store');
Route::get('tibbikadro/delete/{id}', [TibbiKadroController::class, 'destroy'])->name('tibbikadro.destroy');
