@extends('layouts.layout')

<div class="head-title">
    <h1>Add Employee</h1>
</div>



<div class="container">
    <!-- Form Container -->
    <div class="form-container">
        <div class="head-title-addemp">
            <h1>Enter The Details</h1>
        </div>
        <form action="{{ route('employees.store') }}" method="post">
            @csrf
            <!-- Employee details input fields -->
            <div class="addemp-group">
                <label class="addemp-label" for="emp_id">Emp ID :</label>
                <input type="text" class="addemp-input" id="emp_id" name="emp_id" required>
            </div>
            <div class="img-upload">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="name">Name :</label>
                <input type="text" class="addemp-input" id="name" name="name" required>
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="department">Department :</label>
                <input type="text" class="addemp-input" id="department" name="department" required>
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="position">Position :</label>
                <input type="text" class="addemp-input" id="position" name="position" required>
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="address">Address :</label>
                <input type="text" class="addemp-input" id="address" name="address">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="mobile">Mobile :</label>
                <input type="text" class="addemp-input" id="mobile" name="mobile">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" class="addemp-label" for="emergency_contact">Emergency Contact :</label>
                <input type="text" class="addemp-input" id="emergency_contact" name="emergency_contact">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="personal_mail">Personal Mail :</label>
                <input type="email" class="addemp-input" id="personal_mail" name="personal_mail">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="official_mail">Official Mail :</label>
                <input type="email" class="addemp-input" id="official_mail" name="official_mail">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="doj">DOJ :</label>
                <input type="date" class="addemp-input" id="doj" name="doj">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="doe">DOE :</label>
                <input type="date" class="addemp-input" id="doe" name="doe">
            </div>
            <div class="addemp-group">
                <label class="addemp-label" for="blood_group">Blood Group :</label>
                <input type="text" class="addemp-input" id="blood_group" name="blood_group">
            </div>
            <div>
                <!-- Add buttons for submitting the form and closing the modal -->
                <button type="submit" class="btn btn-primary">Add Employee</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            
            <tbody>

    </tbody>
        </form>
    </div>
</div>