<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Three-Column Layout for Plans (Left) and Wallet (Right) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mb-8">
                <!-- Your Plans Section (Left) -->
                <div class="col-span-1 mt-8"> <!-- Added top margin here -->
                    <x-plan-list :plans="$plans" />
                </div>

                <!-- Wallet Section (Middle) -->
                <div class="col-span-1 mt-8"> <!-- Added top margin here -->
                    <x-wallet-card :wallet="$wallet" />
                </div>
            </div>

            <!-- Full-Width Transaction Section (spanning all columns) -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8" style="margin-top: 2rem;"> <!-- Added top margin here -->
                <div class="p-6 text-gray-900 dark:text-gray-100 mt-8">
                    <h3 class="font-semibold text-xl mb-4">Recent Transactions</h3>

                    <!-- Transaction List Component -->
                    <x-transaction-list :transactions="$transactions" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
