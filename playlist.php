<?php 
$page_title = "Playlists - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Playlists Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            
            <!-- Page Header -->
            <div class="page-header-playlists">
                <div class="header-content-playlists">
                    <h1 class="page-title-playlists">Your Playlists</h1>
                    <p class="page-subtitle-playlists">Create and manage your music collections</p>
                </div>
                <button class="btn-create-playlist" id="btnCreatePlaylist">
                    <i class="fas fa-plus me-2"></i>Create Playlist
                </button>
            </div>

            <!-- Filters & Actions Bar -->
            <div class="filters-bar-playlists">
                <div class="filters-left-playlists">
                    <div class="category-filters">
                        <button class="btn-category active" data-category="all">All Playlists</button>
                        <button class="btn-category" data-category="my">My Playlists</button>
                        <button class="btn-category" data-category="following">Following</button>
                        <button class="btn-category" data-category="public">Public</button>
                    </div>
                </div>
                <div class="filters-right-playlists">
                    <div class="search-box-playlists">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search playlists..." id="searchPlaylists">
                    </div>
                    <div class="view-toggle-playlists">
                        <button class="btn-view-playlists active" data-view="grid" title="Grid View">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="btn-view-playlists" data-view="list" title="List View">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Playlists Container -->
            <div class="playlists-container grid-view" id="playlistsContainer">
                
                <!-- Playlist Card 1 -->
                <div class="playlist-card" data-category="my">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                        <i class="fas fa-fire playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">My Favorites</h3>
                        <p class="playlist-card-owner">By You</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>45 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 25m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 2 -->
                <div class="playlist-card" data-category="my">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                        <i class="fas fa-moon playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Chill Vibes</h3>
                        <p class="playlist-card-owner">By You</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>32 songs</span>
                            <span><i class="fas fa-clock me-1"></i>2h 15m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 3 -->
                <div class="playlist-card" data-category="my">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                        <i class="fas fa-dumbbell playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Workout Energy</h3>
                        <p class="playlist-card-owner">By You</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>28 songs</span>
                            <span><i class="fas fa-clock me-1"></i>1h 50m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 4 -->
                <div class="playlist-card" data-category="my">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                        <i class="fas fa-car playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Road Trip</h3>
                        <p class="playlist-card-owner">By You</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>52 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 40m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 5 -->
                <div class="playlist-card" data-category="following">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                        <i class="fas fa-heart playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Love Songs</h3>
                        <p class="playlist-card-owner">By DJ Cool</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>40 songs</span>
                            <span><i class="fas fa-clock me-1"></i>2h 55m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action liked" title="Unlike">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 6 -->
                <div class="playlist-card" data-category="public">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                        <i class="fas fa-sun playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Summer Hits 2024</h3>
                        <p class="playlist-card-owner">By MusicStream</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>50 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 20m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 7 -->
                <div class="playlist-card" data-category="following">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #06b6d4, #22d3ee);">
                        <i class="fas fa-bolt playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Electronic Beats</h3>
                        <p class="playlist-card-owner">By Bass Masters</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>38 songs</span>
                            <span><i class="fas fa-clock me-1"></i>2h 30m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action liked" title="Unlike">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

                <!-- Playlist Card 8 -->
                <div class="playlist-card" data-category="public">
                    <div class="playlist-card-image" style="background: linear-gradient(135deg, #a855f7, #c084fc);">
                        <i class="fas fa-star playlist-icon"></i>
                        <div class="playlist-card-overlay">
                            <button class="btn-play-playlist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                    </div>
                    <div class="playlist-card-content">
                        <h3 class="playlist-card-name">Top 50 Global</h3>
                        <p class="playlist-card-owner">By MusicStream</p>
                        <div class="playlist-card-meta">
                            <span><i class="fas fa-music me-1"></i>50 songs</span>
                            <span><i class="fas fa-clock me-1"></i>3h 10m</span>
                        </div>
                    </div>
                    <div class="playlist-card-actions">
                        <button class="btn-playlist-action" title="Like">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="btn-playlist-action" title="Share">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="btn-playlist-action" title="More">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Create Playlist Modal -->
