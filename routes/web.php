<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaConttoller;
use App\Http\Controllers\SelectUserController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::post('/idea', [IdeaConttoller::class, 'store'])->name('idea.create');


Route::get('/user', [UserController::class, 'index']);
Route::get('/test', [SelectUserController::class, 'index'])->name('user');
// Route::get('/home',function(){
//     return view('home');
// });

Route::view('/home', 'home');
