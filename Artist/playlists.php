<?php
$page_title = "My Playlists - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- My Playlists Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="header-left">
                    <h1>My Playlists</h1>
                    <p>Curate your musical collections</p>
                </div>
                <div class="header-right">
                    <a href="add_playlist.php" class="btn-action btn-upload">
                        <i class="fas fa-plus"></i>
                        Create Playlist
                    </a>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-6">
                        <div class="search-box-user">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchPlaylist" placeholder="Search your playlists...">
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="newest">Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="name">Name A-Z</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="view-toggle-user">
                            <button class="view-btn active" id="viewCards">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="view-btn" id="viewTable">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Playlists Grid View -->
            <div class="songs-grid active" id="gridView">
                <!-- Playlist Card 1 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Playlist">
                        <div class="song-plays">
                            <i class="fas fa-music"></i>
                            24 Songs
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Chill Vibes</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-clock"></i> Created 2 days ago</span>
                            </div>
                        </div>
                        <div class="song-actions">
                            <button class="btn-icon" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-icon delete" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 2 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Playlist">
                        <div class="song-plays">
                            <i class="fas fa-music"></i>
                            15 Songs
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Workout Mix</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-clock"></i> Created 1 week ago</span>
                            </div>
                        </div>
                        <div class="song-actions">
                            <button class="btn-icon" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-icon delete" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 3 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?w=400" alt="Playlist">
                        <div class="song-plays">
                            <i class="fas fa-music"></i>
                            32 Songs
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Party Anthems</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-clock"></i> Created 2 weeks ago</span>
                            </div>
                        </div>
                        <div class="song-actions">
                            <button class="btn-icon" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn-icon delete" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
