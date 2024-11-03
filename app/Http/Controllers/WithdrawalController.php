<?php

// app/Http/Controllers/WithdrawalController.php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function index($plan_id)
    {
        $plan = Plan::findOrFail($plan_id);

        // Define the bank names
        $banks = [
            'Access Bank',
            'Bank of America',
            'Barclays',
            'BBVA',
            'BNP Paribas',
            'BOS Bank',
            'Capitec Bank',
            'Citi Bank',
            'Citizens Bank',
            'Commerzbank',
            'Commonwealth Bank',
            'Cooperative Bank',
            'Credit Suisse',
            'DBS Bank',
            'Deutsche Bank',
            'Diamond Bank',
            'Ecobank',
            'First Bank',
            'FNB',
            'GTBank',
            'Halifax',
            'HDFC Bank',
            'HSBC',
            'I&M Bank',
            'Imperial Bank',
            'Investec Bank',
            'Islamic Bank',
            'JPMorgan Chase',
            'KCB Bank',
            'KeyBank',
            'Lloyds Bank',
            'Maybank',
            'MBNA',
            'Mercantile Bank',
            'Mizuho Bank',
            'Morgan Stanley',
            'Nedbank',
            'NIBC Bank',
            'Nykredit',
            'OneWest Bank',
            'Payoneer',
            'PNC Bank',
            'Progressive Bank',
            'Rabobank',
            'Raiffeisen Bank',
            'RBS',
            'Royal Bank of Canada',
            'Santander',
            'Scotiabank',
            'Société Générale',
            'Standard Bank',
            'Standard Chartered',
            'Sterling Bank',
            'SunTrust Bank',
            'TD Bank',
            'UBS',
            'United Bank for Africa',
            'Union Bank',
            'Wells Fargo',
            'Westpac',
            'Wells Fargo',
            'Zions Bank',
            'Zenith Bank',
            'Ziraat Bank'
        ];

        return view('withdrawal', compact('plan', 'banks'));
    }

    public function processWithdrawal(Request $request, $plan_id)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1|max:' . Auth::user()->plans()->where('id', $plan_id)->first()->amount,
            'bank_name' => 'required|string',
            'account_number' => 'required|string',
            'account_holder_name' => 'required|string',
        ]);

        $plan = Plan::findOrFail($plan_id);

        // Here, you can handle the bank details as necessary
        // For instance, you could log these details or save them to a transaction record.
        $bankName = $request->bank_name;
        $accountNumber = $request->account_number;
        $accountHolderName = $request->account_holder_name;

        // Process withdrawal (this is where you would implement your logic)
        if ($plan->withdraw($request->amount)) {
            // If you want to save bank details to a transaction log, do it here
            // For example: Transaction::create([...]);

            return redirect()->route('user.dashboard')->with('success', 'Withdrawal processed successfully!');
        } else {
            return back()->withErrors(['amount' => 'Insufficient funds.']);
        }
    }
}
