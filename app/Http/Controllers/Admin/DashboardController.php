<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\Image;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Admin.AdminPage.index');
    }

    public function showAdminUser()
    {
        $users = User::all();
        return view('Admin.AdminPage.user', compact('users'));
    }

    public function showAdminEvent()
    {
        $events = Event::all();
        return view('Admin.AdminPage.event', compact('events'));
    }

    public function showAdminImage()
    {
        $images = Image::all();

        if ($images->isEmpty()) {
            return redirect('/dashboard/image/error');
        }

        return view('Admin.AdminPage.image', compact('images'));
    }

    public function showAdminImageError()
    {
        return view('Admin.AdminPage.no-image-found');
    }

}
