<?php
$page_title = "Playlists - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Playlists Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div
                class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="text-white fw-bold mb-1">
                        <span class="gradient-text">Playlists Collection</span>
                    </h2>
                    <p class="text-secondary mb-0">Create and manage curated playlists for your users.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="add_playlist.php" class="btn px-4 py-2 rounded-3 fw-semibold"
                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                        <i class="fas fa-plus me-2"></i>Create Playlist
                    </a>
                </div>
            </div>

            <!-- Stats Cards -->
            <!-- <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <div class="stats-card-compact">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon-compact"
                                style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                <i class="fas fa-list"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">156</h4>
                                <small class="text-secondary">Total Playlists</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card-compact">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon-compact"
                                style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">142</h4>
                                <small class="text-secondary">Active</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card-compact">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon-compact"
                                style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">24</h4>
                                <small class="text-secondary">Featured</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stats-card-compact">
                        <div class="d-flex align-items-center gap-3">
                            <div class="stats-icon-compact"
                                style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                                <i class="fas fa-music"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">2,845</h4>
                                <small class="text-secondary">Total Songs</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Filter Tabs -->
            <!-- <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="search-box-playlist">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchPlaylist" placeholder="Search playlists...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="filter-tab active" data-filter="all">All Playlists</button>
                            <button class="filter-tab" data-filter="featured">Featured</button>
                            <button class="filter-tab" data-filter="trending">Trending</button>
                            <button class="filter-tab" data-filter="recent">Recently Updated</button>
                            <button class="filter-tab" data-filter="popular">Most Popular</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="search-box-user">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchUser" placeholder="Search by name, email, or ID...">
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterPlan">
                            <option value="">All Plans</option>
                            <option value="free">Free</option>
                            <option value="premium">Premium</option>
                            <option value="pro">Pro</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterStatus">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="recent">Recent</option>
                            <option value="name">Name A-Z</option>
                            <option value="activity">Most Active</option>
                            <option value="revenue">Top Revenue</option>
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

            <!-- Playlists Grid -->
            <div class="playlists-grid">
                <!-- Playlist Card 1 -->
                <div class="playlist-card" data-category="featured">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <div class="playlist-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="featured-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Top Hits 2024</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>45 songs</span>
                            <span class="playlist-duration">2h 34m</span>
                        </p>
                        <p class="playlist-description">The hottest tracks of the year. Updated weekly with the latest
                            hits.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>125K plays</span>
                            <span><i class="fas fa-heart me-1"></i>8.5K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 2 -->
                <div class="playlist-card" data-category="trending">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                            <div class="playlist-icon">
                                <i class="fas fa-headphones"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Chill Vibes</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>32 songs</span>
                            <span class="playlist-duration">1h 52m</span>
                        </p>
                        <p class="playlist-description">Relax and unwind with these smooth, mellow tracks.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>89K plays</span>
                            <span><i class="fas fa-heart me-1"></i>6.2K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 3 -->
                <div class="playlist-card" data-category="recent">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #ff4f6d, #ff7b8f);">
                            <div class="playlist-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="featured-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Love Songs Collection</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>28 songs</span>
                            <span class="playlist-duration">1h 38m</span>
                        </p>
                        <p class="playlist-description">Romantic melodies for every mood and moment.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>156K plays</span>
                            <span><i class="fas fa-heart me-1"></i>12.3K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 4 -->
                <div class="playlist-card" data-category="popular">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                            <div class="playlist-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Workout Energy</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>50 songs</span>
                            <span class="playlist-duration">2h 45m</span>
                        </p>
                        <p class="playlist-description">High-energy tracks to power through your workout sessions.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>203K plays</span>
                            <span><i class="fas fa-heart me-1"></i>15.7K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 5 -->
                <div class="playlist-card" data-category="all">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                            <div class="playlist-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Nature Sounds</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>18 songs</span>
                            <span class="playlist-duration">1h 12m</span>
                        </p>
                        <p class="playlist-description">Peaceful nature sounds and ambient music for relaxation.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>45K plays</span>
                            <span><i class="fas fa-heart me-1"></i>3.2K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 6 -->
                <div class="playlist-card" data-category="trending">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                            <div class="playlist-icon">
                                <i class="fas fa-guitar"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Acoustic Sessions</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>24 songs</span>
                            <span class="playlist-duration">1h 28m</span>
                        </p>
                        <p class="playlist-description">Stripped-down acoustic performances and unplugged versions.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>67K plays</span>
                            <span><i class="fas fa-heart me-1"></i>5.1K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 7 -->
                <div class="playlist-card" data-category="popular">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                            <div class="playlist-icon">
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Indie Favorites</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>36 songs</span>
                            <span class="playlist-duration">2h 05m</span>
                        </p>
                        <p class="playlist-description">The best indie tracks from emerging and established artists.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>92K plays</span>
                            <span><i class="fas fa-heart me-1"></i>7.8K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Playlist Card 8 -->
                <div class="playlist-card" data-category="featured">
                    <div class="playlist-cover-wrapper">
                        <div class="playlist-cover" style="background: linear-gradient(135deg, #06b6d4, #22d3ee);">
                            <div class="playlist-icon">
                                <i class="fas fa-moon"></i>
                            </div>
                        </div>
                        <div class="playlist-overlay">
                            <button class="play-playlist-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="featured-star">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="playlist-info">
                        <h5 class="playlist-title">Night Drive</h5>
                        <p class="playlist-meta">
                            <span class="song-count"><i class="fas fa-music me-1"></i>40 songs</span>
                            <span class="playlist-duration">2h 18m</span>
                        </p>
                        <p class="playlist-description">Perfect soundtrack for late night drives and city lights.</p>
                        <div class="playlist-stats">
                            <span><i class="fas fa-play-circle me-1"></i>178K plays</span>
                            <span><i class="fas fa-heart me-1"></i>14.2K likes</span>
                        </div>
                        <div class="playlist-actions">
                            <button class="btn-action btn-action-primary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-action btn-action-secondary">
                                <i class="fas fa-share-alt me-1"></i>Share
                            </button>
                            <button class="btn-action btn-action-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <hr class="border-secondary">
            </div>


            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <p class="text-secondary mb-0">Showing 1-8 of 12,847 users</p>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">1606</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Create Playlist Modal -->



<script>


    // Icon selector
    document.querySelectorAll('.icon-selector').forEach(icon => {
        icon.addEventListener('click', function () {
            document.querySelectorAll('.icon-selector').forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Delete confirmation
    document.querySelectorAll('.btn-action-danger').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (confirm('Are you sure you want to delete this playlist?')) {
                this.closest('.playlist-card').remove();
            }
        });
    });
</script>

<?php include 'footer.php'; ?>