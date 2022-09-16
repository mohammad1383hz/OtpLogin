<?php

use App\Packages\Otp\Src\Http\Controllers\OtpController;
use Illuminate\Support\Facades\Route;
use App\Packages\Otp\Src\OtpLoginlarvel;
// use App\Packages\Otp\Src\OtpLoginlarvel;
// use Packages\Otp\Src\OtpLogin;

// use packages\otp\OtpLoginLaravel;

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

Route::get('/register', [OtpController::class,'register']);
Route::post('/validateregister', [OtpController::class,'registerpost'])->name('register');

Route::get('/login', [OtpController::class,'login']);
Route::post('/validatelogin', [OtpController::class,'loginpost'])->name('login');

Route::post('/otp', [OtpController::class,'otp.post'])->name('otp');
// Route::get('/', [OtpController::class,'']);

