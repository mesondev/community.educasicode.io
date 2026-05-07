<div class="topbar d-flex justify-content-between align-items-center">

    <div class="d-flex align-items-center gap-3">

        <div class="menu-toggle" onclick="toggleSidebar()">
            <i class="bi bi-list"></i>
        </div>

        <div>
            <h4 class="fw-bold mb-0">
                Dashboard
            </h4>

            <small class="text-muted">
                Welcome back 👋
            </small>
        </div>

    </div>

    <div class="d-flex align-items-center gap-4">

        <div class="search-box">
            <input type="text" placeholder="Search here...">
        </div>

        <i class="bi bi-bell fs-4"></i>

        <div class="profile-box">

            <img src="https://i.pravatar.cc/100" alt="">

            <div>
                <h6 class="mb-0">
                    {{ auth()->user()->name }}
                </h6>

                <small class="text-muted">
                    {{ auth()->user()->role }}
                </small>
            </div>

        </div>

    </div>

</div>