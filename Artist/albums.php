<?php
$page_title = "My Albums - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- My Albums Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="header-left">
                    <h1>My Albums</h1>
                    <p>Manage your album collections</p>
                </div>
                <div class="header-right">
                    <a href="add_album.php" class="btn-action btn-upload">
                        <i class="fas fa-plus"></i>
                        Create New Album
                    </a>
                </div>
            </div>

            <!-- Stats Overview -->
            <div class="stats-overview">
                <div class="stat-card">
                    <div class="stat-label">Total Albums</div>
                    <div class="stat-value">5</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Tracks</div>
                    <div class="stat-value">48</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Streams</div>
                    <div class="stat-value">245.6K</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Avg. Rating</div>
                    <div class="stat-value">4.8</div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-6">
                        <div class="search-box-user">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchAlbum" placeholder="Search your albums...">
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="newest">Newest First</option>
                            <option value="oldest">Oldest First</option>
                            <option value="popular">Most Popular</option>
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

            <!-- Albums Grid View -->
            <div class="songs-grid active" id="gridView">
                <!-- Album Card 1 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Album">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            125K
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Midnight Dreams</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-music"></i> 12 Tracks</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
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

                <!-- Album Card 2 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Album">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            89K
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Summer Vibes</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-music"></i> 8 Tracks</span>
                                <span><i class="fas fa-calendar"></i> 2023</span>
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

                <!-- Album Card 3 -->
                <div class="song-card">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Album">
                        <div class="song-status status-draft">Draft</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            0
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-info">
                            <h3 class="song-title">Upcoming Hits</h3>
                            <div class="song-meta">
                                <span><i class="fas fa-music"></i> 5 Tracks</span>
                                <span><i class="fas fa-calendar"></i> 2024</span>
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
