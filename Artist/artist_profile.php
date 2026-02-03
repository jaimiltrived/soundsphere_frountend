<?php 
$page_title = "Artist Profile - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Profile Header */
        .profile-header {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .profile-cover {
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        .profile-cover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=1200') center/cover;
            opacity: 0.3;
        }

        .edit-cover-btn {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .edit-cover-btn:hover {
            background: rgba(255, 122, 24, 0.3);
            border-color: #ff7a18;
        }

        .profile-info-section {
            padding: 0 2rem 2rem;
            margin-top: -80px;
            position: relative;
        }

        .profile-main {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .profile-avatar-container {
            position: relative;
        }

        .profile-avatar {
            width: 160px;
            height: 160px;
            border-radius: 20px;
            border: 5px solid rgba(255, 255, 255, 0.1);
            object-fit: cover;
            background: rgba(255, 255, 255, 0.05);
        }

        .edit-avatar-btn {
            position: absolute;
            bottom: 0.5rem;
            right: 0.5rem;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            border: 3px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .edit-avatar-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(255, 122, 24, 0.4);
        }

        .profile-details {
            flex: 1;
            padding-top: 1rem;
        }

        .profile-name {
            font-size: 32px;
            font-weight: 700;
            color: white;
            margin-bottom: 0.5rem;
        }

        .profile-username {
            font-size: 16px;
            color: #94a3b8;
            margin-bottom: 1rem;
        }

        .profile-bio {
            color: #cbd5e1;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .profile-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tag {
            padding: 0.5rem 1rem;
            background: rgba(255, 122, 24, 0.15);
            border: 1px solid rgba(255, 122, 24, 0.3);
            border-radius: 20px;
            color: #ff7a18;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-profile {
            padding: 0.875rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-edit {
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            color: white;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 122, 24, 0.4);
        }

        .btn-share {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        .btn-share:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 12px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: white;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 13px;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        /* Info Card */
        .info-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .card-header i {
            color: #ff7a18;
            font-size: 20px;
        }

        .card-header h3 {
            font-size: 18px;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .info-row {
            display: flex;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            width: 140px;
            color: #94a3b8;
            font-size: 14px;
            font-weight: 600;
        }

        .info-value {
            flex: 1;
            color: white;
            font-size: 14px;
        }

        /* Social Links */
        .social-links {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: white;
        }

        .social-link .social-icon {
            flex-shrink: 0;
        }

        .social-info {
            flex: 1;
        }

        .social-name {
            font-size: 14px;
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
        }

        .social-handle {
            font-size: 13px;
            color: #94a3b8;
        }

        /* Achievements */
        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .achievement-card {
            padding: 1.25rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .achievement-card:hover {
            background: rgba(255, 255, 255, 0.06);
            transform: translateY(-2px);
        }

        .achievement-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 1rem;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .achievement-title {
            font-size: 14px;
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
        }

        .achievement-desc {
            font-size: 12px;
            color: #94a3b8;
        }

        /* Verification Badge */
        .verified-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(34, 197, 94, 0.15);
            border: 1px solid rgba(34, 197, 94, 0.3);
            border-radius: 20px;
            color: #22c55e;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        /* Recent Activity */
        .activity-list {
            list-style: none;
            padding: 0;
            margin: 0;
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
            border-radius: 8px;
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

        /* Responsive */
        @media (max-width: 1200px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .profile-stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .profile-main {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-details {
                padding-top: 0;
            }

            .profile-actions {
                justify-content: center;
                flex-wrap: wrap;
            }

            .profile-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .achievements-grid {
                grid-template-columns: 1fr;
            }

            .edit-cover-btn {
                top: 1rem;
                right: 1rem;
                padding: 0.5rem 1rem;
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .profile-cover {
                height: 180px;
            }

            .profile-info-section {
                padding: 0 1rem 1.5rem;
                margin-top: -60px;
            }

            .profile-avatar {
                width: 120px;
                height: 120px;
            }

            .profile-name {
                font-size: 24px;
            }

            .profile-stats {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Artist Profile Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Profile Header -->
            <div class="profile-header">
                <div class="profile-cover">
                    <button class="edit-cover-btn">
                        <i class="fas fa-camera"></i>
                        Change Cover
                    </button>
                </div>

                <div class="profile-info-section">
                    <div class="profile-main">
                        <div class="profile-avatar-container">
                            <img src="https://i.pravatar.cc/300?img=33" alt="Artist" class="profile-avatar">
                            <button class="edit-avatar-btn">
                                <i class="fas fa-camera"></i>
                            </button>
                        </div>

                        <div class="profile-details">
                            <div class="verified-badge">
                                <i class="fas fa-check-circle"></i>
                                Verified Artist
                            </div>
                            <h1 class="profile-name">DJ Cool</h1>
                            <p class="profile-username">@djcool</p>
                            
                            <p class="profile-bio">
                                Electronic music producer & DJ from Los Angeles. Creating vibes that make you move. 
                                Specializing in EDM, House, and Progressive music. Available for bookings and collaborations.
                            </p>

                            <div class="profile-tags">
                                <span class="tag">Electronic</span>
                                <span class="tag">House</span>
                                <span class="tag">EDM</span>
                                <span class="tag">Progressive</span>
                            </div>

                            <div class="profile-actions">
                                <a href="settings.php" class="btn-profile btn-edit">
                                    <i class="fas fa-edit"></i>
                                    Edit Profile
                                </a>
                                <button class="btn-profile btn-share">
                                    <i class="fas fa-share-alt"></i>
                                    Share Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="profile-stats">
                        <div class="stat-item">
                            <div class="stat-value">48</div>
                            <div class="stat-label">Songs</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">12.8K</div>
                            <div class="stat-label">Followers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">245.6K</div>
                            <div class="stat-label">Total Plays</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">18.2K</div>
                            <div class="stat-label">Likes</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="content-grid">
                <!-- Left Column -->
                <div>
                    <!-- Personal Information -->
                    <div class="info-card">
                        <div class="card-header">
                            <i class="fas fa-user"></i>
                            <h3>Personal Information</h3>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Full Name</div>
                            <div class="info-value">David Johnson</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Email</div>
                            <div class="info-value">djcool@musicstream.com</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Phone</div>
                            <div class="info-value">+1 (555) 123-4567</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Location</div>
                            <div class="info-value">Los Angeles, California, USA</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Member Since</div>
                            <div class="info-value">January 15, 2023</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Website</div>
                            <div class="info-value">www.djcool.com</div>
                        </div>
                    </div>

                    <!-- Music Information -->
                    <div class="info-card">
                        <div class="card-header">
                            <i class="fas fa-music"></i>
                            <h3>Music Information</h3>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Primary Genre</div>
                            <div class="info-value">Electronic</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Sub Genres</div>
                            <div class="info-value">House, EDM, Progressive, Techno</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Active Years</div>
                            <div class="info-value">2020 - Present</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Record Label</div>
                            <div class="info-value">Independent</div>
                        </div>

                        <div class="info-row">
                            <div class="info-label">Instruments</div>
                            <div class="info-value">Synthesizer, DJ Controller, Piano</div>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="info-card">
                        <div class="card-header">
                            <i class="fas fa-clock"></i>
                            <h3>Recent Activity</h3>
                        </div>

                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-icon" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                    <i class="fas fa-music"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-text">Uploaded new song "Summer Vibes"</div>
                                    <div class="activity-time">2 hours ago</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-text">Reached 10K likes milestone</div>
                                    <div class="activity-time">1 day ago</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-text">Gained 250 new followers</div>
                                    <div class="activity-time">3 days ago</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background: linear-gradient(135deg, #22c55e, #4ade80);">
                                    <i class="fas fa-compact-disc"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-text">Released new album "Night Stories"</div>
                                    <div class="activity-time">1 week ago</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon" style="background: linear-gradient(135deg, #3b82f6, #60a5fa);">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-text">Earned "Rising Star" achievement</div>
                                    <div class="activity-time">2 weeks ago</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <!-- Social Media -->
                    <div class="info-card">
                        <div class="card-header">
                            <i class="fas fa-share-nodes"></i>
                            <h3>Social Media</h3>
                        </div>

                        <div class="social-links">
                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #3b5998, #4c70ba);">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">Facebook</div>
                                    <div class="social-handle">@djcoolmusic</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>

                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #E1306C, #F56040);">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">Instagram</div>
                                    <div class="social-handle">@djcool</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>

                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #1DA1F2, #4A99E9);">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">Twitter</div>
                                    <div class="social-handle">@djcool</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>

                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #FF0000, #CC0000);">
                                    <i class="fab fa-youtube"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">YouTube</div>
                                    <div class="social-handle">DJ Cool Music</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>

                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #1DB954, #1ed760);">
                                    <i class="fab fa-spotify"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">Spotify</div>
                                    <div class="social-handle">DJ Cool</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>

                            <a href="#" class="social-link">
                                <div class="social-icon" style="background: linear-gradient(135deg, #FF5500, #FF6619);">
                                    <i class="fab fa-soundcloud"></i>
                                </div>
                                <div class="social-info">
                                    <div class="social-name">SoundCloud</div>
                                    <div class="social-handle">djcoolbeats</div>
                                </div>
                                <i class="fas fa-external-link-alt" style="color: #64748b;"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Achievements -->
                    <div class="info-card">
                        <div class="card-header">
                            <i class="fas fa-trophy"></i>
                            <h3>Achievements</h3>
                        </div>

                        <div class="achievements-grid">
                            <div class="achievement-card">
                                <div class="achievement-icon" style="background: linear-gradient(135deg, #fbbf24, #f59e0b);">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="achievement-title">Rising Star</div>
                                <div class="achievement-desc">10K+ Followers</div>
                            </div>

                            <div class="achievement-card">
                                <div class="achievement-icon" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <div class="achievement-title">Hot Track</div>
                                <div class="achievement-desc">100K+ Plays</div>
                            </div>

                            <div class="achievement-card">
                                <div class="achievement-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="achievement-title">Fan Favorite</div>
                                <div class="achievement-desc">10K+ Likes</div>
                            </div>

                            <div class="achievement-card">
                                <div class="achievement-icon" style="background: linear-gradient(135deg, #22c55e, #4ade80);">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div class="achievement-title">Verified</div>
                                <div class="achievement-desc">Official Artist</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>