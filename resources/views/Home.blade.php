<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Sidebar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <a href="#">Dashboard</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
    <!-- Button to toggle sidebar -->
    <button class="btn btn-light" onclick="toggleSidebar()">Toggle Sidebar</button>
</div>

<!-- Page content -->
<div class="content">
    <h2>Main Content</h2>
    <p>This is the main content area. You can put your content here.</p>
</div>

<!-- Script to toggle sidebar -->
<script>
    function toggleSidebar() {
        var sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('hidden');
    }
</script>

</body>
</html>
