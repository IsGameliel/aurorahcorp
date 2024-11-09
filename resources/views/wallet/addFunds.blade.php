<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Funds') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <h3 class="font-semibold text-xl mb-4">Add Funds to Your Wallet</h3>

                <form action="{{ route('wallet.addFunds.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="amount" class="block text-gray-700 dark:text-gray-300">Amount to Add</label>
                        <input type="number" name="amount" id="amount" class="mt-2 block w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <button type="submit" class="inline-block bg-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-green-700">
                        Add Funds
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
