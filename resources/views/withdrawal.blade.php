<!-- resources/views/withdrawal.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Withdrawal from Plan: ' . $plan->plan) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h3 class="font-semibold text-lg mb-4">Withdraw from your Wallet</h3>

                    <!-- Display the available wallet balance -->
                    <p>Available Plan Balance: ${{ number_format($plan->amount, 2) }}</p>

                    <!-- Withdrawal Form -->
                    <form method="POST" action="{{ route('plan.withdraw') }}" class="mt-4">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">

                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 dark:text-gray-300 mb-1">Withdrawal Amount</label>
                            <input type="number" id="amount" name="amount" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" min="0" max="{{ $plan->amount }}" />
                            <p class="text-sm text-gray-500 mt-1">You can withdraw up to the available balance of ${{ number_format($plan->amount, 2) }}</p>
                        </div>

                        <button type="submit" style="background-color: black;" class="w-full bg-black text-white font-semibold p-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Withdraw
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
