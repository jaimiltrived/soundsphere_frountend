<?php
$page_title = "Create Playlist - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Create Playlist Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-2 mb-2">

                </div>
                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Create New Playlist</span>
                </h2>
                <p class="text-secondary mb-0">Curate a perfect collection of songs for your audience.</p>
            </div>

            <div class="row g-4">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <!-- Playlist Details -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">

                        <form id="createPlaylistForm">
                            <div class="row g-3">

                                <div class="col-12">
                                    <label class="form-label text-white fw-semibold">Playlist Style</label>
                                    <div class="playlist-style-selector">
                                        <!-- Icon Selection -->
                                        <div class="style-option">
                                            <label class="mb-2 d-block text-secondary">Choose Icon</label>
                                            <div class="icon-grid">
                                                <button type="button" class="icon-btn active" data-icon="music">
                                                    <i class="fas fa-music"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="fire">
                                                    <i class="fas fa-fire"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="heart">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="star">
                                                    <i class="fas fa-star"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="bolt">
                                                    <i class="fas fa-bolt"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="headphones">
                                                    <i class="fas fa-headphones"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="guitar">
                                                    <i class="fas fa-guitar"></i>
                                                </button>
                                                <button type="button" class="icon-btn" data-icon="moon">
                                                    <i class="fas fa-moon"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Color Selection -->
                                        <div class="style-option">
                                            <label class="mb-2 d-block text-secondary">Choose Gradient</label>
                                            <div class="color-grid">
                                                <button type="button" class="color-btn active" data-gradient="orange"
                                                    style="background: linear-gradient(135deg, #ff7a18, #ffb347);"></button>
                                                <button type="button" class="color-btn" data-gradient="purple"
                                                    style="background: linear-gradient(135deg, #8f4bff, #b794f6);"></button>
                                                <button type="button" class="color-btn" data-gradient="blue"
                                                    style="background: linear-gradient(135deg, #3B82F6, #60A5FA);"></button>
                                                <button type="button" class="color-btn" data-gradient="green"
                                                    style="background: linear-gradient(135deg, #22C55E, #4ade80);"></button>
                                                <button type="button" class="color-btn" data-gradient="red"
                                                    style="background: linear-gradient(135deg, #ff4f6d, #ff7b8f);"></button>
                                                <button type="button" class="color-btn" data-gradient="cyan"
                                                    style="background: linear-gradient(135deg, #06b6d4, #22d3ee);"></button>
                                                <button type="button" class="color-btn" data-gradient="pink"
                                                    style="background: linear-gradient(135deg, #ec4899, #f472b6);"></button>
                                                <button type="button" class="color-btn" data-gradient="yellow"
                                                    style="background: linear-gradient(135deg, #f59e0b, #fbbf24);"></button>
                                            </div>
                                        </div>

                                        <!-- Preview -->
                                        <div class="style-preview">
                                            <div class="playlist-preview-card" id="playlistPreview"
                                                style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                                <i class="fas fa-music"></i>
                                            </div>
                                            <small class="text-secondary">Preview</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Playlist Name -->
                                <div class="col-12">
                                    <label class="form-label text-white fw-semibold">Playlist Name *</label>
                                    <input type="text" class="form-control custom-input"
                                        placeholder="Enter playlist name" required>
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label class="form-label text-white fw-semibold">Description *</label>
                                    <textarea class="form-control custom-input" rows="3"
                                        placeholder="Describe your playlist, its mood, or purpose..."
                                        required></textarea>
                                </div>

                                <!-- Category & Tags -->
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Category *</label>
                                    <select class="form-select custom-input" required>
                                        <option value="">Select category</option>
                                        <option value="featured">Featured</option>
                                        <option value="trending">Trending</option>
                                        <option value="mood">Mood & Activity</option>
                                        <option value="genre">Genre</option>
                                        <option value="decade">Decade</option>
                                        <option value="workout">Workout</option>
                                        <option value="party">Party</option>
                                        <option value="chill">Chill</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Tags</label>
                                    <input type="text" class="form-control custom-input"
                                        placeholder="happy, upbeat, summer">
                                    <small class="text-secondary">Comma separated</small>
                                </div>
                            </div>

                            <div class="d-flex gap-3 mt-4">
                                <button type="submit" class="btn px-4 py-2 rounded-3 fw-semibold"
                                    style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                                    <i class="fas fa-plus me-2"></i>Add Playlist
                                </button>
                                <button type="reset" class="btn px-4 py-2 rounded-3 fw-semibold"
                                    style="background: rgba(255, 255, 255, 0.06); color: white; border: 1px solid rgba(255, 255, 255, 0.1);">
                                    <i class="fas fa-redo me-2"></i>Reset
                                </button>
                                <a href="playlists.php" class="btn px-4 py-2 rounded-3 fw-semibold"
                                    style="background: transparent; color: #aaa; border: 1px solid rgba(255, 255, 255, 0.1);">
                                    <i class="fas fa-times me-2"></i>Cancel
                                </a>
                            </div>
                        </form>

                    </div>

                    <!-- Add Songs -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-music me-2"></i>Songs (<span
                                    id="songCount">0</span>)</h5>
                            <div class="d-flex gap-2">
                                <input type="text" class="search-songs-input" id="searchSongs"
                                    placeholder="Search songs...">
                                <button type="button" class="btn-add-all" onclick="addAllSongs()">
                                    <i class="fas fa-plus-circle me-1"></i>Add All
                                </button>
                            </div>
                        </div>
                        <div class="form-card-body">
                            <!-- Selected Songs List -->
                            <div id="selectedSongsList" class="selected-songs-area">
                                <div class="empty-state">
                                    <i class="fas fa-music"></i>
                                    <p>No songs added yet</p>
                                    <small>Browse available songs below and click to add</small>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="songs-divider">
                                <span>Available Songs</span>
                            </div>

                            <!-- Available Songs -->
                            <div class="available-songs-list">
                                <!-- Song 1 -->
                                <div class="available-song-item" data-song-id="1">
                                    <div class="song-info-compact">
                                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=100"
                                            alt="Song">
                                        <div>
                                            <div class="song-title-compact">Summer Vibes</div>
                                            <div class="song-artist-compact">DJ Cool</div>
                                        </div>
                                    </div>
                                    <div class="song-meta-compact">
                                        <span class="song-duration">3:45</span>
                                        <button type="button" class="btn-add-song"
                                            onclick="addSong(this, 1, 'Summer Vibes', 'DJ Cool', '3:45')">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Song 2 -->
                                <div class="available-song-item" data-song-id="2">
                                    <div class="song-info-compact">
                                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=100"
                                            alt="Song">
                                        <div>
                                            <div class="song-title-compact">Midnight Dreams</div>
                                            <div class="song-artist-compact">The Nighters</div>
                                        </div>
                                    </div>
                                    <div class="song-meta-compact">
                                        <span class="song-duration">4:12</span>
                                        <button type="button" class="btn-add-song"
                                            onclick="addSong(this, 2, 'Midnight Dreams', 'The Nighters', '4:12')">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Song 3 -->
                                <div class="available-song-item" data-song-id="3">
                                    <div class="song-info-compact">
                                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=100"
                                            alt="Song">
                                        <div>
                                            <div class="song-title-compact">Electric Soul</div>
                                            <div class="song-artist-compact">Bass Masters</div>
                                        </div>
                                    </div>
                                    <div class="song-meta-compact">
                                        <span class="song-duration">3:28</span>
                                        <button type="button" class="btn-add-song"
                                            onclick="addSong(this, 3, 'Electric Soul', 'Bass Masters', '3:28')">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Song 4 -->
                                <div class="available-song-item" data-song-id="4">
                                    <div class="song-info-compact">
                                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=100"
                                            alt="Song">
                                        <div>
                                            <div class="song-title-compact">Moonlight Jazz</div>
                                            <div class="song-artist-compact">Jazz Quartet</div>
                                        </div>
                                    </div>
                                    <div class="song-meta-compact">
                                        <span class="song-duration">5:03</span>
                                        <button type="button" class="btn-add-song"
                                            onclick="addSong(this, 4, 'Moonlight Jazz', 'Jazz Quartet', '5:03')">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>

                                <!-- Song 5 -->
                                <div class="available-song-item" data-song-id="5">
                                    <div class="song-info-compact">
                                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=100"
                                            alt="Song">
                                        <div>
                                            <div class="song-title-compact">Street Rhythm</div>
                                            <div class="song-artist-compact">MC Flow</div>
                                        </div>
                                    </div>
                                    <div class="song-meta-compact">
                                        <span class="song-duration">3:56</span>
                                        <button type="button" class="btn-add-song"
                                            onclick="addSong(this, 5, 'Street Rhythm', 'MC Flow', '3:56')">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Settings -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-cog me-2"></i>Settings</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="mb-3">
                                <label class="form-label text-white fw-semibold mt-3">Visibility</label>
                                <select class="form-select custom-input">
                                    <option value="public" selected>Public</option>
                                    <option value="private">Private</option>
                                    <option value="unlisted">Unlisted</option>
                                </select>
                            </div>

                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-0 text-white">Featured Playlist</label>
                                    <small class="text-secondary d-block">Show in featured section</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="featuredPlaylist">
                                </div>
                            </div>

                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-0 text-white">Collaborative</label>
                                    <small class="text-secondary d-block">Allow others to add songs</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="collaborative">
                                </div>
                            </div>

                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-0 text-white">Auto-Update</label>
                                    <small class="text-secondary d-block">Add new trending songs</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="autoUpdate">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Summary -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-info-circle me-2"></i>Summary</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="summary-item">
                                <span class="summary-label">Total Songs</span>
                                <span class="summary-value" id="totalSongs">0</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Total Duration</span>
                                <span class="summary-value" id="totalDuration">0:00</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Created By</span>
                                <span class="summary-value">Admin</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Status</span>
                                <span class="summary-value">
                                    <span class="status-badge-small draft">Draft</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->

        </div>
    </div>
