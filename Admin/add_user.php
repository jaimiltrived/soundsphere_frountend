<?php 
$page_title = "Add User - Admin Panel";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Add User Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <a href="users.php" class="text-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Users
                    </a>
                </div>
                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Add New User</span>
                </h2>
                <p class="text-secondary mb-0">Create a new user account and set their permissions.</p>
            </div>

            <div class="row g-4">
                <!-- Main Form -->
                <div class="col-lg-8">
                    <div class="form-card">
                        <div class="form-card-header">
                            <h5 class="mb-0"><i class="fas fa-user me-2"></i>User Information</h5>
                        </div>
                        <div class="form-card-body">
                            <form id="addUserForm">
                                <div class="row g-3">
                                    <!-- Profile Image -->
                                    <div class="col-12">
                                        <label class="form-label">Profile Picture</label>
                                        <div class="profile-upload-area">
                                            <div class="profile-preview" id="profilePreview">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            <div class="profile-upload-info">
                                                <button type="button" class="btn-upload-profile" onclick="document.getElementById('profileImage').click()">
                                                    <i class="fas fa-camera me-2"></i>Upload Photo
                                                </button>
                                                <input type="file" id="profileImage" accept="image/*" style="display: none;">
                                                <p class="text-secondary mb-0 mt-2">Recommended: 500x500px, Max 5MB</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">First Name *</label>
                                        <input type="text" class="form-control custom-input" placeholder="Enter first name" required>
                                    </div>

                                    <!-- Last Name -->
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name *</label>
                                        <input type="text" class="form-control custom-input" placeholder="Enter last name" required>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-control custom-input" placeholder="user@example.com" required>
                                    </div>

                                    <!-- Username -->
                                    <div class="col-md-6">
                                        <label class="form-label">Username *</label>
                                        <input type="text" class="form-control custom-input" placeholder="username" required>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-md-6">
                                        <label class="form-label">Password *</label>
                                        <div class="password-input-wrapper">
                                            <input type="password" class="form-control custom-input" id="password" placeholder="Enter password" required>
                                            <button type="button" class="password-toggle" onclick="togglePassword('password')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="col-md-6">
                                        <label class="form-label">Confirm Password *</label>
                                        <div class="password-input-wrapper">
                                            <input type="password" class="form-control custom-input" id="confirmPassword" placeholder="Confirm password" required>
                                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control custom-input" placeholder="+1 (555) 000-0000">
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="col-md-6">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control custom-input">
                                    </div>

                                    <!-- Country -->
                                    <div class="col-md-6">
                                        <label class="form-label">Country</label>
                                        <select class="form-select custom-input">
                                            <option value="">Select Country</option>
                                            <option value="US">United States</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="CA">Canada</option>
                                            <option value="AU">Australia</option>
                                            <option value="IN">India</option>
                                            <option value="DE">Germany</option>
                                            <option value="FR">France</option>
                                            <option value="JP">Japan</option>
                                        </select>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control custom-input" placeholder="Enter city">
                                    </div>

                                    <!-- Bio -->
                                    <div class="col-12">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control custom-input" rows="3" placeholder="Write a short bio..."></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Subscription Plan -->
                    <div class="form-card mb-3">
                        <div class="form-card-header">
                            <h5 class="mb-0"><i class="fas fa-crown me-2"></i>Subscription Plan</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="plan-option" data-plan="free">
                                <input type="radio" name="plan" id="planFree" value="free" checked>
                                <label for="planFree">
                                    <div class="plan-header">
                                        <span class="plan-name">Free</span>
                                        <span class="plan-price">$0/mo</span>
                                    </div>
                                    <ul class="plan-features">
                                        <li><i class="fas fa-check"></i> Basic features</li>
                                        <li><i class="fas fa-check"></i> Limited playlists</li>
                                        <li><i class="fas fa-check"></i> Standard quality</li>
                                    </ul>
                                </label>
                            </div>

                            <div class="plan-option" data-plan="premium">
                                <input type="radio" name="plan" id="planPremium" value="premium">
                                <label for="planPremium">
                                    <div class="plan-header">
                                        <span class="plan-name"><i class="fas fa-crown me-1"></i> Premium</span>
                                        <span class="plan-price">$9.99/mo</span>
                                    </div>
                                    <ul class="plan-features">
                                        <li><i class="fas fa-check"></i> All features</li>
                                        <li><i class="fas fa-check"></i> Unlimited playlists</li>
                                        <li><i class="fas fa-check"></i> High quality audio</li>
                                        <li><i class="fas fa-check"></i> Ad-free experience</li>
                                    </ul>
                                </label>
                            </div>

                            <div class="plan-option" data-plan="pro">
                                <input type="radio" name="plan" id="planPro" value="pro">
                                <label for="planPro">
                                    <div class="plan-header">
                                        <span class="plan-name"><i class="fas fa-star me-1"></i> Pro</span>
                                        <span class="plan-price">$19.99/mo</span>
                                    </div>
                                    <ul class="plan-features">
                                        <li><i class="fas fa-check"></i> Everything in Premium</li>
                                        <li><i class="fas fa-check"></i> Lossless audio</li>
                                        <li><i class="fas fa-check"></i> Early access features</li>
                                        <li><i class="fas fa-check"></i> Priority support</li>
                                    </ul>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Account Settings -->
                    <div class="form-card mb-3">
                        <div class="form-card-header">
                            <h5 class="mb-0"><i class="fas fa-cog me-2"></i>Account Settings</h5>
                        </div>
                        <div class="form-card-body">
                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="mb-0">Email Verified</label>
                                    <small class="text-secondary">Mark email as verified</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="emailVerified">
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="mb-0">Account Active</label>
                                    <small class="text-secondary">User can login</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="accountActive" checked>
                                </div>
                            </div>

                            <div class="setting-item">
                                <div class="setting-info">
                                    <label class="mb-0">Send Welcome Email</label>
                                    <small class="text-secondary">Email credentials to user</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sendWelcome" checked>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- User Role -->
                    <div class="form-card">
                        <div class="form-card-header">
                            <h5 class="mb-0"><i class="fas fa-shield-alt me-2"></i>User Role</h5>
                        </div>
                        <div class="form-card-body">
                            <select class="form-select custom-input mb-3">
                                <option value="user" selected>User</option>
                                <option value="moderator">Moderator</option>
                                <option value="admin">Admin</option>
                            </select>
                            <div class="role-permissions">
                                <p class="text-secondary mb-2"><small>Role Permissions:</small></p>
                                <ul class="permission-list">
                                    <li><i class="fas fa-check text-success"></i> View content</li>
                                    <li><i class="fas fa-check text-success"></i> Create playlists</li>
                                    <li><i class="fas fa-check text-success"></i> Like songs</li>
                                    <li><i class="fas fa-times text-secondary"></i> Manage users</li>
                                    <li><i class="fas fa-times text-secondary"></i> Upload content</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-4 d-flex gap-3 justify-content-end">
                <button type="button" class="btn btn-secondary-custom px-4 py-2" onclick="window.location.href='users.php'">
                    <i class="fas fa-times me-2"></i>Cancel
                </button>
                <button type="submit" class="btn btn-primary-custom px-4 py-2" form="addUserForm">
                    <i class="fas fa-user-plus me-2"></i>Create User
                </button>
            </div>
        </div>
    </div>
