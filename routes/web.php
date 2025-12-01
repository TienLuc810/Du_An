<?php
use App\Http\Controllers\UserController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BookingController;


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

Route::get('/home/', [UserController::class, 'HomePage'])->name('home');
Route::get('/about/', [UserController::class, 'about'])->name('about');
Route::get('/menu/', [UserController::class, 'menu'])->name('menu');

Route::get('/contact/', [UserController::class, 'contact'])->name('contact');
Route::post('/contact/', [UserController::class, 'submite'])->name('contact.submite');

Route::get('/search', [BookingController::class, 'search'])->name('search');


Route::get('/dat-ban/', [BookingController::class, 'ShowForm'])->name('ShowForm');
Route::post('/dat-ban/', [BookingController::class, 'SubmiteForm'])->name('SubmiteForm');

