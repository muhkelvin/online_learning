@extends('layouts.admin')

@section('page-title', 'Create Category')

@section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Create Category</h2>
        <form method="POST" action="{{ route('admin.categories.store') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded mt-1" required>
            </div>
            <div class="mb-6">
                <label for="slug" class="block text-gray-700">Slug (optional)</label>
                <input type="text" name="slug" id="slug" class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Create</button>
            </div>
        </form>
    </div>
@endsection
