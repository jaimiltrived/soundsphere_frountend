<?php
$page_title = "Summer Vibes - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Song Detail Content -->
    <div class="song-detail-page">
        <!-- Hero Section with Gradient Background -->
        <div class="song-hero-section"
            style="background: linear-gradient(180deg, rgba(255, 122, 24, 0.4) 0%, rgba(20, 20, 26, 1) 100%);">
            <div class="container-fluid">
                <div class="song-hero-content">
                    <div class="song-hero-left">
                        <div class="album-art-wrapper">
                            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600"
                                alt="Summer Vibes" class="album-art-hero">
                            <div class="album-art-shadow"></div>
                        </div>
                    </div>
                    <div class="song-hero-right">
                        <span class="song-type-label">SONG</span>
                        <h1 class="song-title-hero">Summer Vibes</h1>
                        <div class="song-meta-hero">
                            <img src="https://i.pravatar.cc/40?img=33" alt="Artist" class="artist-avatar-small">
                            <a href="#" class="artist-link-hero">DJ Cool</a>
                            <span class="meta-dot">•</span>
                            <span class="meta-item">2024</span>
                            <span class="meta-dot">•</span>
                            <span class="meta-item">3:45</span>
                            <span class="meta-dot">•</span>
                            <span class="meta-item">2.5M plays</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="song-content-section">
            <div class="container-fluid">

                <!-- Action Buttons -->
                <div class="action-buttons-row">
                    <button class="btn-play-hero" id="btnPlayHero">
                        <i class="fas fa-play"></i>
                    </button>
                    <button class="btn-action-icon liked" title="Remove from Liked Songs">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="btn-action-icon" title="Add to playlist">
                        <i class="fas fa-plus"></i>
                    </button>
                    <button class="btn-action-icon" title="More options">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>

                <!-- Lyrics Section -->
                <div class="lyrics-section-spotify">
                    <div class="section-header-spotify">
                        <h2>Lyrics</h2>
                    </div>
                    <div class="lyrics-content-spotify">
                        <div class="lyric-block">
                            <div class="lyric-timestamp">[0:15]</div>
                            <div class="lyric-text-group">
                                <p class="lyric-line active">Sunshine on my face, feeling so alive</p>
                                <p class="lyric-line">Dancing through the day, got that summer vibe</p>
                                <p class="lyric-line">Palm trees swaying slow, ocean breeze so sweet</p>
                                <p class="lyric-line">Music in the air, moving to the beat</p>
                            </div>
                        </div>

                        <div class="lyric-block">
                            <div class="lyric-timestamp">[0:45]</div>
                            <div class="lyric-text-group">
                                <p class="lyric-line">We got those summer vibes, yeah</p>
                                <p class="lyric-line">Feeling good, feeling right, yeah</p>
                                <p class="lyric-line">Under the starlight, dancing all night</p>
                                <p class="lyric-line">Summer vibes, summer vibes</p>
                            </div>
                        </div>

                        <div class="lyric-block">
                            <div class="lyric-timestamp">[1:20]</div>
                            <div class="lyric-text-group">
                                <p class="lyric-line">Golden hour glow, painting skies above</p>
                                <p class="lyric-line">Friends all around me, spreading all the love</p>
                                <p class="lyric-line">No worries on my mind, just living for today</p>
                                <p class="lyric-line">Summer memories made in every way</p>
                            </div>
                        </div>

                        <div class="lyric-block">
                            <div class="lyric-timestamp">[1:50]</div>
                            <div class="lyric-text-group">
                                <p class="lyric-line">We got those summer vibes, yeah</p>
                                <p class="lyric-line">Feeling good, feeling right, yeah</p>
                                <p class="lyric-line">Under the starlight, dancing all night</p>
                                <p class="lyric-line">Summer vibes, summer vibes</p>
                            </div>
                        </div>

                        <div class="lyric-block">
                            <div class="lyric-timestamp">[2:25]</div>
                            <div class="lyric-text-group">
                                <p class="lyric-line">Let the rhythm take control</p>
                                <p class="lyric-line">Feel it deep within your soul</p>
                                <p class="lyric-line">This is where we come alive</p>
                                <p class="lyric-line">Living for those summer vibes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artist Section -->
                <div class="artist-section-spotify">
                    <div class="section-header-spotify">
                        <h2>Artist</h2>
                    </div>
                    <div class="artist-card-spotify">
                        <img src="https://i.pravatar.cc/200?img=33" alt="DJ Cool" class="artist-image-spotify">
                        <div class="artist-info-spotify">
                            <h3 class="artist-name-spotify">DJ Cool</h3>
                            <p class="artist-followers">2.5M monthly listeners</p>
                            <p class="artist-bio">Electronic music producer and DJ known for creating infectious summer
                                anthems and feel-good tracks.</p>
                            <button class="btn-follow-artist">Follow</button>
                        </div>
                    </div>
                </div>

                <!-- Recommended Songs -->
                <div class="recommended-section">
                    <div class="section-header-spotify">
                        <h2>Recommended</h2>
                        <p class="section-subtitle">Based on what's in this song</p>
                    </div>
                    <div class="recommended-grid">
                        <!-- Song 1 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Midnight Dreams</h4>
                            <p class="recommended-artist">The Nighters</p>
                        </div>

                        <!-- Song 2 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Electric Soul</h4>
                            <p class="recommended-artist">Bass Masters</p>
                        </div>

                        <!-- Song 3 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Street Rhythm</h4>
                            <p class="recommended-artist">MC Flow</p>
                        </div>

                        <!-- Song 4 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Acoustic Love</h4>
                            <p class="recommended-artist">Sarah Johnson</p>
                        </div>

                        <!-- Song 5 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Smooth Groove</h4>
                            <p class="recommended-artist">Emma Davis</p>
                        </div>

                        <!-- Song 6 -->
                        <div class="recommended-card">
                            <div class="recommended-image">
                                <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=300"
                                    alt="Song">
                                <button class="btn-play-recommended">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                            <h4 class="recommended-title">Neon Lights</h4>
                            <p class="recommended-artist">Synth Wave</p>
                        </div>
                    </div>
                </div>

                <!-- Song Credits -->
                <div class="credits-section">
                    <div class="section-header-spotify">
                        <h2>Credits</h2>
                    </div>
                    <div class="credits-grid">
                        <div class="credit-item-spotify">
                            <span class="credit-role">Written by</span>
                            <span class="credit-name">DJ Cool, Sarah Johnson</span>
                        </div>
                        <div class="credit-item-spotify">
                            <span class="credit-role">Produced by</span>
                            <span class="credit-name">Mike Thompson</span>
                        </div>
                        <div class="credit-item-spotify">
                            <span class="credit-role">Mixed by</span>
                            <span class="credit-name">Alex Martinez</span>
                        </div>
                        <div class="credit-item-spotify">
                            <span class="credit-role">Mastered by</span>
                            <span class="credit-name">Pro Audio Studios</span>
                        </div>
                        <div class="credit-item-spotify">
                            <span class="credit-role">Label</span>
                            <span class="credit-name">Summer Records</span>
                        </div>
                        <div class="credit-item-spotify">
                            <span class="credit-role">Released</span>
                            <span class="credit-name">January 15, 2024</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'musicplayer.php'; ?>


<script>
    // Play button functionality
    const btnPlayHero = document.getElementById('btnPlayHero');
    const musicPlayer = document.getElementById('musicPlayer');
    let isPlayingHero = false;

    btnPlayHero.addEventListener('click', () => {
        isPlayingHero = !isPlayingHero;

        if (isPlayingHero) {
            btnPlayHero.innerHTML = '<i class="fas fa-pause"></i>';
            musicPlayer.classList.add('active');
        } else {
            btnPlayHero.innerHTML = '<i class="fas fa-play"></i>';
        }
    });


    const lyricLines = document.querySelectorAll('.lyric-line');
    lyricLines.forEach(line => {
        line.addEventListener('click', () => {
            lyricLines.forEach(l => l.classList.remove('active'));
            line.classList.add('active');
        });
    });



</script>

<?php include 'footer.php'; ?>