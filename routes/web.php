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

// Route::get('/', function () {
//     return view('userlist');
//     // return view('layouts/app');
// });

Route::get('/',[UserController::class ,'index'])->name('registration');
Route::get('userlist',[UserController::class ,'userListView'])->name('userlist');
Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
