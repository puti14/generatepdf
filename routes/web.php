<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;


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
// Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Route::resource('posts', PostController::class);

// Rute untuk halaman statis (sebenarnya tidak perlu jika menggunakan resource controller)
Route::middleware('auth')->group(function () {
    Route::get("/", [PostController::class, "index"])->name("home");
    Route::get("/home", [PostController::class, "index"])->name("home");
    Route::post("/logout", [ProfileController::class, "logout"])->name("logout");
    Route::resource('/posts', PostController::class);
    Route::get('/view/{post}', [PostController::class, 'view'])->name('posts.view');
    Route::get('/add', [PostController::class, 'add'])->name('posts.add');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/login', [PostController::class, 'login'])->name('posts.login');
    Route::get('/pdf', [PostController::class, 'generatePDF'])->name('posts.pdf');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [ProfileController::class, 'registerForm'])->name("profile.register");
    Route::post('/register', [ProfileController::class, 'register'])->name("profile.register");
    Route::get('/login', [ProfileController::class, 'loginform'])->name("login");
    Route::post('/login', [ProfileController::class, 'login'])->name("login");
});
