@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-light-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                <div class="max-w-md mx-auto">
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Dashboard</h2>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <nav class="py-8 space-y-4">
                            <a href="{{ route('user.profile') }}" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Profile</p>
                                </div>
                            </a>
                            <a href="{{ route('user.my-courses') }}" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">My Courses</p>
                                </div>
                            </a>
                            <a href="{{ route('user.purchase-history') }}" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Purchase History</p>
                                </div>
                            </a>
                            <a href="{{ route('user.certificates') }}" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <svg class="flex-shrink-0 h-6 w-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                                <div class="ml-4">
                                    <p class="text-base font-medium text-gray-900">Certificates</p>
                                </div>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
