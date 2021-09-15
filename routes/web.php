<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MappingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;

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

Route::get('/', [BasicController::class, 'index'])->name('home');
Route::get('/about', [BasicController::class, 'about'])->name('about');

// Auth: Login
Route::get('/login', [LoginController::class, 'index'])->name('login-page')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login-authenticate');
Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');

// Auth: Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register-page');
Route::post('/register', [RegisterController::class, 'store'])->name('register-authenticate');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard/index', ['title' => 'Home', 'content' => 'home']);
})->middleware('auth')->name('dashboard');

Route::resource('/dashboard/students', StudentController::class)->middleware('auth');
Route::resource('/dashboard/transaction', TransactionController::class)->middleware('auth');
// Route::patch('/dashboard/transaction/{transaction}', [TransactionController::class, 'move'])->name('transaction.move')->middleware('auth');
// Route::patch('/dashboard/transaction/{transaction}', [TransactionController::class, 'update'])->name('transaction.update')->middleware('auth');

// Mapping data
Route::get('/dashboard/map', [MappingController::class, 'index'])->name('map.index');
Route::get('/dashhboard/map/list', [MappingController::class, 'getStudents'])->name('mapstudents.list');


Route::get('/dashboard/map/ajaran', [MappingController::class, 'ajaran'])->name('map.ajaran');
Route::get('/dashboard/map/mapel', [MappingController::class, 'mapel'])->name('map.mapel');
