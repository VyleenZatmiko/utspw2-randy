<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/', function () {
    return view('auth/register');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(DivisiController::class)->prefix('divisi')->group(function () {
        Route::get('', 'index')->name('divisi');
        Route::get('create', 'create')->name('divisi.create');
        Route::post('store', 'store')->name('divisi.store');
        Route::get('show/{id}', 'show')->name('divisi.show');
        Route::get('edit/{id}', 'edit')->name('divisi.edit');
        Route::put('edit/{id}', 'update')->name('divisi.update');
        Route::delete('destroy/{id}', 'destroy')->name('divisi.destroy');
    });
 
    Route::controller(KaryawanController::class)->prefix('karyawan')->group(function () {
        Route::get('', 'index')->name('karyawan');
        Route::get('create', 'create')->name('karyawan.create');
        Route::post('store', 'store')->name('karyawan.store');
        Route::get('show/{id}', 'show')->name('karyawan.show');
        Route::get('edit/{id}', 'edit')->name('karyawan.edit');
        Route::put('edit/{id}', 'update')->name('karyawan.update');
        Route::delete('destroy/{id}', 'destroy')->name('karyawan.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});