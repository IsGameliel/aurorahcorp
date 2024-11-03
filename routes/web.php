<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WithdrawalController;


// Home route
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User routes (assuming user actions require authentication)
    Route::middleware('role:user')->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard'); // User dashboard
        Route::get('/plan', [PlanController::class, 'index'])->name('plan');
        Route::post('/plan', [PlanController::class, 'store'])->name('plan.store');
        Route::get('/withdrawal/{plan_id}', [WithdrawalController::class, 'index'])->name('withdrawal');
        Route::post('/withdrawal/{plan_id}', [WithdrawalController::class, 'processWithdrawal'])->name('withdrawal.process');
    });

    // Admin routes (assuming admin actions require authentication and a role check)
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); // Admin dashboard
        Route::get('/admin/users', [AdminController::class, 'indexUsers'])->name('admin.users'); // Admin users management
    });
});

require __DIR__.'/auth.php';
