<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
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


    // Handle Withdrawal Request
    public function withdraw(Request $request)
    {
        // Validate the withdrawal amount
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $amount = $request->input('amount'); // Get the withdrawal amount
        $wallet = Wallet::where('user_id', Auth::id())->first();  // Get the user's wallet

        // Check if the wallet has sufficient funds for the withdrawal
        if ($wallet->balance < $amount) {
            return redirect()->route('wallet.show')->withErrors(['amount' => 'Insufficient balance for this withdrawal.']);
        }

        // Deduct the amount from the wallet
        $wallet->balance -= $amount;
        $wallet->save();

        // Create a transaction record for the withdrawal
        Transaction::create([
            'user_id' => Auth::id(),
            'amount' => -$amount,  // Withdrawal is a negative transaction
            'description' => 'Withdrawal from wallet',
            'date' => now(),
        ]);

        // Redirect back to the wallet page with a success message
        return redirect()->route('wallet.show')->with('success', 'Withdrawal successful!');
    }
}
