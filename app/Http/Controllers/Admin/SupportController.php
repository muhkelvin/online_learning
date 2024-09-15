<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        // Implement logic to list support requests
        return view('admin.support.index');
    }

    public function faq()
    {
        // Implement logic to display FAQ
        return view('admin.support.faq');
    }

    public function respond(Request $request)
    {
        // Implement logic to respond to support requests
        return redirect()->route('admin.support.index')->with('success', 'Response sent successfully!');
    }
}
