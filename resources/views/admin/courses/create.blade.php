@extends('layouts.admin')

@section('page-title', 'Create Course')

@section('content')
    <div class="max-w-lg mx-auto bg-white p-8 border border-gray-300 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6">Create New Course</h2>
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="w-full border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full border-gray-300 p-2 rounded-md" required></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Price (USD)</label>
                <input type="number" name="price" id="price" class="w-full border-gray-300 p-2 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-gray-700">Category</label>
                <select name="category_id" id="category_id" class="w-full border-gray-300 p-2 rounded-md" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image (optional)</label>
                <input type="file" name="image" id="image" class="w-full border-gray-300 p-2 rounded-md">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Create Course</button>
        </form>
    </div>
@endsection
