

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo Section -->
    <div class="d-flex align-items-center gap-3 p-4 mb-3">
        <div class="logo-box">
            <i class="fas fa-music text-white"></i>
        </div>
        <div>
            <h4 class="text-white mb-0 fw-bold">Admin Panel</h4>
            <small class="text-secondary">Music Platform</small>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="muted-text text-uppercase">Main Menu</div>
    <nav>
        <a href="dashboard.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'Adm_index.php' ? 'active' : ''; ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="users.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'Users.php' ? 'active' : ''; ?>">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
        <a href="songs.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'songs.php' ? 'active' : ''; ?>">
            <i class="fas fa-music"></i>
            <span>Songs</span>
        </a>
        <a href="albums.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'album.php' ? 'active' : ''; ?>">
            <i class="fas fa-compact-disc"></i>
            <span>Albums</span>
        </a>
        <a href="artists.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'artist.php' ? 'active' : ''; ?>">
            <i class="fas fa-guitar"></i>
            <span>Artists</span>
        </a>
        <a href="playlists.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'playlist.php' ? 'active' : ''; ?>">
            <i class="fas fa-list"></i>
            <span>Playlists</span>
        </a>
    </nav>


    <!-- Profile Section -->
    <div class="profile">
        <div class="avatar-box">
            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="flex-grow-1">
                <div class="text-white fw-semibold" style="font-size: 16px;">Admin</div>
                <small class="text-secondary">admin@music.com</small>
            </div>
            <a href="logout.php" class="text-danger" title="Logout" style="font-size: 18px;">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>
</div>

<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>
