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
Route::get('/dashboard', 'App\Http\Controllers\menu@index')->name('menu');
Route::get('/menu_list', 'App\Http\Controllers\menu@menus')->name('menu_list');

Route::post('/dashboard', 'App\Http\Controllers\menu@indexpost')->name('indexpost');
Route::get('/main', 'App\Http\Controllers\menu@insertmenu',)->name('insertmenu');




Route::middleware(['auth:sanctum', 'verified'])->get('/menu', 'App\Http\Controllers\menu@index')->name('dashboard');
