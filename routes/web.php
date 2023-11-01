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
Route::get('/events',[EventController::class, 'store']);

Route::get('/events/room',[EventController::class, 'register1']);

Route::get('/events/equip', [EventController::class, 'register2']);

Route::get('/calendar', function () {
    return view('fullcalendar');
});

Route::get('/userpage', function () {
    return view('userpage');
});

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/getevent', 'FullCalendarController@getEvent')->name('getevent');
Route::post('/createevent','FullCalendarController@createEvent')->name('createevent');
Route::post('/deleteevent','FullCalendarController@deleteEvent')->name('deleteevent');

Route::get('/delete', function () {
    return view('delete');
});
