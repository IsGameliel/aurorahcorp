<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\AdminUserController;




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
        Route::get('/wallet/withdraw-funds', [WalletController::class, 'withdrawFundsForm'])->name('wallet.withdrawFundsForm');
        Route::get('/wallet/add-funds', [WalletController::class, 'showAddFundsForm'])->name('wallet.addFundsForm');
        Route::post('/wallet/add-funds', [WalletController::class, 'addFunds'])->name('wallet.addFunds.store');
        Route::post('/wallet/withdraw', [WalletController::class, 'withdraw'])->name('wallet.withdrawFunds');

        // Transactions
        Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
        Route::get('/transactions/{transaction}', [TransactionController::class, 'show'])->name('transactions.show');
    });

    // Admin routes (assuming admin actions require authentication and a role check)
    Route::middleware('auth', 'role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard'); // Admin dashboard

        Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

        // Routes for editing and updating the user's wallet balance
        Route::get('/admin/users/{userId}/edit-wallet', [WalletController::class, 'editWallet'])->name('admin.users.edit.wallet');
        Route::put('/admin/users/{userId}/update-wallet', [WalletController::class, 'updateWalletBalance'])->name('admin.users.update.wallet');
    });

});

require __DIR__.'/auth.php';
