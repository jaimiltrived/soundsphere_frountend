

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo Section -->
    <div class="d-flex align-items-center gap-3 p-4 mb-3">
        <div class="logo-box">
            <i class="fas fa-music text-white"></i>
        </div>
        <div>
            <h4 class="text-white mb-0 fw-bold">SoundSphere</h4>
            <small class="text-secondary">Music Platform</small>
        </div>
    </div>

 
    
    <nav>
        <a href="index.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="album.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'album.php' ? 'active' : ''; ?>">
            <i class="fas fa-compact-disc"></i>
            <span>Albums</span>
        </a>
        <a href="artists.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'artist.php' ? 'active' : ''; ?>">
            <i class="fas fa-guitar"></i>
            <span>Artists</span>
        </a>
        <a href="playlist.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'playlist.php' ? 'active' : ''; ?>">
            <i class="fas fa-list"></i>
            <span>Playlists</span>
        </a>
        <a href="likedSong.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'likedSong.php' ? 'active' : ''; ?>">
            <i class="fas fa-heart"></i>
            <span>Liked Songs</span>
        </a>
    </nav>

    

    <!-- Profile Section -->
    <div class="profile">
        <div class="avatar-box">
            
            <div class="flex-grow-1">
                <div class="text-white fw-semibold" style="font-size: 16px;">Jaimil</div>
                <small class="text-secondary">Jaimil@gmail.com</small>
            </div>
            <a href="logout.php" class="text-danger" title="Logout" style="font-size: 18px;">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>
</div>


<div class="sidebar-overlay" id="sidebarOverlay"></div>
