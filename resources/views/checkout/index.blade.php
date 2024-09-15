@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="max-w-lg mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-900">Checkout</h2>
            <ul class="mb-6">
                @foreach($cartItems as $item)
                    <li class="flex justify-between mb-4">
                        <div>{{ $item->course->title }}</div>
                        <div>{{ $item->course->price }} USD</div>
                    </li>
                @endforeach
            </ul>
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="payment_method" class="block text-gray-700">Payment Method</label>
                    <select name="payment_method" id="payment_method" class="w-full border-gray-300 p-2 rounded-md">
                        <option value="credit_card">Credit Card</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">Pay Now</button>
            </form>
        </div>
    </div>
@endsection
