<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.dashboard');
    }
}
