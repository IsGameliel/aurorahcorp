<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;


class WalletController extends Controller
{
    // Show the Wallet Dashboard (Wallet Overview)
    public function show()
    {
        $wallet = Wallet::where('user_id', Auth::id())->first();  // Get the authenticated user's wallet
        $transactions = Transaction::where('user_id', Auth::id())  // Get the recent transactions for the user
                                    ->orderBy('created_at', 'desc')
                                    ->take(5)
                                    ->get();

        return view('wallet.dashboard', compact('wallet', 'transactions'));
    }

    // Show Add Funds Form
    public function showAddFundsForm()
    {
        return view('wallet.addFunds');  // Return a view to display the form for adding funds
    }

    // Handle Add Funds Request

    public function addFunds(Request $request)
    {
        // Validate the amount input
        $request->validate([
            'amount' => 'required|numeric|min:1', // Ensure a positive amount
        ]);

        $amount = $request->input('amount');

        // Get the authenticated user's wallet
        $wallet = Wallet::firstOrCreate(
            ['user_id' => Auth::id()],
            ['balance' => 0]
        );

        // Update wallet balance
        $wallet->balance += $amount;
        $wallet->save();

        // Record the transaction (ensure 'type' is included)
        Transaction::create([
            'user_id' => Auth::id(),
            'amount' => $amount,
            'description' => 'Funds added to wallet',
            'type' => 'credit',  // Type can be 'credit' for adding funds
            'date' => now(),
        ]);

        // Redirect back with a success message
        return redirect()->route('wallet.show')->with('success', 'Funds added successfully!');
    }


    public function withdrawFundsForm(){
        return view('wallet.withdrawFunds');
    }

    // Handle Withdrawal Request
    public function withdraw(Request $request)
    {
        // Validate the withdrawal amount and bank details
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:20',
            'account_name' => 'required|string|max:255',
        ]);

        $amount = $request->input('amount');
        $wallet = Wallet::where('user_id', Auth::id())->first();

        // Check if the wallet has sufficient funds
        if ($wallet->balance < $amount) {
            return redirect()->back()->withErrors(['amount' => 'Insufficient balance for this withdrawal.']);
        }

        // Deduct the amount from the wallet balance
        $wallet->balance -= $amount;
        $wallet->save();

        // Store bank details in the database if necessary (e.g., in a 'transactions' table)
        Transaction::create([
            'user_id' => Auth::id(),
            'amount' => -$amount,
            'description' => 'Withdrawal to bank',
            'bank_name' => $request->input('bank_name'),
            'account_number' => $request->input('account_number'),
            'account_name' => $request->input('account_name'),
            'date' => now(),
        ]);

        return redirect()->route('wallet.show')->with('success', 'Withdrawal request submitted successfully!');
    }


    // Admin: Update any user's wallet balance

    public function editWallet($userId)
    {
        $user = User::findOrFail($userId);
        // $wallet = Wallet::where('user_id', $userId)->firstOrFail();

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            ['balance' => 0] // Initialize balance to 0 if wallet does not exist
        );

        // Pass the user and wallet data to the view
        return view('admin.users.edit-wallet', compact('user', 'wallet'));
    }



    public function updateWalletBalance(Request $request, $userId)
    {
        // Validate the balance input
        $request->validate([
            'balance' => 'required|numeric|min:0',
        ]);

        // Find the user's wallet or create if not exists
        $wallet = Wallet::firstOrCreate(
            ['user_id' => $userId],
            ['balance' => 0]
        );

        // Update the wallet balance
        $wallet->balance = $request->input('balance');
        $wallet->save();

        return redirect()->route('admin.dashboard')->with('success', 'Wallet balance updated successfully.');
    }
}
