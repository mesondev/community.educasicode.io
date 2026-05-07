<div class="sidebar">

    <div class="logo">
        🎓 CODES
    </div>

    <a href="#" class="active">
        <i class="bi bi-grid"></i>
        Dashboard
    </a>

    <a href="#">
        <i class="bi bi-book"></i>
        Courses
    </a>

    <a href="#">
        <i class="bi bi-people"></i>
        Students
    </a>

    <a href="#">
        <i class="bi bi-person-workspace"></i>
        Instructor
    </a>

    <a href="#">
        <i class="bi bi-credit-card"></i>
        Payments
    </a>

    <a href="#">
        <i class="bi bi-bar-chart"></i>
        Analytics
    </a>

    <a href="#">
        <i class="bi bi-gear"></i>
        Settings
    </a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button class="btn btn-danger w-100 mt-4 rounded-4">
            Logout
        </button>
    </form>

</div>