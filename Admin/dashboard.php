<?php
$page_title = "Dashboard - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Dashboard Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div class="mb-4">
                <h2 class="text-white fw-bold mb-1">
                    <span class="gradient-text">Dashboard Overview</span>
                </h2>
                <p class="text-secondary mb-0">Welcome back! Here's what's happening with your music platform today.</p>
            </div>

            <!-- Dashboard Cards -->
            <div class="row g-3 g-md-4 mb-5">
                <!-- Card 1 - Total Users -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dashboard-card rounded-4 p-3 p-md-4 position-relative shadow-sm">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="card-icon rounded-3 d-flex align-items-center justify-content-center"
                                style="background: rgba(255, 122, 24, 0.15);">
                                <i class="fas fa-users" style="color: #ff7a18; font-size: 24px;"></i>
                            </div>
                            <span class="percentage badge rounded-pill px-2 px-md-3 py-2"
                                style="background: rgba(34, 197, 94, 0.15); color: #22C55E;">+12%</span>
                        </div>
                        <h2 class="card-value fw-bold text-white mb-1">12,847</h2>
                        <p class="text-secondary mb-0">Total Users</p>
                    </div>
                </div>

                <!-- Card 2 - Total Songs -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dashboard-card rounded-4 p-3 p-md-4 position-relative shadow-sm">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="card-icon rounded-3 d-flex align-items-center justify-content-center"
                                style="background: rgba(143, 75, 255, 0.15);">
                                <i class="fas fa-music" style="color: #8f4bff; font-size: 24px;"></i>
                            </div>
                            <span class="percentage badge rounded-pill px-2 px-md-3 py-2"
                                style="background: rgba(34, 197, 94, 0.15); color: #22C55E;">+8%</span>
                        </div>
                        <h2 class="card-value fw-bold text-white mb-1">8,432</h2>
                        <p class="text-secondary mb-0">Total Songs</p>
                    </div>
                </div>

                <!-- Card 3 - Albums -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dashboard-card rounded-4 p-3 p-md-4 position-relative shadow-sm">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="card-icon rounded-3 d-flex align-items-center justify-content-center"
                                style="background: rgba(38, 183, 242, 0.15);">
                                <i class="fas fa-compact-disc" style="color: #26b7f2; font-size: 24px;"></i>
                            </div>
                            <span class="percentage badge rounded-pill px-2 px-md-3 py-2"
                                style="background: rgba(34, 197, 94, 0.15); color: #22C55E;">+5%</span>
                        </div>
                        <h2 class="card-value fw-bold text-white mb-1">1,256</h2>
                        <p class="text-secondary mb-0">Total Albums</p>
                    </div>
                </div>

                <!-- Card 4 - Revenue -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dashboard-card rounded-4 p-3 p-md-4 position-relative shadow-sm">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="card-icon rounded-3 d-flex align-items-center justify-content-center"
                                style="background: rgba(255, 79, 109, 0.15);">
                                <i class="fas fa-list" style="color: #ff4f6d; font-size: 24px;"></i>
                                
                            </div>
                            <span class="percentage badge rounded-pill px-2 px-md-3 py-2"
                                style="background: rgba(34, 197, 94, 0.15); color: #22C55E;">+23%</span>
                        </div>
                        <h2 class="card-value fw-bold text-white mb-1">480</h2>
                        <p class="text-secondary mb-0">Total Playlist</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class=" dashboard-card rounded-4 p-4">
                        <div class="activity-header">
                            <h3>Recent Activity</h3>

                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text"><strong>New user registered:</strong> john_doe_123</div>
                                <div class="activity-time">2 minutes ago</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: linear-gradient(135deg, #f97316, #fb923c);">
                                <i class="fas fa-music"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text"><strong>New song uploaded:</strong> "Summer Vibes" by DJ Cool
                                </div>
                                <div class="activity-time">15 minutes ago</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: linear-gradient(135deg, #22c55e, #4ade80);">
                                <i class="fas fa-list-music"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text"><strong>New playlist created:</strong> "Workout Mix" by Admin
                                </div>
                                <div class="activity-time">1 hour ago</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text"><strong>New review posted:</strong> 5 stars for "Midnight
                                    Dreams"
                                </div>
                                <div class="activity-time">3 hours ago</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                                <i class="fas fa-compact-disc"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-text"><strong>New album added:</strong> "Sunset Collection" by
                                    Sarah
                                    Johnson</div>
                                <div class="activity-time">5 hours ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="dashboard-card rounded-4 p-4">
                        <h5 class="text-white mb-4 fw-semibold">
                            <i class="fas fa-fire me-2" style="color: #ff4f6d;"></i>
                            Top Songs
                        </h5>
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Summer Vibes</div>
                                    <small class="text-secondary">DJ Cool - 2.5K plays</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Midnight Dreams</div>
                                    <small class="text-secondary">The Nighters - 2.1K plays</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Midnight Dreams</div>
                                    <small class="text-secondary">The Nighters - 2.1K plays</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Midnight Dreams</div>
                                    <small class="text-secondary">The Nighters - 2.1K plays</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Midnight Dreams</div>
                                    <small class="text-secondary">The Nighters - 2.1K plays</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded"
                                    style="width: 50px; height: 50px; background: linear-gradient(135deg, #26b7f2, #7dd3fc);">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="text-white fw-semibold" style="font-size: 14px;">Electric Soul</div>
                                    <small class="text-secondary">Bass Masters - 1.8K plays</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .activity-list {
        background: rgba(30, 41, 59, 0.8);
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .activity-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .activity-header h3 {
        font-size: 18px;
        font-weight: 700;
        color: white;
        margin: 0;
    }

    .view-all {
        color: #f97316;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
    }

    .view-all:hover {
        text-decoration: underline;
    }

    .activity-item {
        display: flex;
        gap: 1rem;
        padding: 1rem 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .activity-item:last-child {
        border-bottom: none;
    }

    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 16px;
        color: white;
    }

    .activity-content {
        flex: 1;
    }

    .activity-text {
        color: #e2e8f0;
        font-size: 14px;
        margin-bottom: 0.25rem;
    }

    .activity-time {
        color: #64748b;
        font-size: 12px;
    }
</style>

<?php include 'footer.php'; ?>