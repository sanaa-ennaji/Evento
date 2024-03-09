<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/evento' , function()
    {
        return view('client.events');
    });

    Route::get('/test' , function()
    {
        return view('test');
    });

    Route::get('/register' , function()
    {
        return view('register');
    });

    Route::get('/admin/category' , function()
    {
        return view('admin.categories');
    });
    
    Route::get('/creator/event' , function()
    {
        return view('creator.event');
    });

    Route::get('/admin/events' , function()
    {
        return view('admin.events');
    });

Route::post('/Register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/createCategory', [CategoryController::class, 'createCategory']);

Route::get('/creator/event', [CategoryController::class, 'showCategory']);
Route::post('/createEvent', [EventController::class, 'ctreateEvent']);
Route::get('/admin/events', [EventController::class, 'showEventAdmin']);
Route::put('/accepte/event/{id}', [EventController::class, 'accepteEvent']);
Route::get('/evento', [EventController::class, 'displayEvent']);
Route::get('/eventDetails/{id}', [EventController::class, 'showDetails'])->name('event.show');
