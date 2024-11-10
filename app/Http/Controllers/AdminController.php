<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Get the counts or relevant data for the dashboard
        $plansCount = Plan::count(); // Get the number of available plans
        $usersCount = User::count(); // Get the total number of users
        $transactionsTotal = Transaction::count();
        $users = User::all();

        // Pass the data to the view
        return view('admin.dashboard', compact('plansCount', 'usersCount', 'transactionsTotal', 'users'));
    }
}
