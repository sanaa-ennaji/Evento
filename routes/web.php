<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservationController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
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
    
    Route::get('/creator/reservations' , function()
    {
        return view('creator.reservations');
    });

    Route::get('/client/reservation' , function()
    {
        return view('client.reservation');
    });

    Route::get('/admin/statistique' , function()
    {
        return view('admin.statistique');
    });
    Route::get('/creator/statistique' , function()
    {
        return view('creator.statistique');
    });

    Route::get('/client/ticket' , function()
    {
        return view('client.ticket');
    });

  
Route::post('/Register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/createCategory', [CategoryController::class, 'createCategory']);
Route::get('/admin/category', [CategoryController::class, 'showCategory']);
Route::get('/evento', [CategoryController::class, 'showCategory']);
Route::put('/updateCategory/{id}',[CategoryController::class ,'updateCategory']);
Route::delete('/deleteCategory/{category}',[CategoryController::class , 'deleteCategory']);

Route::get('/admin/users', [UserController::class, 'showUsers']);
Route::put('/updateUser/{id}',[UserController::class ,'updateuserstatus']);


Route::post('/createEvent', [EventController::class, 'ctreateEvent']);
Route::get('/admin/events', [EventController::class, 'showEventAdmin']);
Route::put('/accepte/event/{id}', [EventController::class, 'accepteEvent']);
Route::put('/approvement/{id}', [EventController::class, 'approvementType']);
Route::get('/evento', [EventController::class, 'displayEvent'])->name('events.display');

Route::get('/client/reservation', [ReservationController::class ,'showReservation']);
Route::get('/creator/reservations', [EventController::class ,'showReservationsForUserEvents']);
Route::get('/eventDetails/{id}', [EventController::class ,'showDetails'])->name('event.details');
Route::post('/createReservation',[ReservationController::class ,'ctreateReservation'])->name('create.reservation');
Route::put('/accepte/reservation/{id}',[ReservationController::class ,'accepteReservation']);

Route::get('/creator/event', [EventController::class, 'showCategoryAndEvents']);
Route::delete('/delete/{event}',[EventController::class , 'deleteEvent']);
Route::get('/search',[eventController::class , 'search']);

Route::get('/creator/statistique', [UserController::class, 'userStatistics'])->name('user.statistics');
Route::get('/admin/statistique', [UserController::class, 'statistics']);

Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('password.forget');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');

Route::get('/ticket/{id}', [ReservationController::class ,'showticket'])->name('ticket.details');