<!DOCTYPE html>
<html>
<head>
    <title>CODES Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width:250px; height:100vh;">
        <h4>CODES</h4>
        <ul class="nav flex-column">
            <li><a href="/courses" class="text-white">Kelas</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="p-4 w-100">
        @yield('content')
    </div>

</div>

</body>
</html>