<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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

Route::get('/people', [UserController::class, 'index'])->name('users.index');
Route::get('/people/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/people/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/people/{user}', [UserController::class, 'update'])->name('users.update');

require __DIR__.'/auth.php';
