<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VastgoedController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Vastgoed links
Route::name("vastgoed.")->group(function(){
    
    Route::prefix("vastgoed")->group(function(){        
        Route::get('/',                 [VastgoedController::class, 'index'])->name('index');
        Route::get('/create',           [VastgoedController::class, 'create'])->middleware(IsAdminMiddleware::class)->name('create');
        Route::post('/',                [VastgoedController::class, 'store'])->name('store');    
        Route::get('/edit/{vastgoed}',  [VastgoedController::class, 'edit'])->middleware(IsAdminMiddleware::class)->name('edit');
        Route::put('/update/{vastgoed}',[VastgoedController::class, 'update'])->name('update'); // Fixed to use PUT
        Route::delete('/{vastgoed}',    [VastgoedController::class, 'destroy'])->middleware(IsAdminMiddleware::class)->name('destroy');
    });
});



require __DIR__.'/auth.php';    
