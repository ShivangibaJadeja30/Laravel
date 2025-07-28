<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/home', function () {
    return 'welcome';
});

Route::get('/add',[FormController::class,'create'])->name('add');
Route::get('/list',[FormController::class,'index'])->name('list');
Route::post('/store',[FormController::class,'store'])->name('store');
