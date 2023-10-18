<!-- /* 
6706220142
RIEFKY AHMAD RAMADHAN
D3IF-4603
*/ -->

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

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



// Route untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk daftar pengguna
Route::get('/user', [\App\Http\Controllers\ProfileController::class, 'index'])->middleware(['auth', 'verified'])->name('user');

// Route untuk show daftar pengguna
Route::get('/userView/{user}', [\App\Http\Controllers\ProfileController::class, 'show'])->middleware(['auth', 'verified'])->name('userView');

// Route untuk daftar koleksi
Route::get('/koleksi', [\App\Http\Controllers\CollectionController::class, 'index'])->middleware(['auth', 'verified'])->name('koleksi');

// Route untuk tambah koleksi
Route::get('/koleksiTambah', [\App\Http\Controllers\CollectionController::class, 'create'])->middleware(['auth', 'verified'])->name('koleksiTambah');

// Route untuk store koleksi
Route::post('/koleksiStore', [\App\Http\Controllers\CollectionController::class, 'store'])->middleware(['auth', 'verified'])->name('koleksiStore');

// Route untuk show koleksi
Route::get('/koleksiView/{collection}', [\App\Http\Controllers\CollectionController::class, 'show'])->middleware(['auth', 'verified'])->name('koleksiView');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();