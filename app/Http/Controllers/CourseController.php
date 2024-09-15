<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->get();
        return view('courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $course->load('courseItems');
        return view('courses.show', compact('course'));
    }
}
