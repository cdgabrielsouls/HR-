<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
   public function index(Request $request)
{
    $query = Department::query();

    if ($request->filled('search')) {
        $query->where('department_name', 'like', '%' . $request->search . '%')
              ->orWhere('department_code', 'like', '%' . $request->search . '%');
    }

    $departments = $query->get();

    return view('departments.index', compact('departments'));
}


public function show($slug)
{
    $map = [
        'business-intelligence' => 'Business Intelligence',
        'finance' => 'Finance',
        'human-resources' => 'Human Resources',
        'it' => 'IT',
        'inventory' => 'Inventory Management',
        'ecommerce' => 'Electronic Commerce',
    ];

    $departmentName = $map[$slug] ?? null;

    if (!$departmentName) {
        abort(404);
    }

    $departments = Employee::where('department', $departmentName)->get();

    return view('departments.show', compact(
        'departments',
        'departmentName'
    ));
}
}

