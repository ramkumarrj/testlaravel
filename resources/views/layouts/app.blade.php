<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <!-- Navbar or any other header content can be placed here -->

    <!-- Main content area -->
    <div class="mt-4">
        <h1>@yield('content-title')</h1>
        <hr>
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS and any other scripts can be included here -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
