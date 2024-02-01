<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//adding the middleware helps to prevent unauthorized access to the post page. while going to /post it going go on login page if you are not logged in.


Route::middleware('auth')->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');

    Route::get('/dashboard', [DashboardController::class, 'show_post'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
