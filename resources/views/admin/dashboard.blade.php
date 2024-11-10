<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <!-- Dashboard Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Available Plans Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Available Plans</h3>
                        <p class="mt-4 text-2xl font-semibold text-gray-800">{{ $plansCount }} Plans</p>
                    </div>
                </div>

                <!-- Total Users Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Total Users</h3>
                        <p class="mt-4 text-2xl font-semibold text-gray-800">{{ $usersCount }} Users</p>
                    </div>
                </div>

                <!-- Transactions Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Total Transactions</h3>
                        <p class="mt-4 text-2xl font-semibold text-gray-800">{{ $transactionsTotal }} Transactions</p>
                    </div>
                </div>

            </div>

            <!-- Create User Button -->
            <div class="mt-6 mb-4">
                <a href="{{ route('admin.users.create') }}" class="px-4 py-2 text-white font-medium rounded-md hover:bg-green-700" style="background-color: black;">
                    Create New User
                </a>
            </div>

            <!-- Users Table -->
            <div class="mt-6 bg-white shadow rounded-lg w-full">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900">Users List</h3>

                    <table class="min-w-full mt-4 table-auto w-full">
                        <thead>
                            <tr class="bg-gray-100 text-left">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Registered At</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $user->name }}</td>
                                    <td class="px-4 py-2">{{ $user->email }}</td>
                                    <td class="px-4 py-2">{{ $user->created_at->format('M d, Y') }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('admin.users.edit.wallet', $user->id) }}" class="text-blue-500 btn btn-primary hover:text-blue-700">Edit Wallet</a> |
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
