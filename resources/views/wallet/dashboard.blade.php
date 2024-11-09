<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Wallet Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Wallet Card -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                <!-- Wallet Balance -->
                <div class="mb-6">
                    <h3 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 mb-2">Wallet Balance</h3>
                    <p class="text-2xl font-bold text-green-500">${{ number_format($wallet->balance, 2) }}</p>
                </div>

                <!-- Recent Transactions -->
                <div class="mb-6">
                    <h4 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-4">Recent Transactions</h4>
                    <ul class="space-y-4">
                        @foreach ($transactions as $transaction)
                            <li class="border-b border-gray-200 pb-2">
                                <p class="text-gray-800 dark:text-gray-200">{{ $transaction->description }} - <span class="text-sm text-gray-500">{{ $transaction->date }}</span></p>
                                <p class="font-semibold text-gray-800 dark:text-gray-200">${{ number_format($transaction->amount, 2) }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Add Funds and Withdraw Buttons -->
                <div class="flex gap-4">
                    {{-- <a href="{{ route('wallet.addFundsForm') }}" class="px-6 py-3 text-white bg-black hover:bg-blue-700 rounded-lg transition duration-300">Add Funds</a> --}}
                    <form action="{{ route('wallet.withdrawFunds') }}" method="POST" class="flex items-center gap-2 w-full">
                        @csrf
                        <input type="number" name="amount" min="1" class="p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Amount to withdraw" required>
                        <button type="submit" class="px-6 py-3 text-white bg-red-600 hover:bg-red-700 rounded-lg transition duration-300">Withdraw</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
