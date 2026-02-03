<?php 
$page_title = "Add Song - Admin Panel";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Add Song Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">
                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Add New Song</span>
                </h2>
                <p class="text-secondary mb-0">Upload and manage your music catalog.</p>
            </div>

            <div class="row">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <h5 class="text-white mb-4 fw-semibold">
                            <i class="fas fa-music me-2 gradient-text"></i>
                            Song Information
                        </h5>

                        <form action="process-song.php" method="POST" enctype="multipart/form-data">
                            <!-- Song Title -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Song Title *</label>
                                <input type="text" name="song_title" class="form-control custom-input" placeholder="Enter song title" required>
                            </div>

                            <!-- Artist Name -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Artist Name *</label>
                                <input type="text" name="artist_name" class="form-control custom-input" placeholder="Enter artist name" required>
                            </div>

                            <!-- Album -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Album</label>
                                <select name="album_id" class="form-select custom-input">
                                    <option value="">Select Album</option>
                                    <option value="1">Summer Hits 2024</option>
                                    <option value="2">Electronic Dreams</option>
                                    <option value="3">Midnight Jazz</option>
                                    <option value="4">Rock Legends</option>
                                    <option value="5">Acoustic Sessions</option>
                                </select>
                            </div>

                            <!-- Genre -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Genre *</label>
                                    <select name="genre" class="form-select custom-input" required>
                                        <option value="">Select Genre</option>
                                        <option value="pop">Pop</option>
                                        <option value="rock">Rock</option>
                                        <option value="jazz">Jazz</option>
                                        <option value="electronic">Electronic</option>
                                        <option value="hiphop">Hip Hop</option>
                                        <option value="classical">Classical</option>
                                        <option value="country">Country</option>
                                        <option value="rnb">R&B</option>
                                    </select>
                                </div>

                                <!-- Duration -->
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Duration *</label>
                                    <input type="text" name="duration" class="form-control custom-input" placeholder="e.g. 3:45" required>
                                </div>
                            </div>

                            <!-- Release Year -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Release Year *</label>
                                    <input type="number" name="release_year" class="form-control custom-input" placeholder="e.g. 2024" min="1900" max="2025" required>
                                </div>

                                <!-- Language -->
                                <div class="col-md-6">
                                    <label class="form-label text-white fw-semibold">Language</label>
                                    <input type="text" name="language" class="form-control custom-input" placeholder="e.g. English">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Description</label>
                                <textarea name="description" class="form-control custom-input" rows="4" placeholder="Enter song description..."></textarea>
                            </div>

                            <!-- Lyrics (Optional) -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Lyrics (Optional)</label>
                                <textarea name="lyrics" class="form-control custom-input" rows="6" placeholder="Enter song lyrics..."></textarea>
                            </div>

                            <!-- Tags -->
                            <div class="mb-4">
                                <label class="form-label text-white fw-semibold">Tags</label>
                                <input type="text" name="tags" class="form-control custom-input" placeholder="e.g. summer, party, upbeat (comma separated)">
                                <small class="text-secondary">Separate tags with commas</small>
                            </div>

                            <!-- Featured -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_featured" id="isFeatured" style="background: rgba(255, 255, 255, 0.1); border-color: rgba(255, 255, 255, 0.3);">
                                    <label class="form-check-label text-white" for="isFeatured">
                                        Mark as Featured Song
                                    </label>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex gap-3 mt-4">
                                <button type="submit" class="btn px-4 py-2 rounded-3 fw-semibold" style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                                    <i class="fas fa-plus me-2"></i>Add Song
                                </button>
                                <button type="reset" class="btn px-4 py-2 rounded-3 fw-semibold" style="background: rgba(255, 255, 255, 0.06); color: white; border: 1px solid rgba(255, 255, 255, 0.1);">
                                    <i class="fas fa-redo me-2"></i>Reset
                                </button>
                                <a href="songs.php" class="btn px-4 py-2 rounded-3 fw-semibold" style="background: transparent; color: #aaa; border: 1px solid rgba(255, 255, 255, 0.1);">
                                    <i class="fas fa-times me-2"></i>Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar - File Uploads -->
                <div class="col-lg-4">
                    <!-- Audio File Upload -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <h5 class="text-white mb-4 fw-semibold">
                            <i class="fas fa-file-audio me-2" style="color: #8f4bff;"></i>
                            Audio File *
                        </h5>
                        
                        <div class="upload-area text-center p-4 rounded-3 mb-3" id="audioUploadArea">
                            <i class="fas fa-cloud-upload-alt mb-3" style="font-size: 48px; color: #8f4bff;"></i>
                            <p class="text-white mb-2">Drag & Drop or Click to Upload</p>
                            <p class="text-secondary small mb-3">MP3, WAV, FLAC (Max 50MB)</p>
                            <input type="file" name="audio_file" id="audioFile" accept="audio/*" class="d-none" required>
                            <button type="button" class="btn btn-sm px-3 py-2 rounded-3" style="background: rgba(143, 75, 255, 0.15); color: #8f4bff; border: none;" onclick="document.getElementById('audioFile').click()">
                                Choose File
                            </button>
                        </div>
                        <div id="audioFileName" class="text-success small"></div>
                    </div>

                    <!-- Cover Image Upload -->
                    <div class="dashboard-card rounded-4 p-4 mb-4">
                        <h5 class="text-white mb-4 fw-semibold">
                            <i class="fas fa-image me-2" style="color: #ff4f6d;"></i>
                            Cover Image *
                        </h5>
                        
                        <div class="upload-area text-center p-4 rounded-3 mb-3" id="imageUploadArea">
                            <div id="imagePreview" class="mb-3" style="display: none;">
                                <img id="previewImg" src="" alt="Preview" class="img-fluid rounded-3" style="max-height: 200px;">
                            </div>
                            <i class="fas fa-image mb-3" style="font-size: 48px; color: #ff4f6d;" id="imageIcon"></i>
                            <p class="text-white mb-2">Drag & Drop or Click to Upload</p>
                            <p class="text-secondary small mb-3">JPG, PNG (Recommended: 1000x1000px)</p>
                            <input type="file" name="cover_image" id="coverImage" accept="image/*" class="d-none" required>
                            <button type="button" class="btn btn-sm px-3 py-2 rounded-3" style="background: rgba(255, 79, 109, 0.15); color: #ff4f6d; border: none;" onclick="document.getElementById('coverImage').click()">
                                Choose Image
                            </button>
                        </div>
                    </div>

                    <!-- Upload Tips -->
                    <div class="dashboard-card rounded-4 p-4">
                        <h6 class="text-white mb-3 fw-semibold">
                            <i class="fas fa-lightbulb me-2" style="color: #ffb347;"></i>
                            Upload Tips
                        </h6>
                        <ul class="text-secondary small mb-0 ps-3">
                            <li class="mb-2">Use high-quality audio files (320kbps or higher)</li>
                            <li class="mb-2">Cover images should be square (1:1 ratio)</li>
                            <li class="mb-2">Fill all required fields marked with *</li>
                            <li class="mb-2">Add relevant tags for better discoverability</li>
                            <li>Double-check song information before submitting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom Input Styles */
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

