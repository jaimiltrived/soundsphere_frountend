<?php 
$page_title = "Artist Dashboard - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

   

    <!-- Artist Dashboard Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="welcome">
                <h1>Welcome back, DJ Cool! 🎵</h1>
                <p>Here's what's happening with your music today.</p>
            </div>
            <div class="top-actions">
                <a href="upload.php" class="btn-upload" style="text-decoration: none;">
                    <i class="fas fa-plus"></i>
                    Upload New Song
                </a>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-title">Total Streams</div>
                        <div class="stat-value">245.6K</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+18.5% this month</span>
                        </div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-title">Total Songs</div>
                        <div class="stat-value">48</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+4 this month</span>
                        </div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #f97316, #fb923c);">
                        <i class="fas fa-music"></i>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-title">Followers</div>
                        <div class="stat-value">12.8K</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+256 this week</span>
                        </div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div>
                        <div class="stat-title">This Month</div>
                        <div class="stat-value">$2,450</div>
                        <div class="stat-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12.3% vs last month</span>
                        </div>
                    </div>
                    <div class="stat-icon" style="background: linear-gradient(135deg, #22c55e, #4ade80);">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Uploads -->
        <div class="recent-uploads">
            <div class="section-header">
                <h3 class="section-title">Recent Uploads</h3>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="uploads-grid">
                <div class="upload-card">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Song" class="upload-cover">
                    <div class="upload-info">
                        <div class="upload-title">Summer Vibes</div>
                        <div class="upload-meta">45.2K plays</div>
                    </div>
                </div>

                <div class="upload-card">
                    <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Song" class="upload-cover">
                    <div class="upload-info">
                        <div class="upload-title">Midnight Dreams</div>
                        <div class="upload-meta">38.1K plays</div>
                    </div>
                </div>

                <div class="upload-card">
                    <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Song" class="upload-cover">
                    <div class="upload-info">
                        <div class="upload-title">Electric Soul</div>
                        <div class="upload-meta">32.5K plays</div>
                    </div>
                </div>

                <div class="upload-card">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Song" class="upload-cover">
                    <div class="upload-info">
                        <div class="upload-title">Smooth Groove</div>
                        <div class="upload-meta">28.9K plays</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings Section -->
        <div class="earnings-section">
            <!-- Total Earnings -->
            <div class="earnings-card">
                <div class="section-header">
                    <h3 class="section-title">Total Earnings</h3>
                </div>
                <div class="earnings-amount">$8,945.50</div>
                <div class="earnings-label">Available Balance</div>
                <button class="btn-withdraw">
                    <i class="fas fa-wallet me-2"></i>
                    Withdraw Funds
                </button>
            </div>

            <!-- Recent Transactions -->
            <div class="earnings-card">
                <div class="section-header">
                    <h3 class="section-title">Recent Transactions</h3>
                    <a href="#" class="view-all">View All</a>
                </div>
                <ul class="transaction-list">
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <h6>Streaming Revenue</h6>
                            <p>December 2024</p>
                        </div>
                        <div class="transaction-amount">+$2,450</div>
                    </li>
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <h6>Streaming Revenue</h6>
                            <p>November 2024</p>
                        </div>
                        <div class="transaction-amount">+$2,180</div>
                    </li>
                    <li class="transaction-item">
                        <div class="transaction-info">
                            <h6>Streaming Revenue</h6>
                            <p>October 2024</p>
                        </div>
                        <div class="transaction-amount">+$1,980</div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>