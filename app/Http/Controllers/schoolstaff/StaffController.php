<?php

namespace App\Http\Controllers\schoolstaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff_dashboard()
    {
        return view('staff.staff_dashboard');
    }
}
