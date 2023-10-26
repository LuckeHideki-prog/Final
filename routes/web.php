<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class,'index']);
Route::get('/events/create',[EventController::class, 'create']);

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/userpage', function () {
    return view('userpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/equip', function () {
    return view('equip');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/calendar', 'CalendarController@index');

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

