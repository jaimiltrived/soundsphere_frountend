<?php 
$page_title = "Home - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Home Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            
            <!-- Welcome Banner -->
            <div class="welcome-banner">
                <div class="welcome-content">
                    <div class="welcome-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <div>
                        <h1 class="welcome-title">Good Evening, John!</h1>
                        <p class="welcome-subtitle">Ready to discover some amazing music?</p>
                    </div>
                </div>
                <div class="welcome-actions">
                    <button class="btn-search-music">
                        <i class="fas fa-search me-2"></i>Search Music
                    </button>
                </div>
            </div>

            <!-- Quick Access -->
            <section class="content-section">
                <h2 class="section-title-home mb-3">Quick Access</h2>
                <div class="quick-access-grid">
                    <!-- Recently Played -->
                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Summer Vibes</div>
                            <div class="quick-artist">DJ Cool</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Midnight Dreams</div>
                            <div class="quick-artist">The Nighters</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Electric Soul</div>
                            <div class="quick-artist">Bass Masters</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Smooth Groove</div>
                            <div class="quick-artist">Emma Davis</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Street Rhythm</div>
                            <div class="quick-artist">MC Flow</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>

                    <div class="quick-card">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=300" alt="Song">
                        <div class="quick-info">
                            <div class="quick-name">Acoustic Love</div>
                            <div class="quick-artist">Sarah Johnson</div>
                        </div>
                        <button class="quick-play-btn">
                            <i class="fas fa-play"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Trending Now -->
            <section class="content-section">
                <div class="section-header-home">
                    <h2 class="section-title-home">
                        <i class="fas fa-fire me-2"></i>Trending Now
                    </h2>
                    <a href="trending.php" class="see-all-link">See All</a>
                </div>
                <div class="music-cards-grid">
                    <!-- Song Card 1 -->
                    <div class="music-card">
                        <div class="music-card-image">
                            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Song">
                            <div class="music-overlay">
                                <button class="play-overlay-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <span class="trending-badge">
                                <i class="fas fa-fire"></i> #1
                            </span>
                        </div>
                        <div class="music-card-content">
                            <h3 class="music-card-title">Summer Vibes</h3>
                            <p class="music-card-artist">DJ Cool</p>
                            <div class="music-card-meta">
                                <span><i class="fas fa-play-circle me-1"></i>2.5M</span>
                                <span><i class="fas fa-heart me-1"></i>158K</span>
                            </div>
                        </div>
                    </div>

                    <!-- Song Card 2 -->
                    <div class="music-card">
                        <div class="music-card-image">
                            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Song">
                            <div class="music-overlay">
                                <button class="play-overlay-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <span class="trending-badge">
                                <i class="fas fa-fire"></i> #2
                            </span>
                        </div>
                        <div class="music-card-content">
                            <h3 class="music-card-title">Midnight Dreams</h3>
                            <p class="music-card-artist">The Nighters</p>
                            <div class="music-card-meta">
                                <span><i class="fas fa-play-circle me-1"></i>1.8M</span>
                                <span><i class="fas fa-heart me-1"></i>142K</span>
                            </div>
                        </div>
                    </div>

                    <!-- Song Card 3 -->
                    <div class="music-card">
                        <div class="music-card-image">
                            <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Song">
                            <div class="music-overlay">
                                <button class="play-overlay-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <span class="trending-badge">
                                <i class="fas fa-fire"></i> #3
                            </span>
                        </div>
                        <div class="music-card-content">
                            <h3 class="music-card-title">Electric Soul</h3>
                            <p class="music-card-artist">Bass Masters</p>
                            <div class="music-card-meta">
                                <span><i class="fas fa-play-circle me-1"></i>1.5M</span>
                                <span><i class="fas fa-heart me-1"></i>128K</span>
                            </div>
                        </div>
                    </div>

                    <!-- Song Card 4 -->
                    <div class="music-card">
                        <div class="music-card-image">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Song">
                            <div class="music-overlay">
                                <button class="play-overlay-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <span class="trending-badge">
                                <i class="fas fa-fire"></i> #4
                            </span>
                        </div>
                        <div class="music-card-content">
                            <h3 class="music-card-title">Smooth Groove</h3>
                            <p class="music-card-artist">Emma Davis</p>
                            <div class="music-card-meta">
                                <span><i class="fas fa-play-circle me-1"></i>1.3M</span>
                                <span><i class="fas fa-heart me-1"></i>115K</span>
                            </div>
                        </div>
                    </div>

                    <!-- Song Card 5 -->
                    <div class="music-card">
                        <div class="music-card-image">
                            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Song">
                            <div class="music-overlay">
                                <button class="play-overlay-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <span class="trending-badge">
                                <i class="fas fa-fire"></i> #5
                            </span>
                        </div>
                        <div class="music-card-content">
                            <h3 class="music-card-title">Street Rhythm</h3>
                            <p class="music-card-artist">MC Flow</p>
                            <div class="music-card-meta">
                                <span><i class="fas fa-play-circle me-1"></i>1.2M</span>
                                <span><i class="fas fa-heart me-1"></i>98K</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Popular  -->
            <section class="content-section">
                <div class="section-header-home">
                    <h2 class="section-title-home">
                        <i class="fas fa-list-music me-2"></i>Popular Playlists
                    </h2>
                    <a href="playlist.php" class="see-all-link">See All</a>
                </div>
                <div class="playlist-scroll">
                    <!-- Playlist 1 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h4 class="playlist-title-home">Hot Hits 2024</h4>
                        <p class="playlist-desc-home">The hottest tracks right now</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>50 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 20m</span>
                        </div>
                    </div>

                    <!-- Playlist 2 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                            <i class="fas fa-moon"></i>
                        </div>
                        <h4 class="playlist-title-home">Chill Nights</h4>
                        <p class="playlist-desc-home">Relax and unwind</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>42 songs</span>
                            <span><i class="fas fa-clock me-1"></i>2h 45m</span>
                        </div>
                    </div>

                    <!-- Playlist 3 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <h4 class="playlist-title-home">Workout Energy</h4>
                        <p class="playlist-desc-home">Pump up your workout</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>38 songs</span>
                            <span><i class="fas fa-clock me-1"></i>2h 15m</span>
                        </div>
                    </div>

                    <!-- Playlist 4 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4 class="playlist-title-home">Road Trip</h4>
                        <p class="playlist-desc-home">Perfect for long drives</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>65 songs</span>
                            <span><i class="fas fa-clock me-1"></i>4h 10m</span>
                        </div>
                    </div>

                    <!-- Playlist 5 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="playlist-title-home">Love Songs</h4>
                        <p class="playlist-desc-home">Romantic vibes</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>45 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 5m</span>
                        </div>
                    </div>

                    <!-- Playlist 6 -->
                    <div class="playlist-card-home">
                        <div class="playlist-icon-home" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4 class="playlist-title-home">Summer Vibes</h4>
                        <p class="playlist-desc-home">Sunny day playlist</p>
                        <div class="playlist-meta-home">
                            <span><i class="fas fa-music me-1"></i>52 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 30m</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- New Releases -->
            <section class="content-section">
                <div class="section-header-home">
                    <h2 class="section-title-home">
                        <i class="fas fa-compact-disc me-2"></i>New Releases
                    </h2>
                    <a href="album.php" class="see-all-link">See All</a>
                </div>
                <div class="albums-scroll">
                    <!-- Album 1 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Sunset Collection</h4>
                        <p class="album-artist-home">DJ Cool</p>
                        <p class="album-year-home">2024 • Album</p>
                    </div>

                    <!-- Album 2 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Night Stories</h4>
                        <p class="album-artist-home">The Nighters</p>
                        <p class="album-year-home">2024 • Album</p>
                    </div>

                    <!-- Album 3 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Electric Dreams</h4>
                        <p class="album-artist-home">Bass Masters</p>
                        <p class="album-year-home">2024 • EP</p>
                    </div>

                    <!-- Album 4 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Heartstrings</h4>
                        <p class="album-artist-home">Sarah Johnson</p>
                        <p class="album-year-home">2024 • Album</p>
                    </div>

                    <!-- Album 5 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Smooth Jazz</h4>
                        <p class="album-artist-home">Jazz Quartet</p>
                        <p class="album-year-home">2024 • Album</p>
                    </div>

                    <!-- Album 6 -->
                    <div class="album-card-home">
                        <div class="album-cover-home">
                            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=300" alt="Album">
                            <div class="album-overlay-home">
                                <button class="album-play-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                        <h4 class="album-title-home">Urban Beats</h4>
                        <p class="album-artist-home">MC Flow</p>
                        <p class="album-year-home">2024 • Album</p>
                    </div>
                </div>
            </section>

            <!-- Top Artists -->
            <section class="content-section">
                <div class="section-header-home">
                    <h2 class="section-title-home">
                        <i class="fas fa-microphone me-2"></i>Top Artists
                    </h2>
                    <a href="artists.php" class="see-all-link">See All</a>
                </div>
                <div class="artists-grid">
                    <!-- Artist 1 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=33" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">DJ Cool</h4>
                        <p class="artist-genre-home">Electronic • Pop</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>2.5M followers</span>
                        </div>
                    </div>

                    <!-- Artist 2 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=45" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">Sarah Johnson</h4>
                        <p class="artist-genre-home">Pop • Acoustic</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>1.8M followers</span>
                        </div>
                    </div>

                    <!-- Artist 3 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=12" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">The Nighters</h4>
                        <p class="artist-genre-home">Rock • Indie</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>1.5M followers</span>
                        </div>
                    </div>

                    <!-- Artist 4 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=68" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">MC Flow</h4>
                        <p class="artist-genre-home">Hip Hop • Rap</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>1.3M followers</span>
                        </div>
                    </div>

                    <!-- Artist 5 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=27" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">Emma Davis</h4>
                        <p class="artist-genre-home">R&B • Soul</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>1.1M followers</span>
                        </div>
                    </div>

                    <!-- Artist 6 -->
                    <div class="artist-card-home">
                        <div class="artist-image-home">
                            <img src="https://i.pravatar.cc/300?img=52" alt="Artist">
                        </div>
                        <h4 class="artist-name-home">Jazz Quartet</h4>
                        <p class="artist-genre-home">Jazz • Blues</p>
                        <div class="artist-stats-home">
                            <span><i class="fas fa-users me-1"></i>950K followers</span>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<?php  include 'musicplayer.php' ?>


<script>
document.querySelectorAll('.playlist-scroll, .albums-scroll').forEach(container => {
    let isDown = false;
    let startX;
    let scrollLeft;

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });

    container.addEventListener('mouseleave', () => {
        isDown = false;
    });

    container.addEventListener('mouseup', () => {
        isDown = false;
    });

    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2;
        container.scrollLeft = scrollLeft - walk;
    });
});
</script>



<?php include 'footer.php'; ?>