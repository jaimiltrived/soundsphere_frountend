<?php
$page_title = "Add Artist - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Add Artist Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">

                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Add New Artist</span>
                </h2>
                <p class="text-secondary mb-0">Add a new artist profile to your music platform.</p>
            </div>

            <div class="row g-4">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <!-- Artist Profile -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-microphone me-2"></i>Artist Profile
                            </h5>
                        </div>
                        <div class="form-card-body">
                            <form id="addArtistForm">
                                <!-- Images Section -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label text-white mt-2">Profile Picture *</label>
                                        <div class="artist-image-upload">
                                            <div class="artist-image-preview" id="profilePicPreview">
                                                <i class="fas fa-user-music"></i>
                                            </div>
                                            <button type="button" class="btn-upload-image"
                                                onclick="document.getElementById('profilePic').click()">
                                                <i class="fas fa-camera me-2"></i>Upload
                                            </button>
                                            <input type="file" id="profilePic" accept="image/*" style="display: none;">
                                        </div>
                                        <small class="text-secondary">500x500px recommended</small>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label text-white mt-2">Cover Image</label>
                                        <div class="artist-image-upload">
                                            <div class="artist-cover-preview" id="coverImagePreview">
                                                <i class="fas fa-image"></i>
                                            </div>
                                            <button type="button" class="btn-upload-image"
                                                onclick="document.getElementById('coverImage').click()">
                                                <i class="fas fa-camera me-2"></i>Upload
                                            </button>
                                            <input type="file" id="coverImage" accept="image/*" style="display: none;">
                                        </div>
                                        <small class="text-secondary">1920x1080px recommended</small>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <!-- Artist Name -->
                                    <div class="col-md-8">
                                        <label class="form-label text-white fw-semibold">Artist Name *</label>
                                        <input type="text" class="form-control custom-input"
                                            placeholder="Enter artist name" required>
                                    </div>

                                    <!-- Stage Name -->
                                    <div class="col-md-4">
                                        <label class="form-label text-white fw-semibold">Stage Name</label>
                                        <input type="text" class="form-control custom-input" placeholder="aka...">
                                    </div>

                                    <!-- Primary Genre -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Primary Genre *</label>
                                        <select class="form-select custom-input" required>
                                            <option value="">Select genre</option>
                                            <option value="pop">Pop</option>
                                            <option value="rock">Rock</option>
                                            <option value="electronic">Electronic</option>
                                            <option value="hiphop">Hip Hop</option>
                                            <option value="jazz">Jazz</option>
                                            <option value="classical">Classical</option>
                                            <option value="rnb">R&B</option>
                                            <option value="country">Country</option>
                                            <option value="indie">Indie</option>
                                        </select>
                                    </div>

                                    <!-- Secondary Genre -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Secondary Genre</label>
                                        <select class="form-select custom-input">
                                            <option value="">Select genre</option>
                                            <option value="pop">Pop</option>
                                            <option value="rock">Rock</option>
                                            <option value="electronic">Electronic</option>
                                            <option value="hiphop">Hip Hop</option>
                                            <option value="jazz">Jazz</option>
                                            <option value="rnb">R&B</option>
                                        </select>
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Country *</label>
                                        <select class="form-select custom-input" required>
                                            <option value="">Select country</option>
                                            <option value="US">United States</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="CA">Canada</option>
                                            <option value="AU">Australia</option>
                                            <option value="JP">Japan</option>
                                            <option value="KR">South Korea</option>
                                            <option value="IN">India</option>
                                        </select>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">City</label>
                                        <input type="text" class="form-control custom-input" placeholder="Enter city">
                                    </div>

                                    <!-- Birth Date -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Birth Date</label>
                                        <input type="date" class="form-control custom-input">
                                    </div>

                                    <!-- Active Since -->
                                    <div class="col-md-6">
                                        <label class="form-label text-white fw-semibold">Active Since</label>
                                        <input type="number" class="form-control custom-input" placeholder="2020"
                                            min="1900" max="2024">
                                    </div>

                                    <!-- Bio -->
                                    <div class="col-12">
                                        <label class="form-label text-white fw-semibold">Biography *</label>
                                        <textarea class="form-control custom-input" rows="5"
                                            placeholder="Write artist biography, background story, achievements..."
                                            required></textarea>
                                    </div>

                                    <!-- Tags -->
                                    <div class="col-12">
                                        <label class="form-label text-white fw-semibold">Tags</label>
                                        <input type="text" class="form-control custom-input"
                                            placeholder="indie, alternative, singer-songwriter">
                                        <small class="text-secondary">Comma separated tags</small>
                                    </div>
                                </div>

                                <div class="d-flex gap-3 mt-4">
                                    <button type="submit" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                                        <i class="fas fa-plus me-2"></i>Add Artist
                                    </button>
                                    <button type="reset" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: rgba(255, 255, 255, 0.06); color: white; border: 1px solid rgba(255, 255, 255, 0.1);">
                                        <i class="fas fa-redo me-2"></i>Reset
                                    </button>
                                    <a href="artists.php" class="btn px-4 py-2 rounded-3 fw-semibold"
                                        style="background: transparent; color: #aaa; border: 1px solid rgba(255, 255, 255, 0.1);">
                                        <i class="fas fa-times me-2"></i>Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Social Media -->

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Verification -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold"><i class="fas fa-check-circle me-2"></i>Verification
                            </h5>
                        </div>
                        <div class="form-card-body">
                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-2 mt-2 text-white">Verified Artist</label>
                                    <small class="text-secondary d-block">Show verified badge</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="verifiedArtist">
                                </div>
                            </div>

                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-0 text-white">Featured</label>
                                    <small class="text-secondary d-block">Show in featured section</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="featuredArtist">
                                </div>
                            </div>

                            <div class="setting-item-compact">
                                <div>
                                    <label class="mb-0 text-white">Active</label>
                                    <small class="text-secondary d-block">Artist is currently active</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="activeArtist" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics (Read-only) -->
                    <div class="dashboard-card rounded-4 p-4 mb-4 mb-3">
                        <div class="form-card-header">
                            <h5 class="mb-0 text-white fw-semibold mb-3"><i
                                    class="fas fa-chart-line me-2"></i>Statistics</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="stat-item-sidebar">
                                <div class="stat-icon-sidebar"
                                    style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                    <i class="fas fa-music"></i>
                                </div>
                                <div>
                                    <div class="stat-value-sidebar">0</div>
                                    <div class="stat-label-sidebar">Total Songs</div>
                                </div>
                            </div>

                            <div class="stat-item-sidebar">
                                <div class="stat-icon-sidebar"
                                    style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                    <i class="fas fa-compact-disc"></i>
                                </div>
                                <div>
                                    <div class="stat-value-sidebar">0</div>
                                    <div class="stat-label-sidebar">Albums</div>
                                </div>
                            </div>

                            <div class="stat-item-sidebar">
                                <div class="stat-icon-sidebar"
                                    style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <div class="stat-value-sidebar">0</div>
                                    <div class="stat-label-sidebar">Followers</div>
                                </div>
                            </div>

                            <div class="stat-item-sidebar">
                                <div class="stat-icon-sidebar"
                                    style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div>
                                    <div class="stat-value-sidebar">0</div>
                                    <div class="stat-label-sidebar">Total Plays</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->

                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-4 d-flex gap-3 justify-content-end">
                <button type="button" class="btn btn-secondary-custom px-4 py-2"
                    onclick="window.location.href='artists.php'">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>
                <button type="button" class="btn btn-outline-custom px-4 py-2">
                    <i class="fas fa-save me-2"></i>Save as Draft
                </button>
                <button type="submit" class="btn btn-primary-custom px-4 py-2" form="addArtistForm">
                    <i class="fas fa-check me-2"></i>Add Artist
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Artist Image Upload */
    .artist-image-upload {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }

    .artist-image-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: rgba(255, 122, 24, 0.1);
        border: 3px dashed rgba(255, 122, 24, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: #ff7a18;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .artist-image-preview:hover {
        background: rgba(255, 122, 24, 0.15);
        border-color: #ff7a18;
    }

    .artist-image-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .artist-cover-preview {
        width: 200px;
        height: 120px;
        border-radius: 12px;
        background: rgba(255, 122, 24, 0.1);
        border: 2px dashed rgba(255, 122, 24, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: #ff7a18;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .artist-cover-preview:hover {
        background: rgba(255, 122, 24, 0.15);
        border-color: #ff7a18;
    }

    .artist-cover-preview img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .btn-upload-image {
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

    .btn-upload-image:hover {
        background: rgba(255, 122, 24, 0.25);
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

    /* Sidebar Stats */
    .stat-item-sidebar {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .stat-item-sidebar:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .stat-item-sidebar:first-child {
        padding-top: 0;
    }

    .stat-icon-sidebar {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
    }

    .stat-value-sidebar {
        font-size: 24px;
        font-weight: 700;
        color: white;
    }

    .stat-label-sidebar {
        font-size: 13px;
        color: #888;
    }
</style>

<script>
    // Profile picture preview
    document.getElementById('profilePic').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('profilePicPreview');
                preview.innerHTML = `<img src="${e.target.result}" alt="Profile">`;
            };
            reader.readAsDataURL(file);
        }
    });

    // Cover image preview
    document.getElementById('coverImage').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const preview = document.getElementById('coverImagePreview');
                preview.innerHTML = `<img src="${e.target.result}" alt="Cover">`;
            };
            reader.readAsDataURL(file);
        }
    });

    // Make previews clickable
    document.getElementById('profilePicPreview').addEventListener('click', function () {
        document.getElementById('profilePic').click();
    });

    document.getElementById('coverImagePreview').addEventListener('click', function () {
        document.getElementById('coverImage').click();
    });

    // Form submission
    document.getElementById('addArtistForm').addEventListener('submit', function (e) {
        e.preventDefault();
        alert('Artist added successfully!');
        window.location.href = 'artists.php';
    });
</script>

<?php include 'footer.php'; ?>