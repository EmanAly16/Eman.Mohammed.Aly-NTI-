<?php

use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\MessageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('message',[MessageController::class,'print']);
Route::prefix('users')->controller(UsersController::class)->name('users.')->group(function(){
    Route::get('/login','login')->name('login');
    Route::get('register','register')->name('register');
    Route::get('/logout','logout')->name('logout');
    Route::get('/all-users','allUsers')->name('all');

});

