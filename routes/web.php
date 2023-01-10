<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/about',[FrontendController::class, 'about'])->name('about');
Route::get('/class',[FrontendController::class, 'classes'])->name('class');
Route::get('/team',[FrontendController::class, 'team'])->name('team');
Route::get('/contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('/blog',[FrontendController::class, 'blog'])->name('blog');
Route::get('/detail',[FrontendController::class, 'detail'])->name('detail');
Route::get('/testimony',[FrontendController::class, 'testimony'])->name('testimony');
Route::get('/register',[FrontendController::class, 'register'])->name('register');
Route::get('/login',[FrontendController::class, 'login'])->name('login');
Route::get('/post',[FrontendController::class, 'getAllPost'])->name('post');
  