@include('layouts.header')
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Pay Roll</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus icon"></i>
            <div class="logo_name">BlindMatrix</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="/home">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="/addemplooye">
                    <i class="bx bx-book-open before"></i>
                    <span class="links_name">Add Emp</span>
                </a>
                <span class="tooltip">AddEmp</span>
            </li>
            <li>
                <a href="/emplist">
                    <i class="bx bx-user"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Leave</span>
                </a>
                <span class="tooltip">Leave</span>
            </li>
            <li>
                <a href="/calendar">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Calendar</span>
                </a>
                <span class="tooltip">Calendar</span>
            </li>
        </ul>
    </div>

    <script src="{{ asset('js/common.js') }}"></script>
 
</body>

</html>