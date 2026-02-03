<?php 
$page_title = "Liked Songs - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Liked Songs Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            
            <!-- Header with Hero -->
            <div class="liked-songs-hero">
                <div class="hero-gradient-bg">
                    <div class="hero-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>
                <div class="hero-content">
                    <span class="hero-label">PLAYLIST</span>
                    <h1 class="hero-title">Liked Songs</h1>
                    <div class="hero-meta">
                        <img src="https://i.pravatar.cc/40?img=33" alt="User" class="hero-avatar">
                        <span class="hero-username">John Doe</span>
                        <span class="hero-dot">•</span>
                        <span class="hero-count">45 songs</span>
                        <span class="hero-dot">•</span>
                        <span class="hero-duration">3h 25m</span>
                    </div>
                </div>
            </div>

            <!-- Actions Bar -->
            <div class="actions-bar">
                <div class="actions-left">
                    <button class="btn-play-all">
                        <i class="fas fa-play"></i>
                        Play All
                    </button>
                    <button class="btn-shuffle-all">
                        <i class="fas fa-random me-2"></i>
                        Shuffle
                    </button>
                </div>
                <div class="actions-right">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search in liked songs..." id="searchInput">
                    </div>
                    <div class="view-toggle">
                        <button class="btn-view active" data-view="grid" title="Grid View">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="btn-view" data-view="list" title="List View">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="btn-sort" id="sortDropdown">
                            <i class="fas fa-sort-amount-down me-2"></i>
                            Sort By
                        </button>
                    </div>
                </div>
            </div>

            <!-- Songs Container - Grid View (Default) -->
            <div class="songs-container grid-view" id="songsContainer">
                <!-- Song Card 1 -->
                <div class="song-card" data-song-id="1">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Summer Vibes</h3>
                        <p class="song-card-artist">DJ Cool</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:45</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 2 -->
                <div class="song-card" data-song-id="2">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Midnight Dreams</h3>
                        <p class="song-card-artist">The Nighters</p>
                        <div class="song-card-footer">
                            <span class="song-duration">4:12</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 3 -->
                <div class="song-card" data-song-id="3">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Electric Soul</h3>
                        <p class="song-card-artist">Bass Masters</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:28</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 4 -->
                <div class="song-card" data-song-id="4">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Smooth Groove</h3>
                        <p class="song-card-artist">Emma Davis</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:15</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 5 -->
                <div class="song-card" data-song-id="5">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Street Rhythm</h3>
                        <p class="song-card-artist">MC Flow</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:56</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 6 -->
                <div class="song-card" data-song-id="6">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Acoustic Love</h3>
                        <p class="song-card-artist">Sarah Johnson</p>
                        <div class="song-card-footer">
                            <span class="song-duration">4:32</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 7 -->
                <div class="song-card" data-song-id="7">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Neon Lights</h3>
                        <p class="song-card-artist">Synth Wave</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:38</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 8 -->
                <div class="song-card" data-song-id="8">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Ocean Waves</h3>
                        <p class="song-card-artist">Chill Sounds</p>
                        <div class="song-card-footer">
                            <span class="song-duration">5:21</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 9 -->
                <div class="song-card" data-song-id="9">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1571330735066-03aaa9429d89?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Golden Hour</h3>
                        <p class="song-card-artist">Sunset Band</p>
                        <div class="song-card-footer">
                            <span class="song-duration">4:05</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 10 -->
                <div class="song-card" data-song-id="10">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">City Lights</h3>
                        <p class="song-card-artist">Urban Jazz</p>
                        <div class="song-card-footer">
                            <span class="song-duration">3:52</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 11 -->
                <div class="song-card" data-song-id="11">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Cosmic Dance</h3>
                        <p class="song-card-artist">Space Beats</p>
                        <div class="song-card-footer">
                            <span class="song-duration">4:18</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Song Card 12 -->
                <div class="song-card" data-song-id="12">
                    <div class="song-card-image">
                        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400" alt="Song">
                        <div class="song-card-overlay">
                            <button class="btn-play-card">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <button class="btn-like-card active">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    <div class="song-card-content">
                        <h3 class="song-card-title">Mountain Echo</h3>
                        <p class="song-card-artist">Nature Sounds</p>
                        <div class="song-card-footer">
                            <span class="song-duration">6:10</span>
                            <button class="btn-more">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'musicplayer.php';?>


<script>
// View Toggle
const viewButtons = document.querySelectorAll('.btn-view');
const songsContainer = document.getElementById('songsContainer');

viewButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const view = btn.getAttribute('data-view');
        
        // Update active state
        viewButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        // Update container class
        if (view === 'grid') {
            songsContainer.classList.remove('list-view');
            songsContainer.classList.add('grid-view');
        } else {
            songsContainer.classList.remove('grid-view');
            songsContainer.classList.add('list-view');
        }
    });
});



const likeButtons = document.querySelectorAll('.btn-like-card');
likeButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        btn.classList.toggle('active');
    });
});





document.querySelector('.btn-play-all').addEventListener('click', () => {
    musicPlayer.classList.add('active');
});
</script>

<?php include 'footer.php'; ?>