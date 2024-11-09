{{-- resources/views/transactions/show.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaction Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <!-- Transaction Details -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Transaction Information</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <span class="font-semibold">Description:</span> {{ $transaction->description }}
                    </div>
                    <div>
                        <span class="font-semibold">Amount:</span> ${{ number_format($transaction->amount, 2) }}
                    </div>
                    <div>
                        <span class="font-semibold">Type:</span> {{ ucfirst($transaction->type) }}
                    </div>
                    <div>
                        <span class="font-semibold">Status:</span> {{ ucfirst($transaction->status) }}
                    </div>
                    <div>
                        <span class="font-semibold">Date:</span> {{ $transaction->created_at->format('M d, Y H:i') }}
                    </div>
                </div>

                <div class="mt-6">
                    <a href="{{ route('transactions.index') }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                        &larr; Back to Transactions
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
