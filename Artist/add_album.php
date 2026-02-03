<?php 
$page_title = "Create New Album - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <style>
        .container {
            max-width: 1400px;
        }

        /* Form Section */
        .form-section {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .section-header i {
            color: #ff7a18;
            font-size: 24px;
        }

        .section-header h2 {
            font-size: 20px;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .required {
            color: #ff7a18;
            margin-left: 4px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: #ff7a18;
            outline: none;
            box-shadow: 0 0 0 4px rgba(255, 122, 24, 0.1);
        }

        .file-upload-box {
            border: 2px dashed rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.02);
        }

        .file-upload-box:hover {
            border-color: #ff7a18;
            background: rgba(255, 122, 24, 0.05);
        }

        .upload-icon {
            font-size: 32px;
            color: #ff7a18;
            margin-bottom: 1rem;
        }

        .upload-text h4 {
            color: white;
            font-size: 16px;
            margin-bottom: 0.5rem;
        }

        .upload-text p {
            color: #94a3b8;
            font-size: 14px;
            margin: 0;
        }

        .btn-submit {
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 122, 24, 0.4);
        }
    </style>

    <div class="container py-4">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="text-white fw-bold mb-1">Create Album</h1>
                <p class="text-white-50 mb-0">Add a new album to your discography</p>
            </div>
            <a href="albums.php" class="btn btn-outline-light">
                <i class="fas fa-arrow-left me-2"></i>Back to Albums
            </a>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Album Details -->
                    <div class="form-section">
                        <div class="section-header">
                            <i class="fas fa-compact-disc"></i>
                            <h2>Album Details</h2>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Album Title <span class="required">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter album title" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Genre <span class="required">*</span></label>
                                    <select class="form-control form-select">
                                        <option value="">Select Genre</option>
                                        <option value="pop">Pop</option>
                                        <option value="rock">Rock</option>
                                        <option value="hiphop">Hip Hop</option>
                                        <option value="electronic">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Release Year <span class="required">*</span></label>
                                    <input type="number" class="form-control" value="2024" min="1900" max="2099">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Describe your album..."></textarea>
                        </div>
                    </div>

                    <!-- Tracklist -->
                    <div class="form-section">
                        <div class="section-header">
                            <i class="fas fa-list-ol"></i>
                            <h2>Tracklist</h2>
                        </div>
                        
                        <div class="alert alert-dark border-secondary mb-3">
                            <i class="fas fa-info-circle text-info me-2"></i>
                            You can add songs to this album later from the "My Songs" page.
                        </div>

                        <button type="button" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-plus me-2"></i>Add Songs Existing Songs
                        </button>
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Cover Art -->
                    <div class="form-section">
                        <div class="section-header">
                            <i class="fas fa-image"></i>
                            <h2>Cover Art</h2>
                        </div>

                        <div class="file-upload-box mb-3">
                            <input type="file" id="coverUpload" hidden accept="image/*">
                            <label for="coverUpload" class="d-block mb-0">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <div class="upload-text">
                                    <h4>Upload Cover</h4>
                                    <p>Recommended: 3000x3000px</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn-submit">
                        Create Album
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
