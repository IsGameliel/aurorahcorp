<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Wallet Balance') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow rounded-lg p-6">
                <form action="{{ route('admin.users.update.wallet', $wallet->user_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Current Balance</label>
                        <input type="number" name="balance" value="{{ $wallet->balance }}" class="mt-1 block w-full" required>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Update Balance</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
