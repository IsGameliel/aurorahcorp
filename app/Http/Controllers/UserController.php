<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use App\Models\Wallet;
use App\Models\Transaction;



class UserController extends Controller
{
    public function index(){
        $user = Auth::user();

        $plans = $user->plans;

        $wallet = Wallet::firstOrCreate(
            ['user_id' => $user->id],
            ['balance' => 0.00]
        );

        $transactions = Transaction::where('user_id', $user->id)
                                   ->orderBy('created_at', 'desc')
                                   ->take(5) // limit to latest 5 transactions
                                   ->get();

        return view('dashboard', compact('plans', 'wallet', 'transactions'));

    }
}
