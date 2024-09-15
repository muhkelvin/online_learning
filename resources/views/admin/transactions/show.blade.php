@extends('layouts.admin')

@section('page-title', 'Transaction Details')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Transaction Details</h2>
        <p><strong>User:</strong> {{ $transaction->user->name }}</p>
        <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
        <p><strong>Date:</strong> {{ $transaction->created_at }}</p>
        <p><strong>Status:</strong> {{ $transaction->status }}</p>
    </div>
@endsection
