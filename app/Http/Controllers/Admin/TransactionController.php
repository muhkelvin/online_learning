<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Payment::with('user')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function show(Payment $transaction)
    {
        return view('admin.transactions.show', compact('transaction'));
    }
}
