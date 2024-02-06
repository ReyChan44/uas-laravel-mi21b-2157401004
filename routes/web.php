<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sedang', [sedangController::class. 'sedang']);
Route::get('/pendaftaran', [pendaftaranController::class, 'pendaftaran']);
Route::get('/login', [loginController::class, 'login']);
Route::get('/Home', [HomeController::class, 'Home']);
