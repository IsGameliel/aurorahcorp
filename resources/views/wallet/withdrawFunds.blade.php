<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Withdraw Funds') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="font-semibold text-xl mb-4">Withdraw Funds from Your Wallet</h3>

                <form action="{{ route('wallet.withdrawFunds') }}" method="POST" class="w-full">
                    @csrf

                    <!-- Withdrawal Amount -->
                    <div class="mb-4">
                        <label for="amount" class="block text-gray-800 dark:text-gray-200 font-medium">Amount to Withdraw</label>
                        <input type="number" name="amount" id="amount" min="1" class="p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter amount" required>
                    </div>

                    <!-- Bank Name -->
                    <div class="mb-4">
                        <label for="bank_name" class="block text-gray-800 dark:text-gray-200 font-medium">Bank Name</label>
                        <input type="text" name="bank_name" id="bank_name" class="p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your bank name" required>
                    </div>

                    <!-- Account Number -->
                    <div class="mb-4">
                        <label for="account_number" class="block text-gray-800 dark:text-gray-200 font-medium">Account Number</label>
                        <input type="text" name="account_number" id="account_number" class="p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your account number" required>
                    </div>

                    <!-- Account Holder's Name -->
                    <div class="mb-4">
                        <label for="account_name" class="block text-gray-800 dark:text-gray-200 font-medium">Account Holder's Name</label>
                        <input type="text" name="account_name" id="account_name" class="p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter account holder's name" required>
                    </div>

                    <!-- Withdraw Button -->
                    <button type="submit" class="px-6 py-3 text-white bg-red-600 hover:bg-red-700 rounded-lg transition duration-300 w-full">Withdraw</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
