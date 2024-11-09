<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h2 class="font-semibold text-xl mb-4">Your Plans</h2>

        @if($plans->where('amount', '>', 0)->isEmpty())
            <!-- No active plans with balance > 0 -->
            <p class="text-gray-600 dark:text-gray-400">You have no active plans.</p>
        @else
            <!-- Loop through active plans with balance > 0 -->
            @foreach($plans->where('amount', '>', 0) as $plan)
                <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-md mb-4">
                    <div class="p-4">
                        <!-- Plan Name and Amount -->
                        <h3 class="text-lg font-semibold">Plan: {{ $plan->plan }}</h3>
                        <p class="text-gray-500 dark:text-gray-300">Amount: ${{ number_format($plan->amount, 2) }}</p>

                        <!-- Short Description -->
                        <p class="mt-2 text-gray-600 dark:text-gray-400">
                            {{ $plan->description }}
                        </p>

                        <!-- Withdrawal Button -->
                        <div class="mt-4">
                            <a href="{{ route('withdrawal.index', ['plan_id' => $plan->id]) }}" style="background-color: black;" class="inline-block bg-black text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                Withdraw
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
