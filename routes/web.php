<?php

use App\Http\Controllers\dashboardChartcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\dashboardhasilController;
use App\Http\Controllers\dashMapsController;
use App\Http\Controllers\HasilsurveiController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\nanyaluarController;
use App\Http\Controllers\PertanyaannyaController;
use App\Http\Controllers\tanyaluar;
use App\Http\Controllers\tanyaluarController;
use App\Models\pertanyaannya;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('survei');
});
Route::get('/',[MapsController::class, 'index']);

// suervei luar
// Route::resource('/', tanyaluarController::class);
// Route::post('/survei',[PertanyaannyaController::class,]);
Route::get('/jawab',[nanyaluarController::class, 'index'])->name('index');
Route::get('/jawab',[nanyaluarController::class, 'create']);
Route::post('/jawab',[nanyaluarController::class, 'store'])->name('store');
// Route::get('/luar/jawab',[nanyaluarController::class, 'index']);
// Route::get('/luar/jawab',[nanyaluarController::class, 'create']);
// Route::post('luar/jawab/store',[nanyaluarController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

        // dashboard utama
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard',[dashboardChartcontroller::class, 'index'])->name('dashboard');

    Route::resource('/dashboard/tanya', PertanyaannyaController::class);
    Route::get('/dashboard/tanya',[PertanyaannyaController::class, 'index']);
    Route::get('/dashboard/tanya/edit/{id}',[PertanyaannyaController::class, 'edit']);
    Route::post('/dashboard/tanya/{id}',[PertanyaannyaController::class, 'update']);
    
    // hasil survei di dashboard
    Route::get('/dashboard/hasil/exportdata', [dashboardhasilController::class, 'exportsurvei']);
    Route::resource('/dashboard/hasil', dashboardhasilController::class);
    Route::get('/dashboard/hasil',[dashboardhasilController::class, 'index']);
    Route::get('/dashboard/hasil/show/{id}',[dashboardhasilController::class, 'show']);
    
    
    // edit google maps  diluar
    Route::resource('/dashboard/alamat', dashMapsController::class);
    Route::get('/dashboard/alamat',[dashMapsController::class, 'index']);
    Route::get('/dashboard/alamat/edit/{id}',[dashMapsController::class, 'edit']);
    Route::post('/dashboard/alamat/{id}',[dashMapsController::class, 'update']);

});

