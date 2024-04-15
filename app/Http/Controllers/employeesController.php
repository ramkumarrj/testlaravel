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
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            // Add validation rules for other fields
        ]);

        // Create a new employee record
        Employee::create($validatedData);

        // Redirect back to the employee list page
        return redirect()->route('employees.index')->with('success', 'Employee added successfully!');
    }
}
