<?php
$page_title = "Add Album - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Add Album Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <a href="albums.php" class="text-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Albums
                    </a>
                </div>
                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Add New Album</span>
                </h2>
                <p class="text-secondary mb-0">Create a new album and add tracks to your music collection.</p>
            </div>

            <div class="row g-4">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <!-- Basic Information -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-compact-disc me-2"></i>Album
                                Information</h5>
                        </div>
                        <div class="form-card-body">
                            <form id="addAlbumForm">
                                <div class="row g-3">
                                    <!-- Album Cover -->
                                    <div class="col-12">
                                        <label class="form-label text-white mt-2">Album Cover *</label>
                                        <div class="album-cover-upload">
                                            <div class="cover-preview" id="coverPreview">
                                                <i class="fas fa-image"></i>
                                                <p class="mt-2 mb-0">Click to upload</p>
                                            </div>
                                            <input type="file" id="albumCover" accept="image/*" style="display: none;">
                                            <div class="cover-upload-info">
                                                <button type="button" class="btn-upload-cover"
                                                    onclick="document.getElementById('albumCover').click()">
                                                    <i class="fas fa-cloud-upload-alt me-2"></i>Upload Cover Art
                                                </button>
                                                <p class="text-secondary mb-0 mt-2">
                                                    <small>Recommended: 3000x3000px, JPG or PNG, Max 10MB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Album Title -->
                                    <div class="col-md-8">
                                        <label class="form-label text-white fw-semibold">Album Title *</label>
                                        <input type="text" class="form-control custom-input"
                                            placeholder="Enter album title" required>
                                    </div>

                                    <!-- Album Type -->
                                    <div class="col-md-4">
                                        <label class="form-label text-white fw-semibold">Album Type *</label>
                                        <select class="form-select custom-input" required>
                                            <option value="">Select type</option>
                                            <option value="album">Album</option>
                                            <option value="ep">EP</option>
                                            <option value="single">Single</option>
                                            <option value="compilation">Compilation</option>
                                        </select>
                                    </div>

                                    <!-- Artist -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Artist *</label>
                                        <select class="form-select custom-input" required>
                                            <option value="">Select artist</option>
                                            <option value="1">The Rockers</option>
                                            <option value="2">DJ Shadow</option>
                                            <option value="3">Jazz Quartet</option>
                                            <option value="4">MC Flow</option>
                                            <option value="5">Sarah Johnson</option>
                                        </select>
                                    </div>

                                    <!-- Genre -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Genre *</label>
                                        <select class="form-select custom-input" required>
                                            <option value="">Select genre</option>
                                            <option value="pop">Pop</option>
                                            <option value="rock">Rock</option>
                                            <option value="electronic">Electronic</option>
                                            <option value="hiphop">Hip Hop</option>
                                            <option value="jazz">Jazz</option>
                                            <option value="classical">Classical</option>
                                            <option value="rnb">R&B</option>
                                        </select>
                                    </div>

                                    <!-- Release Date -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Release Date *</label>
                                        <input type="date" class="form-control custom-input" required>
                                    </div>

                                    <!-- Record Label -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Record Label</label>
                                        <input type="text" class="form-control custom-input"
                                            placeholder="Enter record label">
                                    </div>

                                    <!-- Language -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Language</label>
                                        <select class="form-select custom-input">
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="french">French</option>
                                            <option value="german">German</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="korean">Korean</option>
                                            <option value="hindi">Hindi</option>
                                        </select>
                                    </div>

                                    <!-- Total Tracks -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Total Tracks</label>
                                        <input type="number" class="form-control custom-input" placeholder="0" min="1">
                                    </div>

                                    <!-- Description -->
                                    <div class="col-12">
                                        <label class="form-label text-white fw-semibold">Description</label>
                                        <textarea class="form-control custom-input" rows="4"
                                            placeholder="Write album description, story, or background..."></textarea>
                                    </div>

                                    <!-- Tags -->
                                    <div class="col-12">
                                        <label class="form-label text-white fw-semibold">Tags</label>
                                        <input type="text" class="form-control custom-input"
                                            placeholder="Add tags separated by commas (e.g., rock, indie, 2024)">
                                        <small class="text-secondary">Help users discover this album</small>
                                    </div>
                                </div>

                                <div class="form-card">
                                    <div class="form-card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-2 text-white fw-semibold"><i class="fas fa-music me-2"></i>Track
                                            List</h5>
                                        <button type="button" class="btn-add-track mb-4" onclick="addTrack()">
                                            <i class="fas fa-plus me-1"></i>Add Track
                                        </button>
                                    </div>
                                    <div class="form-card-body">
                                        <div id="trackList">
                                            <!-- Track 1 (Default) -->
                                            <div class="track-item">
                                                <div class="track-number">1</div>
                                                <div class="track-details">
                                                    <input type="text" class="form-control custom-input"
                                                        placeholder="Track title">
                                                    <div class="row g-2 mt-2">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control custom-input-sm"
                                                                placeholder="Duration (e.g., 3:45)">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="file" class="form-control custom-input-sm"
                                                                accept="audio/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-remove-track"
                                                    onclick="removeTrack(this)">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 mt-4">
                                    <button type="submit" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                                        <i class="fas fa-plus me-2"></i>Add Album
                                    </button>
                                    <button type="reset" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: rgba(255, 255, 255, 0.06); color: white; border: 1px solid rgba(255, 255, 255, 0.1);">
                                        <i class="fas fa-redo me-2"></i>Reset
                                    </button>
                                    <a href="albums.php" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: transparent; color: #aaa; border: 1px solid rgba(255, 255, 255, 0.1);">
                                        <i class="fas fa-times me-2"></i>Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Track List -->

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Publishing Options -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-rocket me-2"></i>Publishing</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select custom-input">
                                    <option value="draft">Draft</option>
                                    <option value="published" selected>Published</option>
                                    <option value="scheduled">Scheduled</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-white">Visibility</label>
                                <select class="form-select custom-input">
                                    <option value="public" selected>Public</option>
                                    <option value="private">Private</option>
                                    <option value="unlisted">Unlisted</option>
                                </select>
                            </div>

                            <div class="setting-item-compact">
                                <label>Featured Album</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="featuredAlbum">
                                </div>
                            </div>

                            <div class="setting-item-compact">
                                <label>Explicit Content</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="explicitContent">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing (for premium content) -->
                    <div class="dashboard-card rounded-4 p-4 mb-4 mb-3">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-dollar-sign me-2"></i>Pricing</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="mb-3">
                                <label class="form-label text-white">Price Type</label>
                                <select class="form-select custom-input">
                                    <option value="free" selected>Free</option>
                                    <option value="premium">Premium Only</option>
                                    <option value="purchase">Purchase Required</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-white">Price (USD)</label>
                                <input type="number" class="form-control custom-input" placeholder="0.00" step="0.01"
                                    min="0">
                            </div>
                        </div>
                    </div>

                    <!-- Credits -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-users me-2"></i>Credits</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="mb-3">
                                <label class="form-label text-white">Producer</label>
                                <input type="text" class="form-control custom-input" placeholder="Producer name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-white">Composer</label>
                                <input type="text" class="form-control custom-input" placeholder="Composer name">
                            </div>

                            <div class="mb-0">
                                <label class="form-label text-white">Additional Credits</label>
                                <textarea class="form-control custom-input" rows="3"
                                    placeholder="Engineers, mixers, etc."></textarea>
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
    /* Album Cover Upload */
    .album-cover-upload {
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    .cover-preview {
        width: 200px;
        height: 200px;
        border-radius: 12px;
        background: rgba(255, 122, 24, 0.1);
        border: 2px dashed rgba(255, 122, 24, 0.3);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: #ff7a18;
        cursor: pointer;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .cover-preview:hover {
        background: rgba(255, 122, 24, 0.15);
        border-color: #ff7a18;
    }

    .cover-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cover-preview p {
        font-size: 13px;
        color: #aaa;
    }

    .btn-upload-cover {
        background: rgba(255, 122, 24, 0.15);
        border: 1px solid rgba(255, 122, 24, 0.3);
        color: #ff7a18;
        padding: 0.75rem 1.5rem;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-upload-cover:hover {
        background: rgba(255, 122, 24, 0.25);
    }

    /* Track List */
    .btn-add-track {
        background: rgba(255, 122, 24, 0.15);
        border: 1px solid rgba(255, 122, 24, 0.3);
        color: #ff7a18;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-add-track:hover {
        background: rgba(255, 122, 24, 0.25);
    }

    .track-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        margin-bottom: 1rem;
    }

    .track-item:last-child {
        margin-bottom: 0;
    }

    .track-number {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: rgba(255, 122, 24, 0.15);
        color: #ff7a18;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        font-size: 14px;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }

    .track-details {
        flex: 1;
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

    .custom-input-sm {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 8px;
        font-size: 13px;
    }

    .custom-input-sm:focus {
        background: rgba(255, 255, 255, 0.08);
        border-color: #ff7a18;
        color: white;
        box-shadow: 0 0 0 3px rgba(255, 122, 24, 0.1);
    }

    .custom-input-sm::placeholder {
        color: #666;
    }

    .btn-remove-track {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: rgba(255, 79, 109, 0.15);
        border: none;
        color: #ff4f6d;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }

    .btn-remove-track:hover {
        background: rgba(255, 79, 109, 0.25);
    }

    /* Setting Item Compact */
    .setting-item-compact {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .setting-item-compact:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .setting-item-compact label {
        color: white;
        font-size: 14px;
        margin: 0;
    }

    /* Outline Button */
    .btn-outline-custom {
        background: transparent;
        border: 1px solid rgba(255, 122, 24, 0.3);
        color: #ff7a18;
        border-radius: 10px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
        background: rgba(255, 122, 24, 0.1);
        color: #ff7a18;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .album-cover-upload {
            flex-direction: column;
            text-align: center;
        }

        .cover-preview {
            width: 150px;
            height: 150px;
        }
    }
</style>

<script>

    document.getElementById('albumCover').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('coverPreview');
                preview.innerHTML = `<img src="${e.target.result}" alt="Album Cover">`;
            };
            reader.readAsDataURL(file);
        }
    });

    // Make cover preview clickable
    document.getElementById('coverPreview').addEventListener('click', function () {
        document.getElementById('albumCover').click();
    });

    // Track counter
    let trackCount = 1;

    // Add track
    function addTrack() {
        trackCount++;
        const trackList = document.getElementById('trackList');
        const trackItem = document.createElement('div');
        trackItem.className = 'track-item';
        trackItem.innerHTML = `
        <div class="track-number">${trackCount}</div>
        <div class="track-details">
            <input type="text" class="form-control custom-input" placeholder="Track title">
            <div class="row g-2 mt-2">
                <div class="col-md-6">
                    <input type="text" class="form-control custom-input-sm" placeholder="Duration (e.g., 3:45)">
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control custom-input-sm" accept="audio/*">
                </div>
            </div>
        </div>
        <button type="button" class="btn-remove-track" onclick="removeTrack(this)">
            <i class="fas fa-trash"></i>
        </button>
    `;
        trackList.appendChild(trackItem);
    }

    // Remove track
    function removeTrack(button) {
        const trackItem = button.closest('.track-item');
        trackItem.remove();

        // Renumber tracks
        const tracks = document.querySelectorAll('.track-number');
        tracks.forEach((track, index) => {
            track.textContent = index + 1;
        });
        trackCount = tracks.length;
    }

    // Form submission
    document.getElementById('addAlbumForm').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Album created successfully!');
        window.location.href = 'albums.php';
    });
</script>

<?php include 'footer.php'; ?>