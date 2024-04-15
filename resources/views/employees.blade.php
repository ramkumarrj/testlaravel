    @extends('layouts.app')

@section('title', 'Employee List')

@section('content-title', 'Employee List')

{{--@section('content') --}}
    <div class="row mb-3">
        <div class="col-md-12">
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addEmployeeModal">Add Employee</button>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Emp ID</th>
                <th>UID</th>
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

    <!-- Add Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add employee form -->
                    <form action="{{ route('employees.store') }}" method="post">
                        @csrf
                        <!-- Employee details input fields -->
                        <!-- Include fields for Emp_ID, Name, Department, Position, Address, Mobile, EmergencyContect, Personal_mail, Officail_Mail, DOJ, DOE, BloodGroup -->
                        <!-- Example: -->
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <!-- Add more input fields for other employee details -->
                        <!-- Add buttons for submitting the form and closing the modal -->
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
