<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
Route::get('index', function () {
    return view('index');
});
Route::get('users',[UsersController::class,'index'])->name('users.index');

Route::get('dash', function(){
    return view('users.dash');
})->name('users.dash');

Route::get('signin', function(){
    return view('users.signin');
})->name('users.signin');

Route::get('signup', function(){
    return view('users.signup');
})->name('users.signup');

Route::get('index', function(){
    return view('users.index');
})->name('users.index');

Route::delete('users/{id}',[UsersController::class,'destroy'])->name('users.destroy');

