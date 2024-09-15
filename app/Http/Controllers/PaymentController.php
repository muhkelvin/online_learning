<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }

    public function complete(Payment $payment)
    {
        $payment->status = 'completed';
        $payment->save();

        return redirect()->route('payments.show', $payment->id)->with('success', 'Payment completed successfully!');
    }
}
