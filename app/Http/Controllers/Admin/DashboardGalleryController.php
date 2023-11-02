<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DashboardGalleryController extends Controller
{
    public function index()
    {
        return view('Admin.dashboardGallery');
    }
}
