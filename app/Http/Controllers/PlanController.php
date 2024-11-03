<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('plan', compact('user'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'payment_method' => 'required|string',
        //     'plan' => 'required|string',
        //     'name' => 'required|string|max:255',
        // ]);

        Plan::create([
            'user_id' => Auth::id(),
            'payment_method' => $request->payment_method,
            'plan' => $request->plan,
            'cardHolder_name' => Auth::user()->name,
            'amount' => $request->amount,
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Plan created successfully.');
    }
}
