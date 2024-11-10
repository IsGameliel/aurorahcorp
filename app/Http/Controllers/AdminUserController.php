<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{

     // Show the form for creating a new user
     public function create()
     {
         return view('admin.users.create');
     }

     // Store a newly created user in the database
     public function store(Request $request)
     {
         // Validate the incoming request data
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users,email',
             'password' => 'required|string|min:8|confirmed',
         ]);

         // Create a new user
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password), // Hash the password
         ]);

         // Redirect back to the users list with success message
         return redirect()->route('admin.dashboard')->with('success', 'User created successfully.');
     }


    // Delete the user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }
}
