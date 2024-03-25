<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        return response()->view('Dashboard.dashboard', [

            "title" => 'Dashboard'

        ]);
    }
}
