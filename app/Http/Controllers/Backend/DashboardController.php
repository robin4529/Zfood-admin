<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // function for dashboard views

    public function showdashboard()
    {
       return view('admin.dashboard');
    }
}
