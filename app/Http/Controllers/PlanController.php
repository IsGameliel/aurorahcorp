<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Wallet;
use App\Models\Transaction;


class PlanController extends Controller
{
    public function index(){
        $user = Auth::user();  // Retrieve the authenticated user
        return view('plan', compact('user'));  // Pass the user to the 'plan' view
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'payment_method' => 'required|string',
            'plan' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        // Create a new plan for the authenticated user
        Plan::create([
            'user_id' => Auth::id(),  // Associate the plan with the authenticated user
            'payment_method' => $request->payment_method,  // Store the payment method
            'plan' => $request->plan,  // Store the plan type
            'cardHolder_name' => Auth::user()->name,  // Store the cardholder name (from the authenticated user)
            'amount' => $request->amount,  // Store the plan amount
        ]);

        // Redirect the user to the dashboard with a success message
        return redirect()->route('user.dashboard')->with('success', 'Plan created successfully.');
    }

    public function withdrawIndex($planId)
    {
        // Get the plan based on the plan_id passed in the route
        $plan = Plan::findOrFail($planId);
        $user = Auth::user();

        // Display the withdrawal page with the plan details and available balance
        return view('withdrawal', [
            'availableBalance' => $user->wallet_balance,
            'plan' => $plan
        ]);
    }

    public function withdraw(Request $request)
    {
        // Validate incoming withdrawal request
        $request->validate([
            'amount' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();  // Get the authenticated user

        // Find the user's active plan (assuming one plan per user for simplicity)
        $plan = Plan::where('user_id', $user->id)->latest()->first(); // Get the latest plan or active plan

        if (!$plan) {
            return redirect()->route('user.dashboard')->with('error', 'No active plan found.');
        }

        // Check if the withdrawal amount is less than or equal to the user's plan amount
        if ($request->amount > $plan->amount) {
            return redirect()->route('user.dashboard')->with('error', 'Insufficient balance to withdraw.');
        }

        // Deduct the withdrawn amount from the plan
        $plan->amount -= $request->amount;
        $plan->save();  // Update the plan with the new amount

        // Add the withdrawn amount to the user's wallet
        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            ['balance' => 0]  // Create a wallet if it does not exist
        );

        // Update wallet balance
        $wallet->balance += $request->amount;
        $wallet->save();

        // Record the transaction in the wallet
        Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'description' => 'Withdrawal from plan to wallet',
            'type' => 'credit',  // This is a credit to the wallet
            'date' => now(),
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('user.dashboard')->with('success', 'Withdrawal successful.');
    }

}
