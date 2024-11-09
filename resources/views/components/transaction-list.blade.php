<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3 class="font-semibold text-lg mt-6">Recent Transactions</h3>
        @if($transactions->isEmpty())
            <p class="text-gray-600 dark:text-gray-400 mt-2">No recent transactions.</p>
        @else
            <ul class="mt-2">
                @foreach($transactions as $transaction)
                    <li class="border-b border-gray-300 dark:border-gray-600 py-2">
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $transaction->description }}
                        </p>
                        <p class="text-gray-500 dark:text-gray-300 text-sm">
                            {{ $transaction->created_at->format('M d, Y') }} - ${{ number_format($transaction->amount, 2) }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
