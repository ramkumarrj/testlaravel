@extends('layouts.header')


<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<script src="{{ asset('js/common.js') }}"></script>

<div class="head-title">
    <h1>Employee List</h1>
</div>
      
<div class="row mb-3">
    <div class="col-md-12">
        <button class="btn btn-primary float-md-end">Add Employee</button>
    </div>
</div>

</br>
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
                        <div class="form-group">
                            <label for="emp_id">Emp ID:</label>
                            <input type="text" class="form-control" id="emp_id" name="emp_id" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="department">Department:</label>
                            <input type="text" class="form-control" id="department" name="department" required>
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="emergency_contact">Emergency Contact:</label>
                            <input type="text" class="form-control" id="emergency_contact" name="emergency_contact">
                        </div>
                        <div class="form-group">
                            <label for="personal_mail">Personal Mail:</label>
                            <input type="email" class="form-control" id="personal_mail" name="personal_mail">
                        </div>
                        <div class="form-group">
                            <label for="official_mail">Official Mail:</label>
                            <input type="email" class="form-control" id="official_mail" name="official_mail">
                        </div>
                        <div class="form-group">
                            <label for="doj">DOJ:</label>
                            <input type="date" class="form-control" id="doj" name="doj">
                        </div>
                        <div class="form-group">
                            <label for="doe">DOE:</label>
                            <input type="date" class="form-control" id="doe" name="doe">
                        </div>
                        <div class="form-group">
                            <label for="blood_group">Blood Group:</label>
                            <input type="text" class="form-control" id="blood_group" name="blood_group">
                        </div>
                        <!-- Add buttons for submitting the form and closing the modal -->
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

@extends('layouts.footer')