<!-- resources/views/withdrawal.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Withdrawal') }}
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

                    <h3 class="font-semibold text-lg mb-4">Withdraw from {{ $plan->plan }}</h3>
                    <p>Available Amount: ${{ $plan->amount }}</p>

                    <form method="POST" action="{{ route('withdrawal.process', $plan->id) }}" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label for="amount" class="block text-gray-700 dark:text-gray-300 mb-1">Withdrawal Amount</label>
                            <input type="number" id="amount" name="amount" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" />
                        </div>

                        <!-- Bank Details Section -->
                        <h3 class="font-semibold text-lg mb-4 mt-6">Bank Details</h3>
                        <div class="mb-4">
                            <label for="bank_name" class="block text-gray-700 dark:text-gray-300 mb-1">Select Bank</label>
                            <select id="bank_name" name="bank_name" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                                <option value="" disabled selected>Select your bank</option>
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank }}">{{ $bank }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="account_number" class="block text-gray-700 dark:text-gray-300 mb-1">Account Number</label>
                            <input type="text" id="account_number" name="account_number" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" />
                        </div>
                        <div class="mb-4">
                            <label for="account_holder_name" class="block text-gray-700 dark:text-gray-300 mb-1">Account Holder Name</label>
                            <input type="text" id="account_holder_name" name="account_holder_name" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" />
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
