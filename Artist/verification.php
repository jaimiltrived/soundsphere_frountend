<?php 
$page_title = "Artist Verification - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <div class="container py-4 verification-container">
        <!-- Page Header -->
        <div class="page-header verification-page-header">
            <div class="header-content verification-header-content">
                <h1>Get Verified <i class="fas fa-check-circle verification-badge"></i></h1>
                <p>Verify your artist profile to get the blue badge and access exclusive features</p>
            </div>
            <div class="verification-status">
                Status: Not Verified
            </div>
        </div>

        <!-- Info Alert -->
        <div class="info-alert">
            <i class="fas fa-info-circle"></i>
            <div>
                <p><strong>Why get verified?</strong> Verified artists get a blue checkmark on their profile, better visibility in search results, and access to advanced analytics tools. Verification requests are typically processed within 3-5 business days.</p>
            </div>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            <!-- Artist Identity -->
            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-id-card"></i>
                    <h2>Identity Verification</h2>
                </div>

                <div class="form-group">
                    <label class="form-label">Legal Name <span class="required">*</span></label>
                    <input type="text" class="form-control" placeholder="Enter your full legal name" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Government ID <span class="required">*</span></label>
                    <div class="file-upload-box">
                        <input type="file" id="idUpload" hidden accept="image/*,.pdf">
                        <label for="idUpload" class="d-block">
                            <i class="fas fa-cloud-upload-alt upload-icon"></i>
                            <div class="upload-text">
                                <h4>Click to upload your ID</h4>
                                <p>Passport, Driver's License, or National ID Card (JPG, PNG, PDF)</p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Social Presence -->
            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-share-alt"></i>
                    <h2>Online Presence</h2>
                </div>

                <div class="form-group">
                    <label class="form-label">Instagram Profile URL</label>
                    <input type="url" class="form-control" placeholder="https://instagram.com/yourusername">
                </div>

                <div class="form-group">
                    <label class="form-label">Twitter/X Profile URL</label>
                    <input type="url" class="form-control" placeholder="https://twitter.com/yourusername">
                </div>

                <div class="form-group">
                    <label class="form-label">Official Website</label>
                    <input type="url" class="form-control" placeholder="https://yourwebsite.com">
                </div>

                <div class="form-group">
                    <label class="form-label">Spotify/Apple Music Artist Link</label>
                    <input type="url" class="form-control" placeholder="Link to your profile on other platforms">
                </div>
            </div>

            <!-- Additional Info -->
            <div class="form-section">
                <div class="section-header">
                    <i class="fas fa-comment-alt"></i>
                    <h2>Additional Information</h2>
                </div>

                <div class="form-group">
                    <label class="form-label">Tell us about yourself</label>
                    <textarea class="form-control" rows="4" placeholder="Briefly describe your music career and achievements..."></textarea>
                </div>
            </div>

            <button type="submit" class="btn-submit">
                Submit Verification Request
            </button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
