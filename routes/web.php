<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Requests;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users','UsersController', ['except' => ['show','create','store']]);
});

Route::get('/events/create','EventController@create')->name('events.create');
Route::get('/events/{event}','EventController@show')->name('events.show');
Route::get('/events/show/{event}/edit','EventController@accept')->name('events.accept');
Route::post('/events/show/{event}','EventController@acceptConfirm')->name('events.acceptConfirm');
Route::resource('/events','EventController');
// Route::resource('events','App\Http\Controllers\EventController');

Route::get('/requestEvent/viewRequest','RequestController@viewRequest')->name('requestEvent.viewRequest');
Route::resource('/requestEvent','RequestController', ['parameters' => [
    'requestEvent' => 'event'
]]);

Route::namespace('Staff')->prefix('staff')->name('staff.')->group(function(){
    Route::resource('/users','UsersController', ['except' => ['show','create','store']]);
});
// Route::get('/events',[EventController::class, 'index']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
