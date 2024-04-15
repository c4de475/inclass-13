<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cat;
use App\Http\Controllers\CatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionsController;

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

Route::get('/', [CatController::class, 'index']);

// Route::get('/', function () {
    // return view('index', ['cats' => Cat::all()]);
// });

Route::get('/cats/{cat}', function(Cat $cat){
    return view('cat', ['cat' => $cat]);
});

Route::get('/add', [CatController::class, 'create']);

Route::post('/create', [CatController::class, 'store']);

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');

Route::post('/register', [LoginController::class, 'store'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/login', [SessionsController::class, 'login'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/admin', function(){
    return view('admin');
})->middleware('admin');