@extends('layouts.layout')

<div class="head-title">
    <h1>Employee List</h1>
</div>

<table class="table" >
    <thead>
        <tr>
            <th>Emp-ID</th>
            <th>User-ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Position</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Emergency Contact</th>
            <th>Personal Mail</th>
            <th>Official Mail</th>
            <th>DOJ</th>
            <th>DOE</th>
            <th>Blood Group</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Loop through employees -->
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->emp_id }}</td>
            <td>{{ $employee->uid }}
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->mobile }}</td>
            <td>{{ $employee->emergency_contact }}</td>
            <td>{{ $employee->personal_mail }}</td>
            <td>{{ $employee->official_mail }}</td>
            <td>{{ $employee->doj }}</td>
            <td>{{ $employee->doe }}</td>
            <td>{{ $employee->blood_group }}</td>
            <td>
                <button class="btn btn-sm btn-info">Edit</button>
                <!-- Add edit functionality -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

