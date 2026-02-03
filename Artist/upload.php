<?php 
$page_title = "Upload New Song - MusicStream";
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

        /* Page Header */
        .page-header {
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 2rem;
        }

        .page-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            margin: 0;
        }

        /* Form Layout */
        .form-layout {
            display: grid;
            grid-template-columns: 1fr 450px;
            gap: 2rem;
        }

        /* Form Section */
        .form-section {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
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

        /* Form Groups */
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

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 0.875rem 1rem;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: white;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: #94a3b8;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #ff7a18;
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 4px rgba(255, 122, 24, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Two Column Row */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        /* Upload Section */
        .upload-section {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .upload-area {
            border: 3px dashed rgba(255, 122, 24, 0.3);
            border-radius: 16px;
            padding: 3rem 2rem;
            text-align: center;
            background: rgba(255, 255, 255, 0.02);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
        }

        .upload-area:hover {
            border-color: #ff7a18;
            background: rgba(255, 122, 24, 0.05);
        }

        .upload-area.dragover {
            border-color: #ff7a18;
            background: rgba(255, 122, 24, 0.1);
        }

        .upload-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: white;
        }

        .upload-text {
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .upload-hint {
            color: #94a3b8;
            font-size: 14px;
            margin-bottom: 1.5rem;
        }

        .btn-upload {
            padding: 0.875rem 2rem;
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-upload:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 122, 24, 0.4);
        }

        .file-input {
            display: none;
        }

        /* File Preview */
        .file-preview {
            display: none;
            margin-top: 1.5rem;
            padding: 1.25rem;
            background: rgba(34, 197, 94, 0.1);
            border: 2px solid rgba(34, 197, 94, 0.3);
            border-radius: 12px;
        }

        .file-preview.active {
            display: block;
        }

        .file-preview-content {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .file-preview-icon {
            width: 56px;
            height: 56px;
            background: rgba(34, 197, 94, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #22c55e;
            font-size: 24px;
        }

        .file-preview-info {
            flex: 1;
        }

        .file-preview-name {
            color: #1e293b;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 0.25rem;
        }

        .file-preview-size {
            color: #64748b;
            font-size: 13px;
        }

        .btn-remove-file {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .btn-remove-file:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        /* Tips Section */
        .tips-section {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
        }

        .tips-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .tips-header i {
            color: #fbbf24;
            font-size: 22px;
        }

        .tips-header h3 {
            font-size: 18px;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .tips-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .tips-list li {
            color: #cbd5e1;
            font-size: 14px;
            padding: 0.75rem 0;
            padding-left: 2rem;
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .tips-list li:last-child {
            border-bottom: none;
        }

        .tips-list li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #22c55e;
            font-size: 14px;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-top: 2rem;
            padding: 1.25rem;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .checkbox-group input[type="checkbox"] {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: #ff7a18;
        }

        .checkbox-group label {
            color: white;
            font-size: 14px;
            font-weight: 600;
            margin: 0;
            cursor: pointer;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
        }

        .btn-action {
            flex: 1;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-submit {
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            color: white;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 122, 24, 0.4);
        }

        .btn-reset {
            background: rgba(255, 255, 255, 0.06);
            color: #cbd5e1;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-reset:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .btn-cancel {
            background: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.3);
        }

        .btn-cancel:hover {
            background: rgba(239, 68, 68, 0.2);
        }

        /* Helper Text */
        .helper-text {
            font-size: 13px;
            color: #94a3b8;
            margin-top: 0.5rem;
        }

        .file-preview-name {
            color: white;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 0.25rem;
        }

        .file-preview-size {
            color: #94a3b8;
            font-size: 13px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .form-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
          
            .page-header h1 {
                font-size: 28px;
            }

            .form-section,
            .upload-section,
            .tips-section {
                padding: 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .form-actions {
                flex-direction: column;
            }
        }
    </style>

    <!-- Upload Song Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Upload New Song</h1>
            <p>Share your music with the world</p>
        </div>

        <!-- Form Layout -->
        <div class="form-layout">
            <!-- Left Column -->
            <div>
                <!-- Song Information Section -->
                <div class="form-section">
                    <div class="section-header">
                        <i class="fas fa-music"></i>
                        <h2>Song Information</h2>
                    </div>

                    <form id="uploadForm">
                        <!-- Song Title -->
                        <div class="form-group">
                            <label class="form-label">
                                Song Title <span class="required">*</span>
                            </label>
                            <input type="text" class="form-input" id="songTitle" placeholder="Enter song title" required>
                        </div>

                        <!-- Album -->
                        <div class="form-group">
                            <label class="form-label">Album</label>
                            <select class="form-select" id="songAlbum">
                                <option value="">Select Album</option>
                                <option value="album1">Sunset Collection</option>
                                <option value="album2">Night Stories</option>
                                <option value="album3">Electric Dreams</option>
                                <option value="new">+ Create New Album</option>
                            </select>
                        </div>

                        <!-- Genre & Duration Row -->
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    Genre <span class="required">*</span>
                                </label>
                                <select class="form-select" id="songGenre" required>
                                    <option value="">Select Genre</option>
                                    <option value="pop">Pop</option>
                                    <option value="rock">Rock</option>
                                    <option value="hip-hop">Hip Hop</option>
                                    <option value="electronic">Electronic</option>
                                    <option value="jazz">Jazz</option>
                                    <option value="classical">Classical</option>
                                    <option value="country">Country</option>
                                    <option value="r&b">R&B</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">
                                    Duration <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input" id="songDuration" placeholder="e.g., 3:45" required>
                            </div>
                        </div>

                        <!-- Release Year & Language Row -->
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">
                                    Release Year <span class="required">*</span>
                                </label>
                                <input type="number" class="form-input" id="releaseYear" placeholder="e.g., 2024" min="1900" max="2100" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Language</label>
                                <input type="text" class="form-input" id="songLanguage" placeholder="e.g., English">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-textarea" id="songDescription" placeholder="Enter song description..."></textarea>
                            <div class="helper-text">Tell listeners about your song</div>
                        </div>

                        <!-- Lyrics (Optional) -->
                        <div class="form-group">
                            <label class="form-label">Lyrics (Optional)</label>
                            <textarea class="form-textarea" id="songLyrics" placeholder="Enter song lyrics..." style="min-height: 200px;"></textarea>
                            <div class="helper-text">Add lyrics for fans to sing along</div>
                        </div>

                        <!-- Tags -->
                        <div class="form-group">
                            <label class="form-label">Tags</label>
                            <input type="text" class="form-input" id="songTags" placeholder="e.g., summer, party, upbeat (comma separated)">
                            <div class="helper-text">Separate tags with commas</div>
                        </div>

                        <!-- Explicit Content Checkbox -->
                        <div class="checkbox-group">
                            <input type="checkbox" id="explicitContent">
                            <label for="explicitContent">This song contains explicit content</label>
                        </div>

                        <!-- Form Actions -->
                        <div class="form-actions">
                            <button type="submit" class="btn-action btn-submit">
                                <i class="fas fa-upload"></i>
                                Upload Song
                            </button>
                            <button type="button" class="btn-action btn-reset" onclick="resetForm()">
                                <i class="fas fa-redo"></i>
                                Reset
                            </button>
                            <button type="button" class="btn-action btn-cancel" onclick="window.history.back()">
                                <i class="fas fa-times"></i>
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <!-- Audio File Upload -->
                <div class="upload-section">
                    <div class="section-header">
                        <i class="fas fa-file-audio"></i>
                        <h2>Audio File <span class="required">*</span></h2>
                    </div>

                    <div class="upload-area" id="audioUploadArea">
                        <div class="upload-icon">
                            <i class="fas fa-file-audio"></i>
                        </div>
                        <div class="upload-text">Drag & Drop or Click to Upload</div>
                        <div class="upload-hint">MP3, WAV, FLAC (Max 50MB)</div>
                        <button type="button" class="btn-upload" onclick="document.getElementById('audioFileInput').click()">
                            Choose File
                        </button>
                        <input type="file" id="audioFileInput" class="file-input" accept="audio/*">
                    </div>

                    <div class="file-preview" id="audioPreview">
                        <div class="file-preview-content">
                            <div class="file-preview-icon">
                                <i class="fas fa-file-audio"></i>
                            </div>
                            <div class="file-preview-info">
                                <div class="file-preview-name" id="audioFileName">song.mp3</div>
                                <div class="file-preview-size" id="audioFileSize">4.5 MB</div>
                            </div>
                            <button type="button" class="btn-remove-file" onclick="removeAudio()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Cover Image Upload -->
                <div class="upload-section">
                    <div class="section-header">
                        <i class="fas fa-image"></i>
                        <h2>Cover Image <span class="required">*</span></h2>
                    </div>

                    <div class="upload-area" id="imageUploadArea">
                        <div class="upload-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="upload-text">Drag & Drop or Click to Upload</div>
                        <div class="upload-hint">JPG, PNG (Recommended: 1000x1000px)</div>
                        <button type="button" class="btn-upload" onclick="document.getElementById('coverImageInput').click()">
                            Choose Image
                        </button>
                        <input type="file" id="coverImageInput" class="file-input" accept="image/*">
                    </div>

                    <div class="file-preview" id="imagePreview">
                        <div class="file-preview-content">
                            <div class="file-preview-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="file-preview-info">
                                <div class="file-preview-name" id="imageFileName">cover.jpg</div>
                                <div class="file-preview-size" id="imageFileSize">1.2 MB</div>
                            </div>
                            <button type="button" class="btn-remove-file" onclick="removeImage()">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Upload Tips -->
                <div class="tips-section">
                    <div class="tips-header">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Upload Tips</h3>
                    </div>
                    <ul class="tips-list">
                        <li>Use high-quality audio files (320kbps or higher)</li>
                        <li>Cover images should be square (1:1 ratio)</li>
                        <li>Fill all required fields marked with *</li>
                        <li>Add relevant tags for better discoverability</li>
                        <li>Write engaging descriptions to attract listeners</li>
                        <li>Double-check song information before submitting</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
        // Audio File Upload
        const audioInput = document.getElementById('audioFileInput');
        const audioUploadArea = document.getElementById('audioUploadArea');
        const audioPreview = document.getElementById('audioPreview');

        audioInput.addEventListener('change', handleAudioUpload);

        function handleAudioUpload(e) {
            const file = e.target.files[0];
            if (file) {
                displayAudioPreview(file);
            }
        }

        function displayAudioPreview(file) {
            document.getElementById('audioFileName').textContent = file.name;
            document.getElementById('audioFileSize').textContent = formatFileSize(file.size);
            audioPreview.classList.add('active');
        }

        function removeAudio() {
            audioInput.value = '';
            audioPreview.classList.remove('active');
        }

        // Audio Drag and Drop
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
            
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('audio/')) {
                audioInput.files = e.dataTransfer.files;
                displayAudioPreview(file);
            }
        });

        // Image File Upload
        const imageInput = document.getElementById('coverImageInput');
        const imageUploadArea = document.getElementById('imageUploadArea');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', handleImageUpload);

        function handleImageUpload(e) {
            const file = e.target.files[0];
            if (file) {
                displayImagePreview(file);
            }
        }

        function displayImagePreview(file) {
            document.getElementById('imageFileName').textContent = file.name;
            document.getElementById('imageFileSize').textContent = formatFileSize(file.size);
            imagePreview.classList.add('active');
        }

        function removeImage() {
            imageInput.value = '';
            imagePreview.classList.remove('active');
        }

        // Image Drag and Drop
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
            
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                imageInput.files = e.dataTransfer.files;
                displayImagePreview(file);
            }
        });

        // Format File Size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }

        // Form Submit
        document.getElementById('uploadForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate required fields
            const title = document.getElementById('songTitle').value;
            const genre = document.getElementById('songGenre').value;
            const duration = document.getElementById('songDuration').value;
            const year = document.getElementById('releaseYear').value;

            if (!title || !genre || !duration || !year) {
                alert('Please fill in all required fields!');
                return;
            }

            if (!audioInput.files[0]) {
                alert('Please upload an audio file!');
                return;
            }

            if (!imageInput.files[0]) {
                alert('Please upload a cover image!');
                return;
            }

            // Get form data
            const formData = {
                title: title,
                album: document.getElementById('songAlbum').value,
                genre: genre,
                duration: duration,
                releaseYear: year,
                language: document.getElementById('songLanguage').value,
                description: document.getElementById('songDescription').value,
                lyrics: document.getElementById('songLyrics').value,
                tags: document.getElementById('songTags').value,
                explicit: document.getElementById('explicitContent').checked,
                audioFile: audioInput.files[0],
                coverImage: imageInput.files[0]
            };

            console.log('Song Data:', formData);
            alert('Song uploaded successfully!');
            
            // Optionally redirect
            // window.location.href = 'artist-my-songs.html';
        });

        // Reset Form
        function resetForm() {
            if (confirm('Are you sure you want to reset the form? All data will be lost.')) {
                document.getElementById('uploadForm').reset();
                removeAudio();
                removeImage();
            }
        }
    </script>

<?php include 'footer.php'; ?>