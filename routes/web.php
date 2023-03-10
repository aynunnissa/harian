<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;

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


Route::prefix('admin')->group(function() {
    Route::resource('users', UserController::class);
    Route::resource('kelas', KelasController::class);

    // Route::get('/', function () {
    //     return view('admin.home');
    // });
    // Route::get('/kelas', function () {
    //     return view('admin.kelas.list-kelas');
    // });
    // Route::get('/kelas/create', function () {
    //     return view('admin.kelas.create-kelas');
    // });
});
