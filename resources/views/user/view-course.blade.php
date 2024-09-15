@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Course</div>
                <h1 class="mt-1 text-3xl font-extrabold text-gray-900">{{ $course->title }}</h1>
                <p class="mt-4 text-gray-500">{{ $course->description }}</p>

                <div class="mt-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Course Materials</h2>
                    <ul class="space-y-3">
                        @foreach($course->materials as $material)
                            <li class="flex items-center space-x-3">
                                <svg class="flex-shrink-0 h-5 w-5 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                                </svg>
                                <a href="{{ route('user.download-material', $material) }}" class="text-indigo-600 hover:text-indigo-900">{{ $material->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mt-12">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Leave a Review</h2>
                    <form action="{{ route('reviews.store', $course) }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
                            <select name="rating" id="rating" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                <option value="1">1 - Poor</option>
                                <option value="2">2 - Fair</option>
                                <option value="3">3 - Good</option>
                                <option value="4">4 - Very Good</option>
                                <option value="5">5 - Excellent</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                            <textarea name="review" id="review" rows="4" class="mt-1 block w-full sm:text-sm border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