</div>

<style>
    /* Playlist Style Selector */
    .playlist-style-selector {
        display: grid;
        grid-template-columns: 1fr 1fr auto;
        gap: 2rem;
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
    }

    .icon-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.5rem;
    }

    .icon-btn {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        background: rgba(255, 255, 255, 0.05);
        color: #aaa;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .icon-btn:hover,
    .icon-btn.active {
        background: rgba(255, 122, 24, 0.15);
        border-color: #ff7a18;
        color: #ff7a18;
    }

    .color-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.5rem;
    }

    .color-btn {
        width: 48px;
        height: 48px;
        border-radius: 10px;
        border: 2px solid transparent;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .color-btn:hover,
    .color-btn.active {
        border-color: white;
        transform: scale(1.05);
    }

    .playlist-preview-card {
        width: 100px;
        height: 100px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: rgba(255, 255, 255, 0.4);
        margin-bottom: 0.5rem;
    }

    .style-preview {
        text-align: center;
    }


    .custom-input {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
        padding: 12px 16px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .custom-input:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #ff7a18;
        color: white;
        box-shadow: 0 0 0 0.2rem rgba(255, 122, 24, 0.25);
    }

    .custom-input::placeholder {
        color: #666;
    }

    .custom-input option {
        background: #1a1a1a;
        color: white;
    }

    .custom-input input {
        background: #1a1a1a;
        color: white;
    }

    /* Songs Section */
    .search-songs-input {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 13px;
        width: 200px;
    }

    .search-songs-input:focus {
        outline: none;
        border-color: #ff7a18;
    }

    .search-songs-input::placeholder {
        color: #666;
    }

    .btn-add-all {
        background: rgba(34, 197, 94, 0.15);
        border: 1px solid rgba(34, 197, 94, 0.3);
        color: #22C55E;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-add-all:hover {
        background: rgba(34, 197, 94, 0.25);
    }

    /* Selected Songs Area */
    .selected-songs-area {
        min-height: 200px;
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 1.5rem;
    }

    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 3rem;
        text-align: center;
        color: #666;
    }

    .empty-state i {
        font-size: 48px;
        margin-bottom: 1rem;
        color: #444;
    }

    .selected-song-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        margin-bottom: 0.5rem;
    }

    .drag-handle {
        color: #666;
        cursor: grab;
        margin-right: 0.75rem;
    }

    .song-number-selected {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        background: rgba(255, 122, 24, 0.15);
        color: #ff7a18;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 600;
        margin-right: 0.75rem;
    }

    .btn-remove-song {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        border: none;
        background: rgba(255, 79, 109, 0.15);
        color: #ff4f6d;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-remove-song:hover {
        background: rgba(255, 79, 109, 0.25);
    }

    /* Songs Divider */
    .songs-divider {
        text-align: center;
        margin: 1.5rem 0;
        position: relative;
    }

    .songs-divider::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 1px;
        background: rgba(255, 255, 255, 0.1);
    }

    .songs-divider span {
        position: relative;
        background: rgba(20, 20, 25, 0.95);
        padding: 0 1rem;
        color: #888;
        font-size: 13px;
        font-weight: 500;
    }

    /* Available Songs */
    .available-songs-list {
        max-height: 400px;
        overflow-y: auto;
    }

    .available-song-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }

    .available-song-item:hover {
        background: rgba(255, 255, 255, 0.03);
    }

    .song-info-compact {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .song-info-compact img {
        width: 40px;
        height: 40px;
        border-radius: 6px;
        object-fit: cover;
    }

    .song-title-compact {
        color: white;
        font-size: 14px;
        font-weight: 500;
    }

    .song-artist-compact {
        color: #888;
        font-size: 12px;
    }

    .song-meta-compact {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .song-duration {
        color: #666;
        font-size: 13px;
    }

    .btn-add-song {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: none;
        background: rgba(34, 197, 94, 0.15);
        color: #22C55E;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-add-song:hover {
        background: rgba(34, 197, 94, 0.25);
    }

    .btn-add-song:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Summary */
    .summary-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .summary-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .summary-label {
        color: #888;
        font-size: 14px;
    }

    .summary-value {
        color: white;
        font-weight: 600;
        font-size: 14px;
    }

    .status-badge-small {
        padding: 4px 8px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 600;
    }

    .status-badge-small.draft {
        background: rgba(255, 193, 7, 0.15);
        color: #FFC107;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .playlist-style-selector {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .style-preview {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
    }
</style>

<script>
    let selectedSongs = [];
    let currentIcon = 'music';
    let currentGradient = 'orange';

    const gradients = {
        orange: 'linear-gradient(135deg, #ff7a18, #ffb347)',
        purple: 'linear-gradient(135deg, #8f4bff, #b794f6)',
        blue: 'linear-gradient(135deg, #3B82F6, #60A5FA)',
        green: 'linear-gradient(135deg, #22C55E, #4ade80)',
        red: 'linear-gradient(135deg, #ff4f6d, #ff7b8f)',
        cyan: 'linear-gradient(135deg, #06b6d4, #22d3ee)',
        pink: 'linear-gradient(135deg, #ec4899, #f472b6)',
        yellow: 'linear-gradient(135deg, #f59e0b, #fbbf24)'
    };

    // Icon selection
    document.querySelectorAll('.icon-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.icon-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentIcon = this.dataset.icon;
            updatePreview();
        });
    });

    // Color selection
    document.querySelectorAll('.color-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.color-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentGradient = this.dataset.gradient;
            updatePreview();
        });
    });

    function updatePreview() {
        const preview = document.getElementById('playlistPreview');
        preview.style.background = gradients[currentGradient];
        preview.innerHTML = `<i class="fas fa-${currentIcon}"></i>`;
    }

    // Add song to playlist
    function addSong(button, id, title, artist, duration) {
        if (selectedSongs.find(s => s.id === id)) return;

        selectedSongs.push({ id, title, artist, duration });
        button.disabled = true;
        button.innerHTML = '<i class="fas fa-check"></i>';

        updateSelectedSongs();
        updateSummary();
    }

    function updateSelectedSongs() {
        const container = document.getElementById('selectedSongsList');

        if (selectedSongs.length === 0) {
            container.innerHTML = `
            <div class="empty-state">
                <i class="fas fa-music"></i>
                <p>No songs added yet</p>
                <small>Browse available songs below and click to add</small>
            </div>
        `;
            return;
        }

        container.innerHTML = selectedSongs.map((song, index) => `
        <div class="selected-song-item">
            <div class="d-flex align-items-center">
                <i class="fas fa-grip-vertical drag-handle"></i>
                <div class="song-number-selected">${index + 1}</div>
                <div class="song-info-compact">
                    <div>
                        <div class="song-title-compact">${song.title}</div>
                        <div class="song-artist-compact">${song.artist}</div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="song-duration">${song.duration}</span>
                <button type="button" class="btn-remove-song" onclick="removeSong(${song.id})">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    `).join('');
    }

    function removeSong(id) {
        selectedSongs = selectedSongs.filter(s => s.id !== id);

        // Re-enable add button
        const addBtn = document.querySelector(`[data-song-id="${id}"] .btn-add-song`);
        if (addBtn) {
            addBtn.disabled = false;
            addBtn.innerHTML = '<i class="fas fa-plus"></i>';
        }

        updateSelectedSongs();
        updateSummary();
    }

    function updateSummary() {
        document.getElementById('songCount').textContent = selectedSongs.length;
        document.getElementById('totalSongs').textContent = selectedSongs.length;

        // Calculate total duration
        let totalMinutes = 0;
        selectedSongs.forEach(song => {
            const parts = song.duration.split(':');
            totalMinutes += parseInt(parts[0]) + parseInt(parts[1]) / 60;
        });

        const hours = Math.floor(totalMinutes / 60);
        const minutes = Math.round(totalMinutes % 60);
        document.getElementById('totalDuration').textContent = hours > 0 ? `${hours}h ${minutes}m` : `${minutes}m`;
    }

  
    // Form submission
   
</script>

<?php include 'footer.php'; ?>