<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function sales()
    {
        // Ambil data transaksi dari tabel pembayaran (payments)
        $payments = Payment::all();
        return view('admin.reports.sales', compact('payments'));
    }

    public function users()
    {
        // Ambil data pengguna
        $users = User::all();
        return view('admin.reports.users', compact('users'));
    }

    public function popularCourses()
    {
        // Ambil data kursus berdasarkan popularitas (misalnya jumlah pendaftaran)
        $popularCourses = Course::withCount('users')->orderBy('users_count', 'desc')->get();
        return view('admin.reports.popular_courses', compact('popularCourses'));
    }
}
