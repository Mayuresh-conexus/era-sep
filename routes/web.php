<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AlumniAuthController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('frontend/home', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('frontend.index');
});



<<<<<<< Updated upstream
//Events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

//Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/gallery/{gallery}', [GalleryController::class, 'show'])->name('galleries.show');
=======
Route::get('/ourstory', function () {
    return view('frontend.ourstory');
});

Route::get('/event', function () {
    return view('frontend.event');
});

Route::get('/programs', function () {
    return view('frontend.programs');
});

Route::get('/throwback', function () {
    return view('frontend.throwback');
});

Route::get('/get-involved', function () {
    return view('frontend.get-involved');
});

>>>>>>> Stashed changes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/alumni/login', [AlumniAuthController::class, 'showLoginForm'])->name('alumni.login');
Route::post('/alumni/login', [AlumniAuthController::class, 'login']);
Route::post('/alumni/logout', [AlumniAuthController::class, 'logout'])->name('alumni.logout');

Route::middleware('auth:alumni')->group(function () {
    Route::get('/alumni/dashboard', fn() => view('alumni.dashboard'));
});


require __DIR__.'/auth.php';
