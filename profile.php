<?php
$page_title = "My Profile - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Profile Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Settings Tabs -->
            <div class="settings-tabs-container">
                <div class="settings-tabs">
                    <button class="settings-tab active" data-tab="profile-view">
                        <i class="fas fa-user me-2"></i>Profile
                    </button>
                    <button class="settings-tab" data-tab="edit-profile">
                        <i class="fas fa-edit me-2"></i>Edit Profile
                    </button>
                    <button class="settings-tab" data-tab="change-password">
                        <i class="fas fa-lock me-2"></i>Change Password
                    </button>
                </div>
            </div>

            <!-- Tab Content Container -->
            <div class="settings-tab-content">

                <!-- Profile View Tab -->
                <div class="settings-panel active" id="profile-view">
                    <!-- Profile Header -->
                    <div class="profile-header-simple">
                        <div class="profile-card">
                            <div class="profile-avatar-simple">
                                <img src="https://i.pravatar.cc/200?img=33" alt="John Doe">
                            </div>
                            <div class="profile-details">
                                <h1 class="profile-name-simple">John Doe</h1>
                                <div class="profile-info-items">
                                    <div class="info-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>john.doe@example.com</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-phone"></i>
                                        <span>+1 (555) 123-4567</span>
                                    </div>
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stats Cards -->
                        <div class="stats-cards">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number-simple">45</div>
                                    <div class="stat-label-simple">Liked Songs</div>
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-icon playlist-icon">
                                    <i class="fas fa-list"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="stat-number-simple">12</div>
                                    <div class="stat-label-simple">Playlists</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Sections -->
                    <div class="row g-4 mt-3">
                        <!-- Liked Songs -->
                        <div class="col-lg-6">
                            <div class="content-section">
                                <div class="section-title">
                                    <h2>
                                        <i class="fas fa-heart me-2"></i>
                                        Recently Liked Songs
                                    </h2>
                                    <a href="liked-songs.php" class="view-all-link">View All</a>
                                </div>
                                <div class="songs-list">
                                    <!-- Song 1 -->
                                    <div class="song-item-simple">
                                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=100"
                                            alt="Song">
                                        <div class="song-details-simple">
                                            <div class="song-name-simple">Summer Vibes</div>
                                            <div class="song-artist-simple">DJ Cool</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Song 2 -->
                                    <div class="song-item-simple">
                                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=100"
                                            alt="Song">
                                        <div class="song-details-simple">
                                            <div class="song-name-simple">Midnight Dreams</div>
                                            <div class="song-artist-simple">The Nighters</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Song 3 -->
                                    <div class="song-item-simple">
                                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=100"
                                            alt="Song">
                                        <div class="song-details-simple">
                                            <div class="song-name-simple">Electric Soul</div>
                                            <div class="song-artist-simple">Bass Masters</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Song 4 -->
                                    <div class="song-item-simple">
                                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=100"
                                            alt="Song">
                                        <div class="song-details-simple">
                                            <div class="song-name-simple">Smooth Groove</div>
                                            <div class="song-artist-simple">Emma Davis</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Song 5 -->
                                    <div class="song-item-simple">
                                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=100"
                                            alt="Song">
                                        <div class="song-details-simple">
                                            <div class="song-name-simple">Street Rhythm</div>
                                            <div class="song-artist-simple">MC Flow</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- My Playlists -->
                        <div class="col-lg-6">
                            <div class="content-section">
                                <div class="section-title">
                                    <h2>
                                        <i class="fas fa-list me-2"></i>
                                        My Playlists
                                    </h2>
                                    <a href="playlists-page.php" class="view-all-link">View All</a>
                                </div>
                                <div class="playlists-list">
                                    <!-- Playlist 1 -->
                                    <div class="playlist-item-simple">
                                        <div class="playlist-cover"
                                            style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                            <i class="fas fa-fire"></i>
                                        </div>
                                        <div class="playlist-details-simple">
                                            <div class="playlist-name-simple">My Favorites</div>
                                            <div class="playlist-meta-simple">45 songs • 3h 25m</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Playlist 2 -->
                                    <div class="playlist-item-simple">
                                        <div class="playlist-cover"
                                            style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                            <i class="fas fa-moon"></i>
                                        </div>
                                        <div class="playlist-details-simple">
                                            <div class="playlist-name-simple">Chill Vibes</div>
                                            <div class="playlist-meta-simple">32 songs • 2h 15m</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Playlist 3 -->
                                    <div class="playlist-item-simple">
                                        <div class="playlist-cover"
                                            style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                        <div class="playlist-details-simple">
                                            <div class="playlist-name-simple">Workout Energy</div>
                                            <div class="playlist-meta-simple">28 songs • 1h 50m</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Playlist 4 -->
                                    <div class="playlist-item-simple">
                                        <div class="playlist-cover"
                                            style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                                            <i class="fas fa-car"></i>
                                        </div>
                                        <div class="playlist-details-simple">
                                            <div class="playlist-name-simple">Road Trip</div>
                                            <div class="playlist-meta-simple">52 songs • 3h 40m</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>

                                    <!-- Playlist 5 -->
                                    <div class="playlist-item-simple">
                                        <div class="playlist-cover"
                                            style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <div class="playlist-details-simple">
                                            <div class="playlist-name-simple">Love Songs</div>
                                            <div class="playlist-meta-simple">40 songs • 2h 55m</div>
                                        </div>
                                        <button class="btn-play-simple">
                                            <i class="fas fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content Sections -->

                </div>
                <!-- End Profile View Tab -->

                <!-- Edit Profile Tab -->
                <div class="settings-panel" id="edit-profile">
                    <div class="row g-4">
                        <!-- Edit Profile Form -->
                        <div class="col-lg-8">
                            <div class="settings-card">
                                <div class="settings-card-header">
                                    <h2><i class="fas fa-user-edit me-2"></i>Edit Profile</h2>
                                    <p>Update your profile information</p>
                                </div>
                                <form id="editProfileForm" class="settings-form">
                                    <div class="row g-3">
                                        <!-- Profile Picture -->
                                        <div class="col-12">
                                            <label class="settings-label">Profile Picture</label>
                                            <div class="avatar-upload">
                                                <img src="https://i.pravatar.cc/200?img=33" alt="Profile"
                                                    id="avatarPreview" class="avatar-upload-preview">
                                                <div class="avatar-upload-actions">
                                                    <button type="button" class="btn-upload">
                                                        <i class="fas fa-camera me-2"></i>Change Photo
                                                    </button>
                                                    <p class="avatar-upload-hint">JPG, PNG or GIF. Max 5MB</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Full Name -->
                                        <div class="col-md-6">
                                            <label for="fullName" class="settings-label">Full Name</label>
                                            <input type="text" id="fullName" class="settings-input" value="John Doe"
                                                required>
                                        </div>

                                        <!-- Username -->
                                        <div class="col-md-6">
                                            <label for="username" class="settings-label">Username</label>
                                            <input type="text" id="username" class="settings-input" value="johndoe"
                                                required>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="emailEdit" class="settings-label">Email Address</label>
                                            <input type="email" id="emailEdit" class="settings-input"
                                                value="john.doe@example.com" required>
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6">
                                            <label for="phoneEdit" class="settings-label">Phone Number</label>
                                            <input type="tel" id="phoneEdit" class="settings-input"
                                                value="+1 (555) 123-4567">
                                        </div>

                                        <!-- Location -->
                                        <div class="col-md-6">
                                            <label for="locationEdit" class="settings-label">Location</label>
                                            <input type="text" id="locationEdit" class="settings-input"
                                                value="New York, USA">
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="col-md-6">
                                            <label for="dob" class="settings-label">Date of Birth</label>
                                            <input type="date" id="dob" class="settings-input" value="1995-06-15">
                                        </div>

                                        <!-- Bio -->
                                        <div class="col-12">
                                            <label for="bioEdit" class="settings-label">Bio</label>
                                            <textarea id="bioEdit" class="settings-textarea" rows="4"
                                                placeholder="Tell us about yourself...">Music enthusiast | Love creating playlists | Always discovering new artists 🎵</textarea>
                                        </div>

                                        <!-- Submit Buttons -->
                                        <div class="col-12">
                                            <div class="settings-actions">
                                                <button type="button" class="btn-settings-cancel"
                                                    onclick="switchTab('profile-view')">Cancel</button>
                                                <button type="submit" class="btn-settings-save">
                                                    <i class="fas fa-save me-2"></i>Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Profile Tips Sidebar -->
                        <div class="col-lg-4">
                            <div class="info-sidebar">
                                <div class="info-card">
                                    <div class="info-icon">
                                        <i class="fas fa-lightbulb"></i>
                                    </div>
                                    <h3>Profile Tips</h3>
                                    <ul class="info-list">
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Use a clear profile photo that represents you</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Keep your email updated for notifications</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Add a bio to tell others about your music taste</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Complete all fields for better profile visibility</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="info-card mt-3">
                                    <div class="info-icon purple">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <h3>Privacy & Security</h3>
                                    <p class="info-text">Your email and phone number are private and will never be
                                        shared with other users.</p>
                                    <p class="info-text">Only your name, username, and bio are visible to others.</p>
                                </div>

                                <div class="info-card mt-3">
                                    <div class="info-icon green">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h3>Your Stats</h3>
                                    <div class="mini-stats">
                                        <div class="mini-stat-item">
                                            <span class="mini-stat-value">245h</span>
                                            <span class="mini-stat-label">Listening Time</span>
                                        </div>
                                        <div class="mini-stat-item">
                                            <span class="mini-stat-value">3,542</span>
                                            <span class="mini-stat-label">Songs Played</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Edit Profile Tab -->

                <!-- Change Password Tab -->
                <div class="settings-panel" id="change-password">
                    <div class="row g-4">
                        <!-- Change Password Form -->
                        <div class="col-lg-8">
                            <div class="settings-card">
                                <div class="settings-card-header">
                                    <h2><i class="fas fa-key me-2"></i>Change Password</h2>
                                    <p>Update your password to keep your account secure</p>
                                </div>
                                <form id="changePasswordForm" class="settings-form">
                                    <div class="row g-3">
                                        <!-- Current Password -->
                                        <div class="col-12">
                                            <label for="currentPassword" class="settings-label">Current Password</label>
                                            <div class="password-input-group">
                                                <input type="password" id="currentPassword" class="settings-input"
                                                    placeholder="Enter current password" required>
                                                <button type="button" class="btn-toggle-password"
                                                    onclick="togglePassword('currentPassword')">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- New Password -->
                                        <div class="col-12">
                                            <label for="newPassword" class="settings-label">New Password</label>
                                            <div class="password-input-group">
                                                <input type="password" id="newPassword" class="settings-input"
                                                    placeholder="Enter new password" required>
                                                <button type="button" class="btn-toggle-password"
                                                    onclick="togglePassword('newPassword')">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                            <div class="password-requirements">
                                                <p class="password-req-title">Password must contain:</p>
                                                <ul class="password-req-list">
                                                    <li id="req-length"><i class="fas fa-circle"></i> At least 8
                                                        characters</li>
                                                    <li id="req-uppercase"><i class="fas fa-circle"></i> One uppercase
                                                        letter</li>
                                                    <li id="req-lowercase"><i class="fas fa-circle"></i> One lowercase
                                                        letter</li>
                                                    <li id="req-number"><i class="fas fa-circle"></i> One number</li>
                                                    <li id="req-special"><i class="fas fa-circle"></i> One special
                                                        character</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="col-12">
                                            <label for="confirmPassword" class="settings-label">Confirm New
                                                Password</label>
                                            <div class="password-input-group">
                                                <input type="password" id="confirmPassword" class="settings-input"
                                                    placeholder="Confirm new password" required>
                                                <button type="button" class="btn-toggle-password"
                                                    onclick="togglePassword('confirmPassword')">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </div>
                                            <div id="passwordMatchMsg" class="password-match-msg"></div>
                                        </div>

                                        <!-- Submit Buttons -->
                                        <div class="col-12">
                                            <div class="settings-actions">
                                                <button type="button" class="btn-settings-cancel"
                                                    onclick="switchTab('profile-view')">Cancel</button>
                                                <button type="submit" class="btn-settings-save">
                                                    <i class="fas fa-lock me-2"></i>Update Password
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Security Tips Sidebar -->
                        <div class="col-lg-4">
                            <div class="info-sidebar">
                                <div class="info-card">
                                    <div class="info-icon red">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <h3>Security Tips</h3>
                                    <ul class="info-list">
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Use a unique password you don't use elsewhere</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Mix uppercase, lowercase, numbers & symbols</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Avoid using personal information</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-check-circle"></i>
                                            <span>Change your password regularly</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="info-card mt-3">
                                    <div class="info-icon orange">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <h3>Password Strength</h3>
                                    <div class="strength-meter">
                                        <div class="strength-bar">
                                            <div class="strength-fill" id="strengthFill" style="width: 0%;"></div>
                                        </div>
                                        <p class="strength-text" id="strengthText">Enter a password to check strength
                                        </p>
                                    </div>
                                </div>

                                <div class="info-card mt-3">
                                    <div class="info-icon blue">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <h3>Need Help?</h3>
                                    <p class="info-text">If you've forgotten your current password, you can reset it
                                        using the "Forgot Password" option on the login page.</p>
                                    <a href="#" class="info-link">
                                        <i class="fas fa-arrow-right me-2"></i>Reset Password
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Change Password Tab -->

            </div>
            <!-- End Tab Content Container -->
        </div>

        

        <?php include 'musicplayer.php'; ?>


        <script>
            // Tab Switching
            const settingsTabs = document.querySelectorAll('.settings-tab');
            const settingsPanels = document.querySelectorAll('.settings-panel');

            function switchTab(tabId) {
                // Update tabs
                settingsTabs.forEach(tab => {
                    if (tab.getAttribute('data-tab') === tabId) {
                        tab.classList.add('active');
                    } else {
                        tab.classList.remove('active');
                    }
                });

                // Update panels
                settingsPanels.forEach(panel => {
                    if (panel.id === tabId) {
                        panel.classList.add('active');
                    } else {
                        panel.classList.remove('active');
                    }
                });
            }

            settingsTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('data-tab');
                    switchTab(tabId);
                });
            });

            // Toggle Password Visibility
            function togglePassword(inputId) {
                const input = document.getElementById(inputId);
                const button = input.nextElementSibling;
                const icon = button.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }

            // Password Validation
            const newPasswordInput = document.getElementById('newPassword');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const passwordMatchMsg = document.getElementById('passwordMatchMsg');

            if (newPasswordInput) {
                newPasswordInput.addEventListener('input', () => {
                    validatePassword();
                    updatePasswordStrength();
                });
            }

            if (confirmPasswordInput) {
                confirmPasswordInput.addEventListener('input', checkPasswordMatch);
            }

            function validatePassword() {
                const password = newPasswordInput.value;

                // Length check
                const lengthValid = password.length >= 8;
                document.getElementById('req-length').classList.toggle('valid', lengthValid);

                // Uppercase check
                const uppercaseValid = /[A-Z]/.test(password);
                document.getElementById('req-uppercase').classList.toggle('valid', uppercaseValid);

                // Lowercase check
                const lowercaseValid = /[a-z]/.test(password);
                document.getElementById('req-lowercase').classList.toggle('valid', lowercaseValid);

                // Number check
                const numberValid = /[0-9]/.test(password);
                document.getElementById('req-number').classList.toggle('valid', numberValid);

                // Special character check
                const specialValid = /[!@#$%^&*(),.?":{}|<>]/.test(password);
                document.getElementById('req-special').classList.toggle('valid', specialValid);

                checkPasswordMatch();
            }

            function updatePasswordStrength() {
                const password = newPasswordInput.value;
                const strengthFill = document.getElementById('strengthFill');
                const strengthText = document.getElementById('strengthText');

                if (!password) {
                    strengthFill.style.width = '0%';
                    strengthFill.className = 'strength-fill';
                    strengthText.textContent = 'Enter a password to check strength';
                    strengthText.className = 'strength-text';
                    return;
                }

                let strength = 0;

                // Check length
                if (password.length >= 8) strength++;
                if (password.length >= 12) strength++;

                // Check character types
                if (/[A-Z]/.test(password)) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;

                // Set strength level
                if (strength <= 2) {
                    strengthFill.className = 'strength-fill weak';
                    strengthText.textContent = 'Weak Password';
                    strengthText.className = 'strength-text weak';
                } else if (strength <= 4) {
                    strengthFill.className = 'strength-fill medium';
                    strengthText.textContent = 'Medium Password';
                    strengthText.className = 'strength-text medium';
                } else {
                    strengthFill.className = 'strength-fill strong';
                    strengthText.textContent = 'Strong Password';
                    strengthText.className = 'strength-text strong';
                }
            }

            function checkPasswordMatch() {
                const newPassword = newPasswordInput.value;
                const confirmPassword = confirmPasswordInput.value;

                if (confirmPassword.length === 0) {
                    passwordMatchMsg.textContent = '';
                    passwordMatchMsg.className = 'password-match-msg';
                    return;
                }

                if (newPassword === confirmPassword) {
                    passwordMatchMsg.textContent = '✓ Passwords match';
                    passwordMatchMsg.className = 'password-match-msg match';
                } else {
                    passwordMatchMsg.textContent = '✗ Passwords do not match';
                    passwordMatchMsg.className = 'password-match-msg no-match';
                }
            }


            const editProfileForm = document.getElementById('editProfileForm');


            const changePasswordForm = document.getElementById('changePasswordForm');
            if (changePasswordForm) {
                changePasswordForm.addEventListener('submit', (e) => {
                    e.preventDefault();

                    const currentPassword = document.getElementById('currentPassword').value;
                    const newPassword = document.getElementById('newPassword').value;
                    const confirmPassword = document.getElementById('confirmPassword').value;

                    // Validate passwords match
                    if (newPassword !== confirmPassword) {
                        alert('New passwords do not match!');
                        return;
                    }

                    // Validate password requirements
                    const lengthValid = newPassword.length >= 8;
                    const uppercaseValid = /[A-Z]/.test(newPassword);
                    const lowercaseValid = /[a-z]/.test(newPassword);
                    const numberValid = /[0-9]/.test(newPassword);
                    const specialValid = /[!@#$%^&*(),.?":{}|<>]/.test(newPassword);

                    if (!lengthValid || !uppercaseValid || !lowercaseValid || !numberValid || !specialValid) {
                        alert('Password does not meet all requirements!');
                        return;
                    }

                    // In real app, send to server
                    alert('Password updated successfully!');

                    // Reset form
                    changePasswordForm.reset();

                    // Reset password requirements display
                    document.querySelectorAll('.password-req-list li').forEach(li => li.classList.remove('valid'));
                    passwordMatchMsg.textContent = '';
                    passwordMatchMsg.className = 'password-match-msg';

                    // Switch back to profile view
                    switchTab('profile-view');
                });
            }

        </script>

        <?php include 'footer.php'; ?>