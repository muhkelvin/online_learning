@extends('layouts.admin')

@section('page-title', 'User Report')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">User Report</h2>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2">User ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">Email</th>
                <th class="py-2">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2">{{ $user->id }}</td>
                    <td class="py-2">{{ $user->name }}</td>
                    <td class="py-2">{{ $user->email }}</td>
                    <td class="py-2">{{ $user->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