<div class="modal-overlay" id="createPlaylistModal">
    <div class="modal-container">
        <div class="modal-header">
            <h2 class="modal-title">Create New Playlist</h2>
            <button class="btn-close-modal" id="btnCloseModal">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body">
            <form id="createPlaylistForm">
                <!-- Playlist Icon Selection -->
                <div class="form-group-modal">
                    <label class="form-label-modal">Choose Icon</label>
                    <div class="icon-selector">
                        <div class="icon-option active" data-icon="music" style="background: linear-gradient(135deg, #ff7a18, #ffb347);">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="icon-option" data-icon="fire" style="background: linear-gradient(135deg, #ef4444, #f87171);">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="icon-option" data-icon="heart" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="icon-option" data-icon="star" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="icon-option" data-icon="bolt" style="background: linear-gradient(135deg, #8f4bff, #b794f6);">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="icon-option" data-icon="guitar" style="background: linear-gradient(135deg, #22C55E, #4ade80);">
                            <i class="fas fa-guitar"></i>
                        </div>
                        <div class="icon-option" data-icon="headphones" style="background: linear-gradient(135deg, #3B82F6, #60A5FA);">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <div class="icon-option" data-icon="moon" style="background: linear-gradient(135deg, #06b6d4, #22d3ee);">
                            <i class="fas fa-moon"></i>
                        </div>
                    </div>
                </div>

                <!-- Playlist Name -->
                <div class="form-group-modal">
                    <label class="form-label-modal" for="playlistName">Playlist Name</label>
                    <input type="text" id="playlistName" class="form-input-modal" placeholder="e.g., My Awesome Playlist" required>
                </div>

                <!-- Playlist Description -->
                <div class="form-group-modal">
                    <label class="form-label-modal" for="playlistDescription">Description (Optional)</label>
                    <textarea id="playlistDescription" class="form-textarea-modal" placeholder="Add a description for your playlist..." rows="3"></textarea>
                </div>

                <!-- Privacy Settings -->
                <div class="form-group-modal">
                    <label class="form-label-modal">Privacy</label>
                    <div class="privacy-options">
                        <label class="privacy-option">
                            <input type="radio" name="privacy" value="public" checked>
                            <div class="privacy-card">
                                <i class="fas fa-globe"></i>
                                <div class="privacy-info">
                                    <div class="privacy-title">Public</div>
                                    <div class="privacy-desc">Anyone can view</div>
                                </div>
                            </div>
                        </label>
                        <label class="privacy-option">
                            <input type="radio" name="privacy" value="private">
                            <div class="privacy-card">
                                <i class="fas fa-lock"></i>
                                <div class="privacy-info">
                                    <div class="privacy-title">Private</div>
                                    <div class="privacy-desc">Only you can view</div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="modal-actions">
                    <button type="button" class="btn-modal-cancel" id="btnCancelModal">Cancel</button>
                    <button type="submit" class="btn-modal-create">
                        <i class="fas fa-plus me-2"></i>Create Playlist
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Sticky Music Player -->
<?php include 'musicplayer.php';?>



<script>
// View Toggle
const viewButtons = document.querySelectorAll('.btn-view-playlists');
const playlistsContainer = document.getElementById('playlistsContainer');

viewButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const view = btn.getAttribute('data-view');
        
        viewButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        if (view === 'grid') {
            playlistsContainer.classList.remove('list-view');
            playlistsContainer.classList.add('grid-view');
        } else {
            playlistsContainer.classList.remove('grid-view');
            playlistsContainer.classList.add('list-view');
        }
    });
});





const btnCreatePlaylist = document.getElementById('btnCreatePlaylist');
const createPlaylistModal = document.getElementById('createPlaylistModal');
const btnCloseModal = document.getElementById('btnCloseModal');
const btnCancelModal = document.getElementById('btnCancelModal');

btnCreatePlaylist.addEventListener('click', () => {
    createPlaylistModal.classList.add('active');
});

btnCloseModal.addEventListener('click', () => {
    createPlaylistModal.classList.remove('active');
});

btnCancelModal.addEventListener('click', () => {
    createPlaylistModal.classList.remove('active');
});

// Close modal on overlay click
createPlaylistModal.addEventListener('click', (e) => {
    if (e.target === createPlaylistModal) {
        createPlaylistModal.classList.remove('active');
    }
});

// Icon Selection
const iconOptions = document.querySelectorAll('.icon-option');
let selectedIcon = 'music';
let selectedGradient = 'linear-gradient(135deg, #ff7a18, #ffb347)';

iconOptions.forEach(option => {
    option.addEventListener('click', () => {
        iconOptions.forEach(opt => opt.classList.remove('active'));
        option.classList.add('active');
        selectedIcon = option.getAttribute('data-icon');
        selectedGradient = option.style.background;
    });
});

// Form Submit
const createPlaylistForm = document.getElementById('createPlaylistForm');
createPlaylistForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const playlistName = document.getElementById('playlistName').value;
    const playlistDescription = document.getElementById('playlistDescription').value;
    const privacy = document.querySelector('input[name="privacy"]:checked').value;
    
    // Create new playlist card
    const newPlaylist = document.createElement('div');
    newPlaylist.className = 'playlist-card';
    newPlaylist.setAttribute('data-category', 'my');
    
    const iconClass = `fas fa-${selectedIcon}`;
        
    // Close modal and reset form
    createPlaylistModal.classList.remove('active');
    createPlaylistForm.reset();
    
    // Reset icon selection
    iconOptions.forEach(opt => opt.classList.remove('active'));
    iconOptions[0].classList.add('active');
});

// Play playlist functionality
const playButtons = document.querySelectorAll('.btn-play-playlist');
const musicPlayer = document.getElementById('musicPlayer');

document.addEventListener('click', (e) => {
    if (e.target.closest('.btn-play-playlist')) {
        e.stopPropagation();
        
        const card = e.target.closest('.playlist-card');
        const playlistName = card.querySelector('.playlist-card-name').textContent;
        
        document.getElementById('playerSongName').textContent = playlistName;
        document.getElementById('playerArtistName').textContent = 'Playlist';
        
        musicPlayer.classList.add('active');
    }
});

// Like button toggle
document.addEventListener('click', (e) => {
    if (e.target.closest('.btn-playlist-action')) {
        const btn = e.target.closest('.btn-playlist-action');
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
    }
});
</script>

<?php include 'footer.php'; ?>