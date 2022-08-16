<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

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
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/user/create',[UserController::class, 'create']);
Route::get('/flight',[FlightController::class, 'index']);
Route::get('/flight/{flight}/book',[FlightController::class, 'show']);
Route::post('/ticket/create',[TicketController::class, 'create']);
Route::get('/ticket',[TicketController::class, 'index']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/user/login',[UserController::class, 'login']);