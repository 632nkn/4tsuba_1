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

Route::get('/test', function () {
    return view('test');
});


//breezeによるログイン関係
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//threads
Route::get('/threads', 'App\Http\Controllers\ThreadController@index');
Route::get('/threads/create', 'App\Http\Controllers\ThreadController@create')->name('thread_create');;
Route::post('/threads/store', 'App\Http\Controllers\ThreadController@store')->name('thread_store');
