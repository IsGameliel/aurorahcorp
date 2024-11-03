<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Plan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Centered Form Section -->
                    <form method="POST" action="{{ route('plan.store') }}" class="mt-8 max-w-md mx-auto space-y-4">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="payment-method" class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Payment Method</label>
                            <select id="payment-method" name="payment_method" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                                <option value="" disabled selected>Select payment method</option>
                                <option value="bitcoin">Bitcoin</option>
                                <option value="ethereum">Ethereum</option> <!-- Fixed spelling -->
                                <option value="doge">Doge</option>
                            </select>
                        </div>

                        <!-- Dropdown Field for Plan Selection -->
                        <div class="form-group mb-4">
                            <label for="plan" class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Choose a Plan</label>
                            <select id="plan" name="plan" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                                <option value="" disabled selected>Choose a plan</option>
                                <option value="Basic Plan">Basic Plan</option>
                                <option value="Business Plan">Business Plan</option> <!-- Fixed casing -->
                                <option value="Developers Plan">Developers Plan</option> <!-- Fixed casing -->
                            </select>
                        </div>

                        <div id="plan-amount" name="amount" class="mt-4 mb-4 p-4 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded hidden">
                            <!-- Amount will be displayed here based on plan selection -->
                        </div>
                        <input type="hidden" id="amount" name="amount" value="">

                        <!-- Text Field -->
                        <div class="form-group mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Cardholder Name</label>
                            <input type="text" id="name" name="cardHolder_name" value="{{ $user->name }}" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" disabled>
                        </div>

                        <div id="payment-address" class="mt-4 mb-4 p-4 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded hidden">
                            <!-- Address will be displayed here based on payment selection -->
                        </div>

                        <!-- Submit Button -->
                        <button style="background-color: black;" type="submit" class="w-full bg-black text-white font-semibold p-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('payment-method').addEventListener('change', function () {
            const addressDisplay = document.getElementById('payment-address');
            const selectedMethod = this.value;

            // Define addresses based on payment method
            const addresses = {
                'bitcoin': 'bc1qv4ttgqyg7nwnw57cs3lyzy7c4uwj5cpjw5hwzr',
                'ethereum': '0x6Ae83DAa1bDAC1C568ebD90D9892BF28AF519936',
                'doge': 'DDCZjFP7Xv5t3J2vcsML1qeEZNr8fxLicm'
            };

            // Update address display based on selection
            if (addresses[selectedMethod]) {
                addressDisplay.textContent = `Payment Address: ${addresses[selectedMethod]}`;
                addressDisplay.classList.remove('hidden');
            } else {
                addressDisplay.classList.add('hidden');
                addressDisplay.textContent = '';
            }
        });

        document.getElementById('plan').addEventListener('change', function () {
            const amountDisplay = document.getElementById('plan-amount');
            const selectedPlan = this.value;

            // Define amounts based on plan selection
            const planAmounts = {
                'Basic Plan': '$10.00',
                'Business Plan': '$50.00',
                'Developers Plan': '$100.00'
            };

            // Get the hidden input for amount
            const amountInput = document.getElementById('amount');

            // Update amount display and hidden input based on selection
            if (planAmounts[selectedPlan]) {
                amountDisplay.textContent = `Plan Amount: ${planAmounts[selectedPlan]}`;
                amountDisplay.classList.remove('hidden');
                amountInput.value = planAmounts[selectedPlan].replace('$', ''); // Store amount without the dollar sign
            } else {
                amountDisplay.classList.add('hidden');
                amountDisplay.textContent = '';
                amountInput.value = ''; // Reset hidden input if no plan is selected
            }
        });
    </script>


</x-app-layout>
