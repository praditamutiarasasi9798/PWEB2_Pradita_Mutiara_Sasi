<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\Pasien1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;

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

//pasien
Route::resource('/pasien',Pasien1Controller::class);
Route::get('/daftar',[DaftarController::class, 'daftarpasien']);
// Route::get('/pasien', [PasienController::class, 'pas_index']);
// Route::get('/pasien/create', [PasienController::class, 'create']);
// Route::post('/pasien/store', [PasienController::class, 'store']);
// Route::get('/pasien/{no_rm}/edit', [PasienController::class, 'edit']);


Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

route::get('/logout', [ProfileController::class, 'logout']);

require __DIR__.'/auth.php';
