@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto w-full px-4 sm:px-0">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Purchase History</h2>

                    @if($payments->isEmpty())
                        <p class="text-gray-700 text-center py-4">No purchase history found.</p>
                    @else
                        <div class="space-y-6">
                            @foreach($payments as $payment)
                                <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            {{ $payment->course->title }}
                                        </h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                            {{ $payment->course->description }}
                                        </p>
                                    </div>
                                    <div class="px-4 py-4 sm:px-6">
                                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                            <div class="sm:col-span-1">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Amount
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900">
                                                    ${{ number_format($payment->amount, 2) }} USD
                                                </dd>
                                            </div>
                                            <div class="sm:col-span-1">
                                                <dt class="text-sm font-medium text-gray-500">
                                                    Purchase Date
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900">
                                                    {{ $payment->created_at->format('M d, Y') }}
                                                </dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
