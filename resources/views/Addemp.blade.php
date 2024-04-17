@extends('layouts.layout')

<div class="head-title">
    <h1>Add Employee</h1>
</div>



    <div class="container">
        <!-- Form Container -->
        <div class="form-container">
            <div class="head-title">
                <h1>Enter The Details</h1>
            </div>
            <form action="{{ route('employees.store') }}" method="post">
                @csrf
                <!-- Employee details input fields -->
                <div class="form-group">
                    <label class="form-label" for="emp_id">Emp ID:</label>
                    <input type="text" class="form-control" id="emp_id" name="emp_id" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="department">Department:</label>
                    <input type="text" class="form-control" id="department" name="department" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group">
                    <label class="form-label" for="mobile">Mobile:</label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label class="form-label" class="form-label" for="emergency_contact">Emergency Contact:</label>
                    <input type="text" class="form-control" id="emergency_contact" name="emergency_contact">
                </div>
                <div class="form-group">
                    <label for="personal_mail">Personal Mail:</label>
                    <input type="email" class="form-control" id="personal_mail" name="personal_mail">
                </div>
                <div class="form-group">
                    <label class="form-label" for="official_mail">Official Mail:</label>
                    <input type="email" class="form-control" id="official_mail" name="official_mail">
                </div>
                <div class="form-group">
                    <label class="form-label" for="doj">DOJ:</label>
                    <input type="date" class="form-control" id="doj" name="doj">
                </div>
                <div class="form-group">
                    <label class="form-label" for="doe">DOE:</label>
                    <input type="date" class="form-control" id="doe" name="doe">
                </div>
                <div class="form-group">
                    <label class="form-label" for="blood_group">Blood Group:</label>
                    <input type="text" class="form-control" id="blood_group" name="blood_group">
                </div>
                <!-- Add buttons for submitting the form and closing the modal -->
                <button type="submit" class="btn btn-primary">Add Employee</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        </div>
    </div>


