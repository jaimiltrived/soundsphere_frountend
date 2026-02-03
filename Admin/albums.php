<?php
$page_title = "Albums - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Albums Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div
                class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="text-white fw-bold mb-1">
                        <span class="gradient-text">Albums Collection</span>
                    </h2>
                    <p class="text-secondary mb-0">Browse and manage all albums in your music catalog.</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn px-4 py-2 rounded-3 fw-semibold"
                        style="background: transparent; color: white; border: 1px solid rgba(255, 255, 255, 0.2);">
                        <i class="fas fa-filter me-2"></i>Filters
                    </button>
                    <button class="btn px-4 py-2 rounded-3 fw-semibold"
                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;"
                        onclick="window.location.href='add-album.php'">
                        <i class="fas fa-plus me-2"></i>Add Album
                    </button>
                </div>
            </div>

            <!-- Stats Row -->
            <!-- <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <div class="album-stat-card">
                        <div class="stat-number gradient-text">1,256</div>
                        <div class="stat-label">Total Albums</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up me-1"></i>+5%
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="album-stat-card">
                        <div class="stat-number"
                            style="background: linear-gradient(135deg, #22C55E, #4ade80); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            1,184</div>
                        <div class="stat-label">Published</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up me-1"></i>+12
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="album-stat-card">
                        <div class="stat-number"
                            style="background: linear-gradient(135deg, #8f4bff, #b794f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            248</div>
                        <div class="stat-label">Artists</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up me-1"></i>+8
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="album-stat-card">
                        <div class="stat-number"
                            style="background: linear-gradient(135deg, #3B82F6, #60A5FA); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            4.2M</div>
                        <div class="stat-label">Total Streams</div>
                        <div class="stat-trend positive">
                            <i class="fas fa-arrow-up me-1"></i>+23%
                        </div>
                    </div>
                </div>
            </div> -->

            

            <!-- Search and View Options -->
            <!-- <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-3">
                        <div class="search-box-album">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchAlbum" placeholder="Search albums or artists...">
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterYear">
                            <option value="">All Years</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterGenre">
                            <option value="">All Genres</option>
                            <option value="pop">Pop</option>
                            <option value="rock">Rock</option>
                            <option value="electronic">Electronic</option>
                            <option value="hiphop">Hip Hop</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="recent">Recent</option>
                            <option value="popular">Popular</option>
                            <option value="az">A-Z</option>
                            <option value="year">Year</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="view-toggle-group">
                            <button class="view-toggle-btn active" id="viewLarge">
                                <i class="fas fa-th-large"></i>
                             
                            </button>
                            <button class="view-toggle-btn" id="viewCompact">
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

            <!-- Albums Grid (Large View - Default) -->
            <div class="albums-large-view" id="albumsContainer">
                <!-- Album Card 1 -->
                <div class="album-large-card" data-genre="pop" data-year="2024">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2024</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Summer Hits 2024</h5>
                        <p class="album-artist-large">Various Artists</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>12 songs</span>
                            <span><i class="fas fa-clock me-1"></i>45 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 2 -->
                <div class="album-large-card" data-genre="electronic" data-year="2024">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2024</span>
                            <span class="type-badge">EP</span>
                        </div>
                        <h5 class="album-title-large">Electronic Dreams</h5>
                        <p class="album-artist-large">DJ Shadow</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>8 songs</span>
                            <span><i class="fas fa-clock me-1"></i>32 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 3 -->
                <div class="album-large-card" data-genre="rock" data-year="2023">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2023</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Rock Legends</h5>
                        <p class="album-artist-large">The Rockers</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>15 songs</span>
                            <span><i class="fas fa-clock me-1"></i>58 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 4 -->
                <div class="album-large-card" data-genre="pop" data-year="2023">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2023</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Midnight Jazz</h5>
                        <p class="album-artist-large">Jazz Quartet</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>10 songs</span>
                            <span><i class="fas fa-clock me-1"></i>42 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 5 -->
                <div class="album-large-card" data-genre="hiphop" data-year="2024">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2024</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Hip Hop Classics</h5>
                        <p class="album-artist-large">MC Flow</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>14 songs</span>
                            <span><i class="fas fa-clock me-1"></i>52 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 6 -->
                <div class="album-large-card" data-genre="pop" data-year="2023">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2023</span>
                            <span class="type-badge single">Single</span>
                        </div>
                        <h5 class="album-title-large">Acoustic Sessions</h5>
                        <p class="album-artist-large">Sarah Johnson</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>9 songs</span>
                            <span><i class="fas fa-clock me-1"></i>38 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 7 -->
                <div class="album-large-card" data-genre="electronic" data-year="2024">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2024</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Neon Nights</h5>
                        <p class="album-artist-large">Synth Wave</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>11 songs</span>
                            <span><i class="fas fa-clock me-1"></i>48 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Album Card 8 -->
                <div class="album-large-card" data-genre="pop" data-year="2024">
                    <div class="album-cover-large">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600" alt="Album Cover">
                        <div class="album-overlay-large">
                            <button class="play-album-btn">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="overlay-actions">
                                <button class="overlay-action-btn" title="Like">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button class="overlay-action-btn" title="Share">
                                    <i class="fas fa-share-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="album-info-large">
                        <div class="album-meta-badges">
                            <span class="year-badge">2024</span>
                            <span class="type-badge">Album</span>
                        </div>
                        <h5 class="album-title-large">Pop Chronicles</h5>
                        <p class="album-artist-large">Emma Davis</p>
                        <div class="album-stats-large">
                            <span><i class="fas fa-music me-1"></i>13 songs</span>
                            <span><i class="fas fa-clock me-1"></i>50 min</span>
                        </div>
                        <div class="album-actions-large">
                            <button class="btn-album-action primary">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn-album-action secondary">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn-album-action danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Albums Compact View (List) -->
            <div class="albums-compact-view" id="albumsCompactContainer">
                <!-- Album Row 1 -->
                <div class="album-row" data-genre="pop" data-year="2024">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Summer Hits 2024</h6>
                        <p class="album-artist-row mb-0">Various Artists</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2024</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>12 songs
                    </div>
                    <div class="album-duration-row">45 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 2 -->
                <div class="album-row" data-genre="electronic" data-year="2024">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Electronic Dreams</h6>
                        <p class="album-artist-row mb-0">DJ Shadow</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small ep">EP</span>
                    </div>
                    <div class="album-year-row">2024</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>8 songs
                    </div>
                    <div class="album-duration-row">32 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 3 -->
                <div class="album-row" data-genre="rock" data-year="2023">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Rock Legends</h6>
                        <p class="album-artist-row mb-0">The Rockers</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2023</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>15 songs
                    </div>
                    <div class="album-duration-row">58 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 4 -->
                <div class="album-row" data-genre="pop" data-year="2023">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Midnight Jazz</h6>
                        <p class="album-artist-row mb-0">Jazz Quartet</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2023</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>10 songs
                    </div>
                    <div class="album-duration-row">42 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 5 -->
                <div class="album-row" data-genre="hiphop" data-year="2024">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Hip Hop Classics</h6>
                        <p class="album-artist-row mb-0">MC Flow</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2024</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>14 songs
                    </div>
                    <div class="album-duration-row">52 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 6 -->
                <div class="album-row" data-genre="pop" data-year="2023">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Acoustic Sessions</h6>
                        <p class="album-artist-row mb-0">Sarah Johnson</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small single">Single</span>
                    </div>
                    <div class="album-year-row">2023</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>9 songs
                    </div>
                    <div class="album-duration-row">38 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 7 -->
                <div class="album-row" data-genre="electronic" data-year="2024">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Neon Nights</h6>
                        <p class="album-artist-row mb-0">Synth Wave</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2024</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>11 songs
                    </div>
                    <div class="album-duration-row">48 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Row 8 -->
                <div class="album-row" data-genre="pop" data-year="2024">
                    <div class="album-cover-small">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=600" alt="Album">
                        <div class="play-overlay-small">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="album-details-row">
                        <h6 class="album-title-row mb-0">Pop Chronicles</h6>
                        <p class="album-artist-row mb-0">Emma Davis</p>
                    </div>
                    <div class="album-type-row">
                        <span class="type-badge-small">Album</span>
                    </div>
                    <div class="album-year-row">2024</div>
                    <div class="album-songs-row">
                        <i class="fas fa-music me-1"></i>13 songs
                    </div>
                    <div class="album-duration-row">50 min</div>
                    <div class="album-actions-row">
                        <button class="action-btn-row view" title="View">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="action-btn-row edit" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn-row delete" title="Delete">
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
                <p class="text-secondary mb-0">Showing 1-8 of 1,256 albums</p>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">157</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



<script>
    document.getElementById('viewCards').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewTable').classList.remove('active');
        document.getElementById('albumsContainer').style.display = 'grid';
        document.getElementById('albumsCompactContainer').style.display = 'none';
    });

    // View toggle - Compact View
    document.getElementById('viewTable').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewCards').classList.remove('active');
        document.getElementById('albumsContainer').style.display = 'none';
        document.getElementById('albumsCompactContainer').style.display = 'block';
    });

    // Delete confirmation - Large cards
    document.querySelectorAll('.btn-album-action.danger').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (confirm('Are you sure you want to delete this album?')) {
                this.closest('.album-large-card').remove();
            }
        });
    });

    // Delete confirmation - Compact rows
    document.querySelectorAll('.action-btn-row.delete').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (confirm('Are you sure you want to delete this album?')) {
                this.closest('.album-row').remove();
            }
        });
    });
</script>

<?php include 'footer.php'; ?>