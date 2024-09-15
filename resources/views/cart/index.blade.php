@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h2 class="text-3xl font-extrabold text-gray-900">My Cart</h2>
            </div>

            @if($cartItems->isEmpty())
                <div class="px-4 py-5 sm:p-6">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">Your cart is empty</h3>
                        <p class="mt-1 text-sm text-gray-500">Start adding some courses to your cart!</p>
                        <div class="mt-6">
                            <a href="{{ route('courses.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Browse Courses
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <ul class="divide-y divide-gray-200">
                    @foreach($cartItems as $item)
                        <li class="px-4 py-4 sm:px-6">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-20 w-20">
                                        <img class="h-20 w-20 rounded-md object-cover" src="{{ $item->course->image_url ?? 'https://via.placeholder.com/80x80' }}" alt="{{ $item->course->title }}">
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg font-medium text-gray-900">{{ $item->course->title }}</h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ Str::limit($item->course->description, 100) }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-medium text-gray-900">${{ number_format($item->course->price, 2) }}</p>
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="mt-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-500">
                                            Remove
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="px-4 py-5 bg-gray-50 sm:p-6">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-medium text-gray-900">
                            Total: <span class="font-bold">${{ number_format($cartItems->sum(fn($item) => $item->course->price), 2) }}</span>
                        </h3>
                        <form action="{{ route('checkout.index') }}" method="POST">
                            @csrf
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Proceed to Checkout
                            </button>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
