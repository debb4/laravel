<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\halocontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\login;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/home', [homecontroller::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [homecontroller::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [homecontroller::class, 'register']);

Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');
// Route::get('/dashnoard', [dashboardcontroller::class, 'dataUser'])->name('data-user');

Route::get('/dashboard/create', [dashboardcontroller::class, 'create'])->name('user.create');
Route::PUT('/dashboard/store', [dashboardcontroller::class, 'store'])->name('user.store');

Route::get('dashboard/edit/{id}', [dashboardcontroller::class, 'edit'])->name('user.edit');
Route::PUT('dashboard/update/{id}', [dashboardcontroller::class, 'update'])->name('user.update');

Route::get('dashboard/delete/{id}', [dashboardcontroller::class, 'destroy'])->name('user.delete');
