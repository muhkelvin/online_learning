@extends('layouts.app')

@section('content')
    <div class="bg-gray-100 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">My Courses</h1>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    Track your progress and continue learning
                </p>
            </div>

            @if($courses->isEmpty())
                <div class="mt-12 bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No courses</h3>
                        <p class="mt-1 text-sm text-gray-500">You haven't enrolled in any courses yet.</p>
                        <div class="mt-6">
                            <a href="{{ route('courses.index') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Browse Courses
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($courses as $course)
                        <div class="bg-white overflow-hidden shadow-lg rounded-lg transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-xl">
                            <div class="px-4 py-5 sm:p-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">{{ $course->title }}</h3>
                                <div class="mt-2 max-w-xl text-sm text-gray-500">
                                    <p>{{ Str::limit($course->description, 100) }}</p>
                                </div>
                                <div class="mt-5">
                                    <div class="flex items-center">
                                        <div class="flex-1">
                                            <div class="bg-gray-200 rounded-full h-2.5">
                                                <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ $course->progress }}%"></div>
                                            </div>
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-gray-900">{{ $course->progress }}%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-4 sm:px-6">
                                <a href="{{ route('user.view-course', $course) }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Continue Learning
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
