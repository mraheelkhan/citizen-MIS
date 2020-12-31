<?php

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register10Controller;
use App\Http\Controllers\ApiController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/register-10',[Register10Controller::class,'index'])->name('register10.index');
Route::get('/register-10/create',[Register10Controller::class,'create'])->name("register10.create");
Route::post('/register-10/store',[Register10Controller::class,'store'])->name("register10.store");

Route::prefix('app')->group(function () {
    Route::get('/register10',[ApiController::class,'index'])->name('app.register10.index');
    Route::post('/register10/store',[ApiController::class,'store'])->name("app.register10.store");
});