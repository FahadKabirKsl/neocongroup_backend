<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Request $request)
    {
        $employees = Employee::all();
        return view('layouts.dashboard.employee.create', compact('employees'));
    }
    public function store(Request $request)
    {
    }
}
