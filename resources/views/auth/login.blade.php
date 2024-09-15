@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full border-gray-300 p-2 rounded-md" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Login</button>
        </form>
    </div>
@endsection
