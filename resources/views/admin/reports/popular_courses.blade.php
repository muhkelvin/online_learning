@extends('layouts.admin')

@section('page-title', 'Popular Courses Report')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Popular Courses Report</h2>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2">Course ID</th>
                <th class="py-2">Title</th>
                <th class="py-2">Enrollments</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($popularCourses as $course)
                <tr>
                    <td class="py-2">{{ $course->id }}</td>
                    <td class="py-2">{{ $course->title }}</td>
                    <td class="py-2">{{ $course->users_count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
