<?php 
$page_title = "Songs - Admin Panel";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Songs Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="text-white fw-bold mb-1">
                        <span class="gradient-text">Songs Library</span>
                    </h2>
                    <p class="text-secondary mb-0">Browse and manage your complete music catalog.</p>
                </div>
                <div class="d-flex gap-2">
                   
                    <button class="btn px-4 py-2 rounded-3 fw-semibold" style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;" onclick="window.location.href='add_song.php'">
                        <i class="fas fa-plus me-2"></i>Add Song
                    </button>
                </div>
            </div>

            <!-- Stats Cards -->
            <!-- <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="stats-card">
                        <div class="stats-icon" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="stats-info">
                            <h3 class="text-white mb-0">8,432</h3>
                            <p class="text-secondary mb-0 small">Total Songs</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stats-card">
                        <div class="stats-icon" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stats-info">
                            <h3 class="text-white mb-0">7,892</h3>
                            <p class="text-secondary mb-0 small">Published</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stats-card">
                        <div class="stats-icon" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="stats-info">
                            <h3 class="text-white mb-0">156</h3>
                            <p class="text-secondary mb-0 small">Trending</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stats-card">
                        <div class="stats-icon" style="background: linear-gradient(135deg, #ff4f6d, #ff7b8f);">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <div class="stats-info">
                            <h3 class="text-white mb-0">2.5M</h3>
                            <p class="text-secondary mb-0 small">Total Plays</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Search and Filter Bar -->
            <!-- <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchSong" placeholder="Search by title, artist, or album...">
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterGenre">
                            <option value="">All Genres</option>
                            <option value="pop">Pop</option>
                            <option value="rock">Rock</option>
                            <option value="jazz">Jazz</option>
                            <option value="electronic">Electronic</option>
                            <option value="hiphop">Hip Hop</option>
                            <option value="rnb">R&B</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterStatus">
                            <option value="">All Status</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                            <option value="trending">Trending</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="recent">Most Recent</option>
                            <option value="popular">Most Popular</option>
                            <option value="name">A-Z</option>
                            <option value="duration">Duration</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="btn-group w-100" role="group">
                            <button type="button" class="btn custom-input" id="viewGrid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button type="button" class="btn custom-input active" id="viewList">
                                <i class="fas fa-list"></i>
                            </button>
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

            <!-- Songs List (Default View) -->
            <div class="songs-list-view" id="songsContainer">
                <!-- Song Row 1 -->
                <div class="song-row" data-genre="pop" data-status="published">
                    <div class="song-number">#1</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Summer Vibes</h6>
                            <p class="song-artist mb-0">DJ Cool</p>
                        </div>
                    </div>
                    <div class="song-album">Summer Hits 2024</div>
                    <div class="song-genre">
                        <span class="genre-badge">Pop</span>
                    </div>
                    <div class="song-duration">3:45</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>2.5K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit" onclick="window.location.href='edit-song.php'">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 2 -->
                <div class="song-row trending" data-genre="electronic" data-status="trending">
                    <div class="song-number trending-badge">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Midnight Dreams</h6>
                            <p class="song-artist mb-0">The Nighters</p>
                        </div>
                    </div>
                    <div class="song-album">Electronic Dreams</div>
                    <div class="song-genre">
                        <span class="genre-badge">Electronic</span>
                    </div>
                    <div class="song-duration">4:12</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>6.7K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 3 -->
                <div class="song-row" data-genre="rock" data-status="published">
                    <div class="song-number">#3</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Electric Soul</h6>
                            <p class="song-artist mb-0">Bass Masters</p>
                        </div>
                    </div>
                    <div class="song-album">Rock Legends</div>
                    <div class="song-genre">
                        <span class="genre-badge">Rock</span>
                    </div>
                    <div class="song-duration">3:28</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>3.8K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 4 -->
                <div class="song-row" data-genre="jazz" data-status="published">
                    <div class="song-number">#4</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Moonlight Jazz</h6>
                            <p class="song-artist mb-0">Jazz Quartet</p>
                        </div>
                    </div>
                    <div class="song-album">Midnight Jazz</div>
                    <div class="song-genre">
                        <span class="genre-badge">Jazz</span>
                    </div>
                    <div class="song-duration">5:34</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>1.9K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 5 -->
                <div class="song-row trending" data-genre="hiphop" data-status="trending">
                    <div class="song-number trending-badge">
                        <i class="fas fa-fire"></i>
                    </div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Street Rhythm</h6>
                            <p class="song-artist mb-0">MC Flow</p>
                        </div>
                    </div>
                    <div class="song-album">Urban Beats</div>
                    <div class="song-genre">
                        <span class="genre-badge">Hip Hop</span>
                    </div>
                    <div class="song-duration">3:15</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>5.1K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 6 -->
                <div class="song-row draft" data-genre="pop" data-status="draft">
                    <div class="song-number">#6</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Acoustic Love</h6>
                            <p class="song-artist mb-0">Sarah Johnson</p>
                        </div>
                    </div>
                    <div class="song-album">Acoustic Sessions</div>
                    <div class="song-genre">
                        <span class="genre-badge draft-badge">Draft</span>
                    </div>
                    <div class="song-duration">4:02</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>892
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 7 -->
                <div class="song-row" data-genre="rnb" data-status="published">
                    <div class="song-number">#7</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Smooth Groove</h6>
                            <p class="song-artist mb-0">Emma Davis</p>
                        </div>
                    </div>
                    <div class="song-album">Soul Collection</div>
                    <div class="song-genre">
                        <span class="genre-badge">R&B</span>
                    </div>
                    <div class="song-duration">3:52</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>3.2K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Row 8 -->
                <div class="song-row" data-genre="electronic" data-status="published">
                    <div class="song-number">#8</div>
                    <div class="song-thumbnail">
                        <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=400" alt="Cover">
                        <div class="play-overlay">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="song-details">
                        <div class="song-title-artist">
                            <h6 class="song-title mb-0">Neon Lights</h6>
                            <p class="song-artist mb-0">Synth Wave</p>
                        </div>
                    </div>
                    <div class="song-album">Electronic Dreams</div>
                    <div class="song-genre">
                        <span class="genre-badge">Electronic</span>
                    </div>
                    <div class="song-duration">4:21</div>
                    <div class="song-plays">
                        <i class="fas fa-play-circle me-1"></i>4.8K
                    </div>
                    <div class="song-actions-row">
                        <button class="action-btn" title="Play">
                            <i class="fas fa-play"></i>
                        </button>
                        <button class="action-btn" title="Add to Playlist">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="songs-grid-view d-none" id="songsGridContainer">
                <!-- Song Card 1 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Summer Vibes">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">Popular</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Summer Vibes</h5>
                        <p class="song-card-artist">DJ Cool</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Pop</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>2.5K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit" onclick="window.location.href='edit-song.php'">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 2 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Midnight Dreams">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge trending-badge-card" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <i class="fas fa-fire me-1"></i>Trending
                        </div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Midnight Dreams</h5>
                        <p class="song-card-artist">The Nighters</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Electronic</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>6.7K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 3 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Electric Soul">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: linear-gradient(135deg, #22C55E, #4ade80);">New</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Electric Soul</h5>
                        <p class="song-card-artist">Bass Masters</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Rock</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>3.8K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 4 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=400" alt="Moonlight Jazz">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: linear-gradient(135deg, #06b6d4, #22d3ee);">Jazz</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Moonlight Jazz</h5>
                        <p class="song-card-artist">Jazz Quartet</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Jazz</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>1.9K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 5 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Street Rhythm">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge trending-badge-card" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <i class="fas fa-fire me-1"></i>Trending
                        </div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Street Rhythm</h5>
                        <p class="song-card-artist">MC Flow</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Hip Hop</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>5.1K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 6 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Acoustic Love">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: rgba(255, 193, 7, 0.25); color: #ffc107;">Draft</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Acoustic Love</h5>
                        <p class="song-card-artist">Sarah Johnson</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Pop</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>892</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 7 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Smooth Groove">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: linear-gradient(135deg, #ff4f6d, #ff7b8f);">Hot</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Smooth Groove</h5>
                        <p class="song-card-artist">Emma Davis</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">R&B</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>3.2K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Song Card 8 -->
                <div class="song-card">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=400" alt="Neon Lights">
                        <div class="card-play-overlay">
                            <button class="card-play-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="card-badge" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">Popular</div>
                    </div>
                    <div class="song-card-content">
                        <h5 class="song-card-title">Neon Lights</h5>
                        <p class="song-card-artist">Synth Wave</p>
                        <div class="song-card-meta">
                            <span class="genre-badge-card">Electronic</span>
                            <span class="plays-badge"><i class="fas fa-play-circle me-1"></i>4.8K</span>
                        </div>
                    </div>
                    <div class="song-card-actions">
                        <button class="card-action-btn" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="card-action-btn" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <hr class="border-secondary">
            </div>


            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <p class="text-secondary mb-0">Showing 1-8 of 8,432 songs</p>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">1054</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



<script>
    // View Toggle Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const viewCardsBtn = document.getElementById('viewCards');
        const viewTableBtn = document.getElementById('viewTable');
        const songsContainer = document.getElementById('songsContainer');
        const songsGridContainer = document.getElementById('songsGridContainer');

        // Switch to grid view
        if (viewCardsBtn) {
            viewCardsBtn.addEventListener('click', function() {
                viewCardsBtn.classList.add('active');
                viewTableBtn.classList.remove('active');
                songsContainer.classList.add('d-none');
                songsGridContainer.classList.remove('d-none');
            });
        }

        // Switch to table view
        if (viewTableBtn) {
            viewTableBtn.addEventListener('click', function() {
                viewTableBtn.classList.add('active');
                viewCardsBtn.classList.remove('active');
                songsContainer.classList.remove('d-none');
                songsGridContainer.classList.add('d-none');
            });
        }
    });
</script>

<?php include 'footer.php'; ?>
