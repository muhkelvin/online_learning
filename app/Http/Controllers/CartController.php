<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('course')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function store(Request $request, Course $course)
    {
        $userId = Auth::id();

        // Periksa apakah course sudah ada di keranjang
        $existingCartItem = Cart::where('user_id', $userId)
            ->where('course_id', $course->id)
            ->first();

        if ($existingCartItem) {
            return redirect()->back()->with('info', 'This course is already in your cart.');
        }

        // Tambahkan course ke keranjang
        Cart::create([
            'user_id' => $userId,
            'course_id' => $course->id,
        ]);

        return redirect()->route('cart.index')->with('success', 'Course added to cart successfully!');
    }


    public function checkout(Request $request)
    {
        $cartItems = Cart::where('user_id', auth()->id())->with('course')->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $payment = null;

        foreach ($cartItems as $cartItem) {
            $payment = Payment::create([
                'user_id' => auth()->id(),
                'course_id' => $cartItem->course_id,
                'amount' => $cartItem->course->price,
                'status' => 'pending',
                'payment_method' => 'credit_card', // Change as needed
            ]);

            $cartItem->delete();
        }

        return redirect()->route('payments.show', $payment->id)
            ->with('success', 'Checkout successful! Please complete your payment.');
    }




}
