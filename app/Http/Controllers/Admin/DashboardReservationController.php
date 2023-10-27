<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DashboardReservationController extends Controller
{
    public function index()
    {
        return view('Admin.dashboardReservation');
    }
}
