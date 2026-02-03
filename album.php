<?php
$page_title = "Albums - MusicStream";
include 'header.php';
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Albums Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">

            <!-- Page Header -->
            <div class="page-header-albums">
                <div class="header-content-albums">
                    <h1 class="page-title-albums">Albums</h1>
                    <p class="page-subtitle-albums">Explore complete albums from your favorite artists</p>
                </div>
            </div>

            <!-- Filters & Actions Bar -->
            <div class="filters-bar-albums">
                <div class="filters-left-albums">
                    <div class="type-filters">
                        <button class="btn-type active" data-type="all">All Albums</button>
                        <button class="btn-type" data-type="album">Albums</button>
                        <button class="btn-type" data-type="ep">EPs</button>
                        <button class="btn-type" data-type="single">Singles</button>
                        <button class="btn-type" data-type="compilation">Compilations</button>
                    </div>
                </div>
                <div class="filters-right-albums">
                    <div class="search-box-albums">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search albums..." id="searchAlbums">
                    </div>
                    <div class="view-toggle-albums">
                        <button class="btn-view-albums active" data-view="grid" title="Grid View">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="btn-view-albums" data-view="list" title="List View">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="btn-sort-albums">
                            <i class="fas fa-sort-amount-down me-2"></i>
                            Sort
                        </button>
                    </div>
                </div>
            </div>

            <!-- Albums Container -->
            <div class="albums-container grid-view" id="albumsContainer">

                <!-- Album Card 1 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Sunset Collection</h3>
                        <p class="album-card-artist">
                            <a href="#">DJ Cool</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">12 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 2 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Night Stories</h3>
                        <p class="album-card-artist">
                            <a href="#">The Nighters</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">10 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 3 -->
                <div class="album-card" data-type="ep">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1487180144351-b8472da7d491?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge ep">EP</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Electric Dreams</h3>
                        <p class="album-card-artist">
                            <a href="#">Bass Masters</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">6 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 4 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Heartstrings</h3>
                        <p class="album-card-artist">
                            <a href="#">Sarah Johnson</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">14 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action added" title="Added to Library">
                            <i class="fas fa-check"></i>
                        </button>
                        <button class="btn-album-action liked" title="Unlike">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 5 -->
                <div class="album-card" data-type="single">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge single">Single</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Smooth Groove</h3>
                        <p class="album-card-artist">
                            <a href="#">Emma Davis</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">1 track</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 6 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Urban Beats</h3>
                        <p class="album-card-artist">
                            <a href="#">MC Flow</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">15 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 7 -->
                <div class="album-card" data-type="compilation">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="play-overlay-btn">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge compilation">Compilation</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Greatest Hits</h3>
                        <p class="album-card-artist">
                            <a href="#">Various Artists</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2024</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">20 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 8 -->
                <div class="album-card" data-type="ep">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge ep">EP</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Ocean Waves</h3>
                        <p class="album-card-artist">
                            <a href="#">Chill Sounds</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2023</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">5 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 9 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1571330735066-03aaa9429d89?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Golden Hour</h3>
                        <p class="album-card-artist">
                            <a href="#">Sunset Band</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2023</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">11 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 10 -->
                <div class="album-card" data-type="single">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge single">Single</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">City Lights</h3>
                        <p class="album-card-artist">
                            <a href="#">Urban Jazz</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2023</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">1 track</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 11 -->
                <div class="album-card" data-type="album">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1506157786151-b8491531f063?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge">Album</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Cosmic Dance</h3>
                        <p class="album-card-artist">
                            <a href="#">Space Beats</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2023</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">9 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Album Card 12 -->
                <div class="album-card" data-type="ep">
                    <div class="album-card-image">
                        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400" alt="Album">
                        <div class="album-card-overlay">
                            <button class="btn-play-album">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                        <span class="album-type-badge ep">EP</span>
                    </div>
                    <div class="album-card-content">
                        <h3 class="album-card-title">Mountain Echo</h3>
                        <p class="album-card-artist">
                            <a href="#">Nature Sounds</a>
                        </p>
                        <div class="album-card-meta">
                            <span class="album-year">2023</span>
                            <span class="meta-separator">•</span>
                            <span class="album-tracks">7 tracks</span>
                        </div>
                    </div>
                    <div class="album-card-actions">
                        <button class="btn-album-action" title="Add to Library">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn-album-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-album-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include 'musicplayer.php' ?>



<script>
    // View Toggle
    const viewButtons = document.querySelectorAll('.btn-view-albums');
    const albumsContainer = document.getElementById('albumsContainer');

    viewButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const view = btn.getAttribute('data-view');

            viewButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (view === 'grid') {
                albumsContainer.classList.remove('list-view');
                albumsContainer.classList.add('grid-view');
            } else {
                albumsContainer.classList.remove('grid-view');
                albumsContainer.classList.add('list-view');
            }
        });
    });



    // Action buttons
    document.addEventListener('click', (e) => {
        // Like button
        if (e.target.closest('.btn-album-action')) {
            const btn = e.target.closest('.btn-album-action');
            const icon = btn.querySelector('i');

            if (icon && icon.classList.contains('fa-heart')) {
                e.stopPropagation();
                btn.classList.toggle('liked');

                if (btn.classList.contains('liked')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                }
            }

            // Add to library button
            if (icon && icon.classList.contains('fa-plus')) {
                e.stopPropagation();
                btn.classList.toggle('added');

                if (btn.classList.contains('added')) {
                    icon.classList.remove('fa-plus');
                    icon.classList.add('fa-check');
                } else {
                    icon.classList.remove('fa-check');
                    icon.classList.add('fa-plus');
                }
            }
        }
    });


</script>

<?php include 'footer.php'; ?>