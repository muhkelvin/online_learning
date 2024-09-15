<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function toggleStatus(User $user)
    {
        $user->update(['status' => $user->status == 'active' ? 'blocked' : 'active']);
        return redirect()->route('admin.users.index')->with('success', 'User status updated successfully!');
    }
}
