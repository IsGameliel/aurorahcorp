<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();

        $plans = $user->plans;

        return view('dashboard', compact('plans'));

    }
}
