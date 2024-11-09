<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h2 class="font-semibold text-xl mb-4">Wallet</h2>

        <!-- Wallet Balance -->
        <div class="flex items-center justify-between mb-4">
            <p class="text-lg font-semibold">Balance:</p>
            <p class="text-lg font-semibold text-green-500">${{ number_format($wallet->balance, 2) }}</p>
        </div>

        <!-- Add Funds Button -->
        <div class="mt-4">
            <a href="{{ route('wallet.show') }}" class="inline-block bg-black text-white font-semibold py-2 px-4 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400" style="background-color: black;">
                Show Wallet
            </a>
        </div>
    </div>
</div>
