<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function myCourses()
    {
        $courses = Course::whereHas('payments', function($query) {
            $query->where('user_id', Auth::id())->where('status', 'completed');
        })->get();

        return view('user.my-courses', compact('courses'));
    }

    public function viewCourse(Course $course)
    {
        return view('user.view-course', compact('course'));
    }

    public function downloadMaterial(Material $material)
    {
        return response()->download(storage_path('app/' . $material->url));
    }

    public function index()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function purchaseHistory()
    {
        $payments = Payment::where('user_id', Auth::id())->get();
        return view('user.purchase-history', compact('payments'));
    }

    public function certificates()
    {
        // Implement certificate logic
        return view('user.certificates');
    }
}
