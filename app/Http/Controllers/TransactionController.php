<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the user's transactions.
     */
    public function index()
    {
        $user = Auth::user();

        // Retrieve all transactions for the authenticated user, ordered by most recent
        $transactions = Transaction::where('user_id', $user->id)
                                    ->orderBy('created_at', 'desc')
                                    ->paginate(10); // Paginate results, 10 per page

        return view('transactions.index', compact('transactions'));
    }

    /**
     * Display the specified transaction.
     *
     * @param  \App\Models\Transaction  $transaction
     */
    public function show(Transaction $transaction)
    {
        $user = Auth::user();

        // Ensure the transaction belongs to the authenticated user
        if ($transaction->user_id !== $user->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('transactions.show', compact('transaction'));
    }
}
