<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl mb-4">Your Plans</h2>

                    @foreach($plans as $plan)
                        <div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg shadow-md mb-4">
                            <div class="p-4">
                                <!-- Plan Name and Amount -->
                                <h3 class="text-lg font-semibold">Plan: {{ $plan->plan }}</h3>
                                <p class="text-gray-500 dark:text-gray-300">Amount: ${{ $plan->amount }}</p>

                                <!-- Short Description -->
                                <p class="mt-2 text-gray-600 dark:text-gray-400">
                                    {{ $plan->description }}
                                </p>

                                <!-- Withdrawal Button -->
                                <div class="mt-4">
                                    <a href="{{ route('withdrawal', ['plan_id' => $plan->id]) }}" style="background-color: black;" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                                        Withdraw
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if($plans->isEmpty())
                        <p class="text-gray-600 dark:text-gray-400">You have no active plans.</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
