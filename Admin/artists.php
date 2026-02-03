<?php
$page_title = "Artists - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Artists Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div
                class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="text-white fw-bold mb-1">
                        <span class="gradient-text">Artists Management</span>
                    </h2>
                    <p class="text-secondary mb-0">Manage all artists on your music platform.</p>
                </div>
                <div class="d-flex gap-2">
                    <a href="add_artist.php" class="btn px-4 py-2 rounded-3 fw-semibold"
                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                        <i class="fas fa-plus me-2"></i>Add Artist
                    </a>
                </div>
            </div>


            <!-- <div class="row g-4 mb-4">
                <div class="col-6 col-md-3">
                    <div class="dashboard-card rounded-4 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-3 p-3" style="background: rgba(255, 122, 24, 0.15);">
                                <i class="fas fa-user-music" style="color: #ff7a18; font-size: 24px;"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">248</h4>
                                <small class="text-secondary">Total Artists</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="dashboard-card rounded-4 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-3 p-3" style="background: rgba(34, 197, 94, 0.15);">
                                <i class="fas fa-check-circle" style="color: #22C55E; font-size: 24px;"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">195</h4>
                                <small class="text-secondary">Verified</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="dashboard-card rounded-4 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-3 p-3" style="background: rgba(143, 75, 255, 0.15);">
                                <i class="fas fa-music" style="color: #8f4bff; font-size: 24px;"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">2.5K</h4>
                                <small class="text-secondary">Total Songs</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="dashboard-card rounded-4 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-3 p-3" style="background: rgba(255, 79, 109, 0.15);">
                                <i class="fas fa-fire" style="color: #ff4f6d; font-size: 24px;"></i>
                            </div>
                            <div>
                                <h4 class="text-white mb-0 fw-bold">42</h4>
                                <small class="text-secondary">Featured</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


            <!-- <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-2 px-3 py-2" style="background: rgba(255, 255, 255, 0.06); border-radius: 10px; border: 1px solid rgba(255, 255, 255, 0.1);">
                            <i class="fas fa-search text-secondary"></i>
                            <input type="text" id="searchArtist" placeholder="Search artists..." class="border-0 bg-transparent text-white w-100" style="outline: none;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select custom-input" id="filterGenre">
                            <option value="">All Genres</option>
                            <option value="pop">Pop</option>
                            <option value="rock">Rock</option>
                            <option value="jazz">Jazz</option>
                            <option value="electronic">Electronic</option>
                            <option value="hiphop">Hip Hop</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select custom-input" id="filterStatus">
                            <option value="">All Status</option>
                            <option value="verified">Verified</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="name">Sort by Name</option>
                            <option value="songs">Sort by Songs</option>
                            <option value="plays">Sort by Plays</option>
                            <option value="recent">Most Recent</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="btn-group w-100" role="group">
                            <button type="button" class="btn custom-input active" id="viewGrid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button type="button" class="btn custom-input" id="viewList">
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

            <!-- Artists Container (Grid/List) -->
            <div class="artist-grid" id="artistsContainer">
                <!-- Artist Card 1 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1511367461989-f85a21fda167?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="verified-badge">
                            <i class="fas fa-check-circle" style="color: #22C55E;"></i>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">John Anderson</h5>
                            <p class="artist-genre text-secondary mb-3">Pop, Rock</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">24</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">156K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">12.5K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 2 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="verified-badge">
                            <i class="fas fa-check-circle" style="color: #22C55E;"></i>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">Sarah Williams</h5>
                            <p class="artist-genre text-secondary mb-3">Electronic, Dance</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">18</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">289K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">25.8K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 3 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">Mike Thompson</h5>
                            <p class="artist-genre text-secondary mb-3">Jazz, Blues</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">31</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">98K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">8.2K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 4 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="verified-badge">
                            <i class="fas fa-check-circle" style="color: #22C55E;"></i>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">Emma Davis</h5>
                            <p class="artist-genre text-secondary mb-3">R&B, Soul</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">15</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">412K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">35.6K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 5 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <div class="verified-badge">
                            <i class="fas fa-check-circle" style="color: #22C55E;"></i>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">Alex Martinez</h5>
                            <p class="artist-genre text-secondary mb-3">Hip Hop, Rap</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">42</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">523K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">48.9K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 6 -->
                <div class="artist-card rounded-4 overflow-hidden">
                    <div class="position-relative artist-cover-wrapper">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Artist"
                            class="artist-cover">
                        <div class="artist-overlay">
                            <button class="btn btn-sm rounded-circle"
                                style="background: rgba(255, 122, 24, 0.9); color: white; width: 40px; height: 40px;">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="artist-info">
                        <div class="artist-main-info">
                            <h5 class="artist-name text-white mb-1">Lisa Chen</h5>
                            <p class="artist-genre text-secondary mb-3">Classical, Piano</p>
                        </div>
                        <div class="artist-stats">
                            <div class="text-center">
                                <div class="text-white fw-semibold">12</div>
                                <small class="text-secondary">Songs</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">67K</div>
                                <small class="text-secondary">Plays</small>
                            </div>
                            <div class="text-center">
                                <div class="text-white fw-semibold">5.4K</div>
                                <small class="text-secondary">Followers</small>
                            </div>
                        </div>
                        <div class="artist-actions">
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(255, 122, 24, 0.15); color: #ff7a18; border: none;">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                            <button class="btn btn-sm flex-grow-1 rounded-3"
                                style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;">
                                <i class="fas fa-edit me-1"></i>Edit
                            </button>
                            <button class="btn btn-sm rounded-3"
                                style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;">
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


<script>

    document.getElementById('viewCards').addEventListener('click', function () {
        const container = document.getElementById('artistsContainer');
        container.className = 'artist-grid';
        this.classList.add('active');
        document.getElementById('viewTable').classList.remove('active');
    });


    document.getElementById('viewTable').addEventListener('click', function () {
        const container = document.getElementById('artistsContainer');
        container.className = 'artist-list';
        this.classList.add('active');
        document.getElementById('viewCards').classList.remove('active');
    });


</script>

<?php include 'footer.php'; ?>