</div>

<style>
/* Form Card */
.form-card {
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    overflow: hidden;
}

.form-card-header {
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    background: rgba(255, 255, 255, 0.02);
}

.form-card-header h5 {
    color: white;
    font-size: 16px;
    font-weight: 600;
}

.form-card-body {
    padding: 1.5rem;
}

/* Profile Upload */
.profile-upload-area {
    display: flex;
    align-items: center;
    gap: 2rem;
    padding: 1.5rem;
    background: rgba(255, 255, 255, 0.03);
    border: 1px dashed rgba(255, 255, 255, 0.2);
    border-radius: 12px;
}

.profile-preview {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: rgba(255, 122, 24, 0.1);
    border: 3px solid rgba(255, 122, 24, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 48px;
    color: #ff7a18;
    overflow: hidden;
}

.profile-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-upload-profile {
    background: rgba(255, 122, 24, 0.15);
    border: 1px solid rgba(255, 122, 24, 0.3);
    color: #ff7a18;
    padding: 0.625rem 1.5rem;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
}

.btn-upload-profile:hover {
    background: rgba(255, 122, 24, 0.25);
}

/* Form Inputs */
.form-label {
    color: #aaa;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.custom-input {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    padding: 0.75rem 1rem;
    border-radius: 10px;
    font-size: 14px;
    transition: all 0.3s ease;
}

.custom-input:focus {
    background: rgba(255, 255, 255, 0.08);
    border-color: #ff7a18;
    color: white;
    box-shadow: 0 0 0 3px rgba(255, 122, 24, 0.1);
}

.custom-input::placeholder {
    color: #666;
}

.custom-input option {
    background: #1a1a1a;
    color: white;
}

/* Password Input */
.password-input-wrapper {
    position: relative;
}

.password-toggle {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #888;
    cursor: pointer;
    padding: 0.5rem;
    transition: color 0.3s ease;
}

.password-toggle:hover {
    color: #ff7a18;
}

/* Plan Options */
.plan-option {
    margin-bottom: 1rem;
}

.plan-option:last-child {
    margin-bottom: 0;
}

.plan-option input[type="radio"] {
    display: none;
}

.plan-option label {
    display: block;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.03);
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.plan-option input[type="radio"]:checked + label {
    border-color: #ff7a18;
    background: rgba(255, 122, 24, 0.1);
}

.plan-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.75rem;
}

