<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Users;
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

Route::group(['middleware' => 'auth'] , function() {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');;

    Route::get('/Users' , [UserController::class, 'Users' ] )->name('Users');
    Route::resource('categories' , CategoryController::class)->middleware('Admin');

    Route::resource('posts' , PostController::class);


});

Route::get('/', function () {
    return view('welcome');
});



require __DIR__.'/auth.php';

