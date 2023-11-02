<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;

class DashboardReservationController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('Admin.dashboardReservation', compact('events'));
    }
}
