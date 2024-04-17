<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all(); // Retrieve all employees from the database
//        return view('employees')->with('employees', $employees);
        //return view('employees', compact($employees));
        //return View::make('employees', ['employees' => $employees]);
        return View('employees', compact('employees'));


    }

    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'emp_id' => 'required|integer|unique',
            'uid' => 'required|integer|unique',
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'address' => 'string|max:255',
            'mobile' => 'required|integer|max:12',
            'emergency_contact' => 'required|integer|max:12',
            'personal_mail' => 'required|email|unique',
            'official_mail' => 'email|unique',
            'doj' => 'nullable|date',
            'doe' => 'nullable|date',
            'blood_group' => 'string'

            // Add validation rules for other fields
        ]);

        // Create a new employee record
        Employee::create($validatedData);

        // Redirect back to the employee list page
        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }
}