.plan-name {
    color: white;
    font-weight: 600;
    font-size: 15px;
}

.plan-price {
    color: #ff7a18;
    font-weight: 700;
    font-size: 15px;
}

.plan-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.plan-features li {
    color: #aaa;
    font-size: 13px;
    padding: 0.25rem 0;
}

.plan-features li i {
    color: #22C55E;
    margin-right: 0.5rem;
    font-size: 11px;
}

/* Settings */
.setting-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.setting-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.setting-item:first-child {
    padding-top: 0;
}

.setting-info label {
    color: white;
    font-size: 14px;
    font-weight: 500;
}

.setting-info small {
    display: block;
    margin-top: 0.25rem;
}

.form-check-input {
    width: 48px;
    height: 24px;
    background-color: rgba(255, 255, 255, 0.1);
    border: none;
    cursor: pointer;
}

.form-check-input:checked {
    background-color: #ff7a18;
}

.form-check-input:focus {
    box-shadow: 0 0 0 3px rgba(255, 122, 24, 0.2);
}

/* Permission List */
.permission-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.permission-list li {
    color: #aaa;
    font-size: 13px;
    padding: 0.25rem 0;
}

.permission-list li i {
    margin-right: 0.5rem;
    font-size: 11px;
}

/* Buttons */
.btn-secondary-custom {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-secondary-custom:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
}

.btn-primary-custom {
    background: linear-gradient(135deg, #ff7a18, #ffb347);
    border: none;
    color: white;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255, 122, 24, 0.3);
}

/* Responsive */
@media (max-width: 768px) {
    .profile-upload-area {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<script>
// Profile image preview
document.getElementById('profileImage').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('profilePreview');
            preview.innerHTML = `<img src="${e.target.result}" alt="Profile">`;
        };
        reader.readAsDataURL(file);
    }
});

// Password toggle
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

// Form submission
document.getElementById('addUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }
    
    // Show success message
    alert('User created successfully!');
    window.location.href = 'users.php';
});
</script>

<?php include 'footer.php'; ?>