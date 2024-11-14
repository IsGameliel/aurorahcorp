@extends('layouts.newmain')

@section('content')
        <div id="layoutSidenav">
            @include('components.newsidenav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Welcome <b>{{ Auth::user()->name }}</b></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    @if($plans->where('amount', '>', 0)->isEmpty())
                                    <!-- No active plans with balance > 0 -->
                                    <div class="card-body">
                                        <p class="text-gray-600 dark:text-gray-400">You have no active plans.</p>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Nothing to Withdraw</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    @else
                                        <!-- Loop through active plans with balance > 0 -->
                                    @foreach($plans->where('amount', '>', 0) as $plan)
                                    <div class="card-body">
                                        <p class="text-lg font-semibold">Plan: {{ $plan->plan }}</p>
                                        <p class="text-gray-500 dark:text-gray-300">Amount: ${{ number_format($plan->amount, 2) }}</p>

                                        <!-- Short Description -->
                                        <p class="mt-2 text-gray-600 dark:text-gray-400">
                                            {{ $plan->description }}
                                        </p>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('withdrawal.index', ['plan_id' => $plan->id]) }}">Withdraw</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    @endforeach
                                @endif
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <p class="text-lg font-semibold">Balance:</p>
                                        <p class="text-lg font-semibold text-green-500">${{ number_format($wallet->balance, 2) }}</p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ route('wallet.show') }}">Withdraw fund</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-wallet me-1"></i>
                                Recent Transactions
                            </div>
                            <div class="card-body">
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                                    <div class="p-6 text-gray-900 dark:text-gray-100">
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

                            </div>
                        </div>
                    </div>
                </main>
@endsection
