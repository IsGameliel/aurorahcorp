<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;



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
        Route::post('/plan/withdraw', [PlanController::class, 'withdraw'])->name('plan.withdraw');
        Route::get('/plan/withdraw/{plan_id}', [PlanController::class, 'withdrawIndex'])->name('withdrawal.index');

        // wallet
        Route::get('/wallet', [WalletController::class, 'show'])->name('wallet.show');
        Route::get('/wallet/add-funds', [WalletController::class, 'showAddFundsForm'])->name('wallet.addFundsForm');
        Route::post('/wallet/add-funds', [WalletController::class, 'addFunds'])->name('wallet.addFunds.store');
        Route::post('/wallet/withdraw', [WalletController::class, 'withdraw'])->name('wallet.withdrawFunds');

        // Transactions
        Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
        Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
    });

    // Admin routes (assuming admin actions require authentication and a role check)
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); // Admin dashboard
        Route::get('/admin/users', [AdminController::class, 'indexUsers'])->name('admin.users'); // Admin users management
    });
});

require __DIR__.'/auth.php';
