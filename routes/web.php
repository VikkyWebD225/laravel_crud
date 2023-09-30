<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usermgt;

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
//login and Registration,logout, and redirect to dashboard Routes
Route::get('/login', [Usermgt::class, 'login'])->name('login');
Route::post('login-User', [Usermgt::class, 'loginuser'])->name('login-User');
Route::get('/Register', [Usermgt::class, 'register'])->name('Register');
Route::post('/register-User', [Usermgt::class, 'registeruser'])->name('register-User');

Route::get('/Dashboard', [Usermgt::class, 'dashboard'])->name('Dashboard');

Route::get('/Logout', [Usermgt::class, 'logout'])->name('Logout');

//Routes for CRUD Applications

Route::get('/stdpage', [Usermgt::class, 'studentpage']);
// Route::post('/created', [Usermgt::class, 'creates'])->name('created');
Route::post('/created', [Usermgt::class, 'creates'])->name('created');