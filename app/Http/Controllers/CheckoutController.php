<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('course')->get();
        return view('checkout.index', compact('cartItems'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required|string',
        ]);

        // Ambil item di keranjang
        $cartItems = Cart::where('user_id', Auth::id())->with('course')->get();

        // Jika keranjang kosong
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        // Hitung total amount
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->course->price;
        });

        // Proses pembayaran (sederhana, Anda dapat mengintegrasikan dengan gateway pembayaran sesungguhnya)
        Payment::create([
            'user_id' => Auth::id(),
            'amount' => $totalAmount,
            'status' => 'completed', // Ubah status berdasarkan hasil dari gateway pembayaran
            'payment_method' => $request->payment_method,
        ]);

        // Kosongkan keranjang
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('user.my-courses')->with('success', 'Payment successful!');
    }
}
