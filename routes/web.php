<?php

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

Route::get('/text', function () {
    return view('text');
});


Route::get('/l', function () {
    return view('auth/l');
});

Route::get('/re', function () {
    return view('auth/re');
});

Route::get('/f', function () {
    return view('auth/f');
});



// Route::get('/dashboard/users', [
//     'as' => '/dashboard/users',
//     'uses' => 'App\Http\Controllers\UsersController',
// ]);

Route::resource('/dashboard/users', 'App\Http\Controllers\UsersController');
Route::resource('/dashboard/blog', 'App\Http\Controllers\BlogController');
Route::resource('/dashboard/roles', 'App\Http\Controllers\RolesController');
Route::resource('/dashboard/permission', 'App\Http\Controllers\PermissionController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
