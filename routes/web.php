<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PianoController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::get('/events', [EventController::class, 'events'])->name('events');

Route::delete('/events', [PostController::class,'delete']);

Route::get('/pianos', [PianoController::class, 'pianos'])->name('pianos');

Route::get('/events/role', [EventController::class, 'events_role'])->name('role');

Route::post('/events/role/piano', [EventController::class, 'events_role_piano']);

//Route::get('/events/listener/piano', [EventController::class, 'nextAction']);

Route::post('/events/role/piano/datetime', [EventController::class, 'events_role_piano_datetime']);

Route::post('/events/confirm', [EventController::class, 'events_confirm']);

//Route::get('/events/listener/{piano}/datetime', [EventController::class, 'events_listener_piano_date']);

Route::get('/recorded', [EventController::class, 'recorded'])->name('record');
Route::post('/recorded', [EventController::class, 'recorded']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
