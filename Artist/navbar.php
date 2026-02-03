<!-- Top Navbar -->
<nav class="top-navbar sticky-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-3 px-3">
            <button class="btn btn-link text-white p-0" id="toggleSidebar">
                <i class="fas fa-bars fs-4"></i>
            </button>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-link text-white p-0 position-relative">
                    <i class="fas fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;">
                        3
                    </span>
                </button>
                <div class="dropdown">
                    <button class="btn btn-link text-white p-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=DJ+Cool&background=8B5CF6&color=fff" alt="Artist" class="rounded-circle" width="35" height="35">
                        <span class="d-none d-md-inline">DJ Cool</span>
                        <i class="fas fa-chevron-down" style="font-size: 12px;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" style="background: #1a1a1a; border: 1px solid rgba(255, 255, 255, 0.1);">
                        <li><a class="dropdown-item text-white" href="artist_profile.php"><i class="fas fa-user me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item text-white" href="settings.php"><i class="fas fa-cog me-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider" style="border-color: rgba(255, 255, 255, 0.1);"></li>
                        <li><a class="dropdown-item text-danger" href="../index.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
