

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo Section -->
    <div class="d-flex align-items-center gap-3 p-4 mb-3">
        <div class="logo-box">
            <i class="fas fa-music text-white"></i>
        </div>
        <div>
            <h4 class="text-white mb-0 fw-bold">Artist Studio</h4>
            <small class="text-secondary">Music Platform</small>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="muted-text text-uppercase">Main Menu</div>
    <nav>
        <a href="artist.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'artist.php' ? 'active' : ''; ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
        <a href="song.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'song.php' ? 'active' : ''; ?>">
            <i class="fas fa-music"></i>
            <span>My Songs</span>
        </a>
        <a href="albums.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'albums.php' ? 'active' : ''; ?>">
            <i class="fas fa-compact-disc"></i>
            <span>My Albums</span>
        </a>
        <a href="playlists.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'playlists.php' ? 'active' : ''; ?>">
            <i class="fas fa-list-ul"></i>
            <span>My Playlists</span>
        </a>
        <a href="upload.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'upload.php' ? 'active' : ''; ?>">
            <i class="fas fa-cloud-upload-alt"></i>
            <span>Upload Music</span>
        </a>
        <a href="artist_profile.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'artist_profile.php' ? 'active' : ''; ?>">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
        <a href="verification.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'verification.php' ? 'active' : ''; ?>">
            <i class="fas fa-check-circle"></i>
            <span>Verification</span>
        </a>
    </nav>


    <!-- Profile Section -->
    <div class="profile">
        <div class="avatar-box">
            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="flex-grow-1">
                <div class="text-white fw-semibold" style="font-size: 16px;">DJ Cool</div>
                <small class="text-secondary">Artist</small>
            </div>
            <a href="../index.php" class="text-danger" title="Logout" style="font-size: 18px;">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>
</div>

<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>
