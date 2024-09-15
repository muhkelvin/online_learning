@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Courses</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($courses as $course)
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">
                            <a href="{{ route('courses.show', $course) }}" class="hover:text-blue-600 transition-colors duration-300">
                                {{ $course->title }}
                            </a>
                        </h2>
                        <p class="text-sm text-gray-600">
                            Category: <span class="font-medium">{{ $course->category->name }}</span>
                        </p>
                    </div>
                    <div class="bg-gray-100 px-6 py-4">
                        <a href="{{ route('courses.show', $course) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Learn More &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
