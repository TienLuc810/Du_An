<?php
use App\Http\Controllers\UserController;
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

Route::get('xin-chao', function () {
    // return view('welcome');
    echo "xin chao";
});

Route::get('/', [UserController::class, 'show']);
route::get('/register',[UserController::class,'show_2']);
route::get('/login',[UserController::class,'show_3']);
