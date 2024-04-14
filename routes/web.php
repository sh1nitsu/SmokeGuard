<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TempController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/add-contacts', [ContactsController::class, 'add'])->name('add-contacts');
Route::get('/add-room', [TempController::class, 'add'])->name('add-room');
Route::post('/add-room', [TempController::class, 'store'])->name('room.store');
Route::post('/contacts', [ContactsController::class, 'store'])->name('store');

Route::get('/emergency', [EmergencyController::class, 'index'])->name('emergency');
Route::get('/emergency-call', [EmergencyController::class, 'call'])->name('emergency-call');
Route::get('/temperature', [TempController::class, 'index'])->name('temperature');
Route::get('/kitchen-temp', [TempController::class, 'temp'])->name('kitchen-temp');
Route::get('/kitchen-smoke', [TempController::class, 'smoke'])->name('kitchen-smokoe');




require __DIR__.'/auth.php';
