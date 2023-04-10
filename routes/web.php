<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


//PRAKTIKUM P6(AUTENTIFICATION)
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    //PRAKTIKUM 2
    Route::get('/praktikum2', function(){
        return view('layout.template');
    });

   

});
