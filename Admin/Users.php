<?php
$page_title = "Users - Admin Panel";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Users Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            <!-- Page Header -->
            <div
                class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                <div>
                    <h2 class="text-white fw-bold mb-1">
                        <span class="gradient-text">User Management</span>
                    </h2>
                    <p class="text-secondary mb-0">Manage and monitor all registered users on your platform.</p>
                </div>
                <div class="d-flex gap-2">

                    <button class="btn px-4 py-2 rounded-3 fw-semibold"
                        style="background: linear-gradient(135deg, #ff7a18, #ffb347); color: white; border: none;">
                        <i class="fas fa-user-plus me-2"></i>Add User
                    </button>
                </div>
            </div>

            <!-- Stats Overview -->
            <!-- <div class="row g-3 mb-4">
                <div class="col-6 col-md-3">
                    <div class="user-stat-card">
                        <div class="stat-header">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i> +12%
                            </div>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-value">12,847</h3>
                            <p class="stat-label">Total Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="user-stat-card">
                        <div class="stat-header">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i> +8%
                            </div>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-value">9,234</h3>
                            <p class="stat-label">Active Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="user-stat-card">
                        <div class="stat-header">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                                <i class="fas fa-crown"></i>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i> +15%
                            </div>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-value">1,523</h3>
                            <p class="stat-label">Premium Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="user-stat-card">
                        <div class="stat-header">
                            <div class="stat-icon" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="stat-trend up">
                                <i class="fas fa-arrow-up"></i> +23%
                            </div>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-value">342</h3>
                            <p class="stat-label">New This Month</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Filters and Search -->
            <div class="dashboard-card rounded-4 p-3 mb-4">
                <div class="row g-3 align-items-center">
                    <div class="col-md-4">
                        <div class="search-box-user">
                            <i class="fas fa-search"></i>
                            <input type="text" id="searchUser" placeholder="Search by name, email, or ID...">
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterPlan">
                            <option value="">All Plans</option>
                            <option value="free">Free</option>
                            <option value="premium">Premium</option>
                            <option value="pro">Pro</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="filterStatus">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="suspended">Suspended</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <select class="form-select custom-input" id="sortBy">
                            <option value="recent">Recent</option>
                            <option value="name">Name A-Z</option>
                            <option value="activity">Most Active</option>
                            <option value="revenue">Top Revenue</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="view-toggle-user">
                            <button class="view-btn active" id="viewCards">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="view-btn" id="viewTable">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Cards View (Default) -->
            <div class="users-cards-view" id="usersCardsContainer">
                <!-- User Card 1 -->
                <div class="user-card" data-plan="premium" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=1" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge premium">
                            <i class="fas fa-crown me-1"></i>Premium
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">John Anderson</h5>
                        <p class="user-email">john.anderson@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Jan 2024</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>New York, US</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">234</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">1.2K</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">45h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action" onclick="window.location.href='user-detail.php'">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 2 -->
                <div class="user-card" data-plan="free" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=5" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge free">
                            Free
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Sarah Williams</h5>
                        <p class="user-email">sarah.w@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Dec 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>London, UK</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">42</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">856</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">28h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 3 -->
                <div class="user-card" data-plan="pro" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=8" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge pro">
                            <i class="fas fa-star me-1"></i>Pro
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Michael Chen</h5>
                        <p class="user-email">m.chen@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Nov 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Tokyo, JP</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">567</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">3.4K</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">120h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 4 -->
                <div class="user-card" data-plan="premium" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=9" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge premium">
                            <i class="fas fa-crown me-1"></i>Premium
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Emma Davis</h5>
                        <p class="user-email">emma.davis@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Oct 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Paris, FR</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">189</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">2.1K</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">67h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 5 -->
                <div class="user-card" data-plan="free" data-status="inactive">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=12" alt="User">
                            <div class="user-status-badge inactive"></div>
                        </div>
                        <div class="user-plan-badge free">
                            Free
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Alex Martinez</h5>
                        <p class="user-email">alex.m@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Sep 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Madrid, ES</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">23</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">345</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">12h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 6 -->
                <div class="user-card" data-plan="premium" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=15" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge premium">
                            <i class="fas fa-crown me-1"></i>Premium
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Lisa Thompson</h5>
                        <p class="user-email">lisa.t@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Aug 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Sydney, AU</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">301</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">1.8K</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">89h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 7 -->
                <div class="user-card" data-plan="free" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=20" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge free">
                            Free
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">David Kim</h5>
                        <p class="user-email">d.kim@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Jul 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Seoul, KR</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">67</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">923</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">34h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- User Card 8 -->
                <div class="user-card" data-plan="pro" data-status="active">
                    <div class="user-card-header">
                        <div class="user-avatar">
                            <img src="https://i.pravatar.cc/150?img=25" alt="User">
                            <div class="user-status-badge active"></div>
                        </div>
                        <div class="user-plan-badge pro">
                            <i class="fas fa-star me-1"></i>Pro
                        </div>
                    </div>
                    <div class="user-card-body">
                        <h5 class="user-name">Sophie Garcia</h5>
                        <p class="user-email">sophie.g@email.com</p>
                        <div class="user-meta">
                            <span><i class="fas fa-calendar me-1"></i>Joined Jun 2023</span>
                            <span><i class="fas fa-map-marker-alt me-1"></i>Berlin, DE</span>
                        </div>
                        <div class="user-stats-row">
                            <div class="user-stat-item">
                                <div class="stat-value-small">445</div>
                                <div class="stat-label-small">Playlists</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">2.9K</div>
                                <div class="stat-label-small">Songs</div>
                            </div>
                            <div class="user-stat-item">
                                <div class="stat-value-small">156h</div>
                                <div class="stat-label-small">Listening</div>
                            </div>
                        </div>
                    </div>
                    <div class="user-card-footer">
                        <button class="btn-user-action">
                            <i class="fas fa-eye me-1"></i>View Profile
                        </button>
                        <div class="user-actions-dropdown">
                            <button class="btn-user-more">
                                <i class="fas fa-ellipsis-v"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Table View -->
            <div class="users-table-view" id="usersTableContainer" style="display: none;">
                <div class="table-container">
                    <table class="users-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Email</th>
                                <th>Plan</th>
                                <th>Status</th>
                                <th>Joined</th>
                                <th>Activity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-plan="premium" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=1" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">John Anderson</div>
                                            <div class="table-user-location">New York, US</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">john.anderson@email.com</td>
                                <td><span class="plan-badge premium"><i class="fas fa-crown me-1"></i>Premium</span>
                                </td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Jan 15, 2024</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 85%;"></div>
                                    </div>
                                    <small class="text-secondary">45h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="free" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=5" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Sarah Williams</div>
                                            <div class="table-user-location">London, UK</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">sarah.w@email.com</td>
                                <td><span class="plan-badge free">Free</span></td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Dec 8, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 60%;"></div>
                                    </div>
                                    <small class="text-secondary">28h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="pro" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=8" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Michael Chen</div>
                                            <div class="table-user-location">Tokyo, JP</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">m.chen@email.com</td>
                                <td><span class="plan-badge pro"><i class="fas fa-star me-1"></i>Pro</span></td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Nov 22, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 95%;"></div>
                                    </div>
                                    <small class="text-secondary">120h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="premium" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=9" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Emma Davis</div>
                                            <div class="table-user-location">Paris, FR</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">emma.davis@email.com</td>
                                <td><span class="plan-badge premium"><i class="fas fa-crown me-1"></i>Premium</span>
                                </td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Oct 10, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 70%;"></div>
                                    </div>
                                    <small class="text-secondary">67h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="free" data-status="inactive">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=12" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Alex Martinez</div>
                                            <div class="table-user-location">Madrid, ES</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">alex.m@email.com</td>
                                <td><span class="plan-badge free">Free</span></td>
                                <td><span class="status-badge inactive">Inactive</span></td>
                                <td class="text-secondary">Sep 5, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 25%;"></div>
                                    </div>
                                    <small class="text-secondary">12h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="premium" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=15" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Lisa Thompson</div>
                                            <div class="table-user-location">Sydney, AU</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">lisa.t@email.com</td>
                                <td><span class="plan-badge premium"><i class="fas fa-crown me-1"></i>Premium</span>
                                </td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Aug 18, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 90%;"></div>
                                    </div>
                                    <small class="text-secondary">89h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="free" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=20" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">David Kim</div>
                                            <div class="table-user-location">Seoul, KR</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">d.kim@email.com</td>
                                <td><span class="plan-badge free">Free</span></td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Jul 3, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 55%;"></div>
                                    </div>
                                    <small class="text-secondary">34h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-plan="pro" data-status="active">
                                <td>
                                    <div class="table-user-info">
                                        <img src="https://i.pravatar.cc/150?img=25" alt="User" class="table-avatar">
                                        <div>
                                            <div class="table-user-name">Sophie Garcia</div>
                                            <div class="table-user-location">Berlin, DE</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-secondary">sophie.g@email.com</td>
                                <td><span class="plan-badge pro"><i class="fas fa-star me-1"></i>Pro</span></td>
                                <td><span class="status-badge active">Active</span></td>
                                <td class="text-secondary">Jun 12, 2023</td>
                                <td>
                                    <div class="activity-bar">
                                        <div class="activity-fill" style="width: 100%;"></div>
                                    </div>
                                    <small class="text-secondary">156h listening</small>
                                </td>
                                <td>
                                    <div class="table-actions">
                                        <button class="table-action-btn" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="table-action-btn" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="table-action-btn" title="More">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-4">
                <hr class="border-secondary">
            </div>


            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <p class="text-secondary mb-0">Showing 1-8 of 12,847 users</p>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">1606</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>



<script>




    document.getElementById('viewCards').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewTable').classList.remove('active');
        document.getElementById('usersCardsContainer').style.display = 'grid';
        document.getElementById('usersTableContainer').style.display = 'none';
    });

    // View toggle - Table
    document.getElementById('viewTable').addEventListener('click', function () {
        this.classList.add('active');
        document.getElementById('viewCards').classList.remove('active');
        document.getElementById('usersCardsContainer').style.display = 'none';
        document.getElementById('usersTableContainer').style.display = 'block';
    });
</script>

<?php include 'footer.php'; ?>