/* Upload Area */
.upload-area {
    background: rgba(255, 255, 255, 0.03);
    border: 2px dashed rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
    cursor: pointer;
}

.upload-area:hover {
    background: rgba(255, 255, 255, 0.06);
    border-color: #ff7a18;
}

.upload-area.dragover {
    background: rgba(255, 122, 24, 0.1);
    border-color: #ff7a18;
}

/* Form Check */
.form-check-input:checked {
    background-color: #ff7a18;
    border-color: #ff7a18;
}

/* Buttons Hover */
.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 122, 24, 0.3);
}
</style>

<script>
// Audio File Upload
const audioFile = document.getElementById('audioFile');
const audioUploadArea = document.getElementById('audioUploadArea');
const audioFileName = document.getElementById('audioFileName');

audioFile.addEventListener('change', function() {
    if (this.files && this.files[0]) {
        const fileName = this.files[0].name;
        const fileSize = (this.files[0].size / (1024 * 1024)).toFixed(2);
        audioFileName.innerHTML = `<i class="fas fa-check-circle me-2"></i>${fileName} (${fileSize} MB)`;
    }
});

// Drag and Drop for Audio
audioUploadArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    audioUploadArea.classList.add('dragover');
});

audioUploadArea.addEventListener('dragleave', () => {
    audioUploadArea.classList.remove('dragover');
});

audioUploadArea.addEventListener('drop', (e) => {
    e.preventDefault();
    audioUploadArea.classList.remove('dragover');
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        audioFile.files = files;
        audioFile.dispatchEvent(new Event('change'));
    }
});

// Cover Image Upload with Preview
const coverImage = document.getElementById('coverImage');
const imageUploadArea = document.getElementById('imageUploadArea');
const imagePreview = document.getElementById('imagePreview');
const previewImg = document.getElementById('previewImg');
const imageIcon = document.getElementById('imageIcon');

coverImage.addEventListener('change', function() {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            imagePreview.style.display = 'block';
            imageIcon.style.display = 'none';
        }
        reader.readAsDataURL(this.files[0]);
    }
});

// Drag and Drop for Image
imageUploadArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    imageUploadArea.classList.add('dragover');
});

imageUploadArea.addEventListener('dragleave', () => {
    imageUploadArea.classList.remove('dragover');
});

imageUploadArea.addEventListener('drop', (e) => {
    e.preventDefault();
    imageUploadArea.classList.remove('dragover');
    const files = e.dataTransfer.files;
    if (files.length > 0) {
        coverImage.files = files;
        coverImage.dispatchEvent(new Event('change'));
    }
});

// Form Validation
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Check if files are uploaded
    if (!audioFile.files.length) {
        alert('Please upload an audio file');
        return;
    }
    
    if (!coverImage.files.length) {
        alert('Please upload a cover image');
        return;
    }
    
    // If validation passes, show success message
    alert('Song uploaded successfully! 🎵');
    // Uncomment the line below to actually submit the form
    // this.submit();
});
</script>

<?php include 'footer.php'; ?>
