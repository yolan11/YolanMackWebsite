<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin.dashboardUser', compact('users'));
    }
}
