<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\destinationController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\packageController;
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

Route::get('/Discovery',[indexController::class, 'index'])->name('Discovery');
Route::get('/Destination',[destinationController::class, 'index'])->name('Destination');
Route::get('/Package',[packageController::class,'index'])->name('Package');
Route::get('/About', [aboutController::class,'index'])->name('About');

Route::get('/Login', [loginController::class, 'index'])->name('Login');
Route::post('/process-login',[loginController::class,'login']) -> name('process-login');

Route::prefix('admin')->middleware('isLogin')->group(function(){
    Route::get('/home', [loginController::class,'index'])->name('Discover');

    Route::get('/AdminGallery', [AdminGallery::class, 'AdminGallery'])->name('AdminGallery');
    Route::get('/AdminController', [AdminCollection::class,'AdminCollection'])->name('AdminCollection');

});