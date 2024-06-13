<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\ReviewController;
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
// Rotta per la homepage
Route::get('/', [HomeController::class, 'index'])->name('home');
// Rotte per l'area amministrativa
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('rooms', RoomController::class); // Rotte per la gestione delle stanze
    Route::resource('movies', MovieController::class);
    Route::resource('reviews', ReviewController::class);


});
// Rotte per il profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Rotta per la gestione dell'autenticazione (ad esempio, login, registrazione, ecc.)
require __DIR__ . '/auth.php';
// Rotta fallback per redirigere gli utenti non autorizzati
Route::fallback(function () {
    return redirect()->route('admin.dashboard');
});