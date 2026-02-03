<?php
$page_title = "My Songs - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- My Songs Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Page Header -->
            <div class="page-header">
                <div class="header-left">
                    <h1>My Songs</h1>
                    <p>Manage and track your music collection</p>
                </div>
                <div class="header-right">
                    <a href="upload.php" class="btn-action btn-upload">
                        <i class="fas fa-plus"></i>
                        Upload New Song
                    </a>
                </div>
            </div>

            <!-- Stats Overview -->
            <div class="stats-overview">
                <div class="stat-card">
                    <div class="stat-label">Total Songs</div>
                    <div class="stat-value">48</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Published</div>
                    <div class="stat-value">42</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Plays</div>
                    <div class="stat-value">245.6K</div>
                </div>
                <div class="stat-card">
                    <div class="stat-label">Total Likes</div>
                    <div class="stat-value">18.2K</div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="search-box-user">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchSong" placeholder="Search your songs...">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <select class="form-select custom-input" id="filterGenre">
                            <option value="">All Genres</option>
                            <option value="pop">Pop</option>
                            <option value="rock">Rock</option>
                            <option value="hiphop">Hip Hop</option>
                            <option value="electronic">Electronic</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-3">
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

            <!-- Songs Grid View -->
            <div class="songs-grid active" id="gridView">
                <!-- Song Card 1 -->
                <div class="song-card" data-status="published" data-genre="pop">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            45.2K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Summer Vibes</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Jan 15, 2025</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                3.2K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 2 -->
                <div class="song-card" data-status="published" data-genre="electronic">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            38.1K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Midnight Dreams</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Jan 10, 2025</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                2.8K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 3 -->
                <div class="song-card" data-status="published" data-genre="electronic">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            32.5K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Electric Soul</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Jan 5, 2025</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                2.5K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 4 -->
                <div class="song-card" data-status="published" data-genre="pop">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            28.9K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Smooth Groove</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Dec 28, 2024</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                2.1K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 5 -->
                <div class="song-card" data-status="draft" data-genre="rock">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Song">
                        <div class="song-status status-draft">Draft</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            0
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Rock Anthem</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Jan 20, 2025</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                0
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 6 -->
                <div class="song-card" data-status="published" data-genre="hip-hop">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            25.4K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Street Rhythm</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Dec 20, 2024</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                1.9K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 7 -->
                <div class="song-card" data-status="published" data-genre="pop">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Song">
                        <div class="song-status status-published">Published</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            22.1K
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Neon Lights</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Dec 15, 2024</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                1.7K
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Song Card 8 -->
                <div class="song-card" data-status="draft" data-genre="electronic">
                    <div class="song-cover">
                        <img src="https://images.unsplash.com/photo-1520523839897-bd0b52f945a0?w=400" alt="Song">
                        <div class="song-status status-draft">Draft</div>
                        <div class="song-plays">
                            <i class="fas fa-play"></i>
                            0
                        </div>
                    </div>
                    <div class="song-info">
                        <div class="song-title">Future Bass</div>
                        <div class="song-artist">DJ Cool</div>
                        <div class="song-meta">
                            <div class="song-date">Jan 22, 2025</div>
                            <div class="song-likes">
                                <i class="fas fa-heart"></i>
                                0
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Songs List View -->
            <div class="songs-list" id="listView">
                <div class="list-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Song</th>
                                <th>Status</th>
                                <th>Genre</th>
                                <th>Plays</th>
                                <th>Likes</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Summer Vibes</h6>
                                            <p>DJ Cool • 3:45</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-published">Published</span></td>
                                <td>Pop</td>
                                <td class="table-stats"><strong>45.2K</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>3.2K</strong></td>
                                <td>Jan 15, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Midnight Dreams</h6>
                                            <p>DJ Cool • 4:12</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-published">Published</span></td>
                                <td>Electronic</td>
                                <td class="table-stats"><strong>38.1K</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>2.8K</strong></td>
                                <td>Jan 10, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Electric Soul</h6>
                                            <p>DJ Cool • 3:28</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-published">Published</span></td>
                                <td>Electronic</td>
                                <td class="table-stats"><strong>32.5K</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>2.5K</strong></td>
                                <td>Jan 5, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Smooth Groove</h6>
                                            <p>DJ Cool • 3:56</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-published">Published</span></td>
                                <td>Pop</td>
                                <td class="table-stats"><strong>28.9K</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>2.1K</strong></td>
                                <td>Dec 28, 2024</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Rock Anthem</h6>
                                            <p>DJ Cool • 4:30</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-draft">Draft</span></td>
                                <td>Rock</td>
                                <td class="table-stats"><strong>0</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>0</strong></td>
                                <td>Jan 20, 2025</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-song-info">
                                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=100"
                                            alt="Song" class="table-song-thumb">
                                        <div class="table-song-details">
                                            <h6>Street Rhythm</h6>
                                            <p>DJ Cool • 3:15</p>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-published">Published</span></td>
                                <td>Hip Hop</td>
                                <td class="table-stats"><strong>25.4K</strong></td>
                                <td class="table-stats" style="color: #ec4899;"><strong>1.9K</strong></td>
                                <td>Dec 20, 2024</td>
                            </tr>
                        </tbody>
                    </table>
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

<script>

    document.getElementById('viewCards').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewTable').classList.remove('active');
        document.getElementById('gridView').style.display = 'grid';
        document.getElementById('listView').style.display = 'none';
    });

    // View toggle - Table
    document.getElementById('viewTable').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewCards').classList.remove('active');
        document.getElementById('gridView').style.display = 'none';
        document.getElementById('listView').style.display = 'block';
    });
</script>

<?php include 'footer.php'; ?>