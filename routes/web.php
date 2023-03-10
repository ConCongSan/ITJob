<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('trang-chu');
Route::get('/user_login',[HomeController::class,'login'])->name('user_Login');
Route::post('/user_login',[HomeController::class,'handle_login'])->name('.handle-Login');

Route::get('/user_register',[HomeController::class,'register'])->name('user_Register');
Route::post('/user_register',[HomeController::class,'handle_register'])->name('.handle-Register');

Route::get('/login-google/{provider}',[HomeController::class,'redirect_Google'])->name('LoginGoogle');
Route::get('/callback/{provider}',[HomeController::class,'callback_Google'])->name('Callback');

Route::get('/chinh-sach-quyen-rieng-tu', function(){
    return '<h1> Chính sách quyền riêng tư </h1>';
});
Route::get('/login-facebook/{provider}',[HomeController::class,'redirect_Facebook'])->name('LoginFacebook');
Route::get('/callback-facebook/{provider}',[HomeController::class,'callback_Facebook'])->name('CallbackFacebook');
