<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <aside>
    <style>
        /* Style for sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        /* Style for sidebar links */
        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        /* Style for sidebar links on hover */
        .sidebar a:hover {
            background-color: #555;
        }

        /* Style for content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="/emplist   ">Employee</a>
        <a href="#">Settings</a>
        <!-- Button to toggle sidebar -->
        <button class="btn btn-light" onclick="toggleSidebar()">Toggle Sidebar</button>
    </div>
    </aside>