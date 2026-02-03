<?php 
$page_title = "Settings - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <h2 class="text-white mb-4">Settings</h2>
            
            <div class="row">
                <div class="col-md-8">
                    <!-- Profile Settings -->
                    <div class="card bg-dark border-secondary mb-4">
                        <div class="card-header border-secondary">
                            <h5 class="text-white mb-0">Profile Information</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label text-light">Artist Name</label>
                                    <input type="text" class="form-control bg-dark text-white border-secondary" value="DJ Cool">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light">Email</label>
                                    <input type="email" class="form-control bg-dark text-white border-secondary" value="djcool@musicstream.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light">Bio</label>
                                    <textarea class="form-control bg-dark text-white border-secondary" rows="4">Professional DJ and Music Producer based in LA.</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light">Location</label>
                                    <input type="text" class="form-control bg-dark text-white border-secondary" value="Los Angeles, CA">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>

                    <!-- Password Settings -->
                    <div class="card bg-dark border-secondary">
                        <div class="card-header border-secondary">
                            <h5 class="text-white mb-0">Change Password</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label text-light">Current Password</label>
                                    <input type="password" class="form-control bg-dark text-white border-secondary">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light">New Password</label>
                                    <input type="password" class="form-control bg-dark text-white border-secondary">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-light">Confirm New Password</label>
                                    <input type="password" class="form-control bg-dark text-white border-secondary">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
