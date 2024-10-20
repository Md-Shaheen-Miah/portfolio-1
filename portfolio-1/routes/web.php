<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('master-pages.home');
});
Route::get('/master', function () {
    return view('master');
});


Route::get('/home', function () {
    return view('master-pages.home');
});
Route::get('/about', function () {
    return view('master-pages.about');
});

Route::get('/contact', function () {
    return view('master-pages.contact');
});

Route::get('/skill', function () {
    return view('master-pages.skill');
});

Route::get('/service', function () {
    return view('master-pages.service');
});

Route::get('/project', function () {
    return view('master-pages.project');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


