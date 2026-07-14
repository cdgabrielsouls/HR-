<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class AttendanceOverviewController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view(
            'reports-analytics.attendance-overview',
            compact('employees')
        );
        
    }
}