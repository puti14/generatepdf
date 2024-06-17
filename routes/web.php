<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::resource('/posts', PostController::class);

Route::get('/view', [PostController::class, 'view'])->name('posts.view');
Route::get('/edit', [PostController::class, 'view'])->name('posts.edit');
Route::get('/login', [PostController::class, 'view'])->name('posts.login');
