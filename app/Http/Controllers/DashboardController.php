<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use App\Models\member;
use App\Models\Booking;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showCountData()
    {
        $totalUnits = Unit::count();
        $totalMembers = member::count();
        $totalBookings = Booking::count();
        return view('dashboard', compact('totalUnits', 'totalMembers', 'totalBookings'));
    }
}
