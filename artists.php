<?php 
$page_title = "Artists - MusicStream";
include 'header.php'; 
?>

<?php include 'sidebar.php'; ?>

<!-- Main Content -->
<div class="main-content" id="mainContent">
    <?php include 'navbar.php'; ?>

    <!-- Artists Content -->
    <div class="container-fluid py-4">
        <div class="px-3 px-md-4">
            
            <!-- Page Header -->
            <div class="page-header-artists">
                <div class="header-content-artists">
                    <h1 class="page-title-artists">Artists</h1>
                    <p class="page-subtitle-artists">Discover amazing artists and their music</p>
                </div>
            </div>

            <!-- Filters & Actions Bar -->
            <div class="filters-bar">
                <div class="filters-left">
                    <div class="genre-filters">
                        <button class="btn-genre active" data-genre="all">All</button>
                        <button class="btn-genre" data-genre="pop">Pop</button>
                        <button class="btn-genre" data-genre="rock">Rock</button>
                        <button class="btn-genre" data-genre="electronic">Electronic</button>
                        <button class="btn-genre" data-genre="hip-hop">Hip Hop</button>
                        <button class="btn-genre" data-genre="jazz">Jazz</button>
                        <button class="btn-genre" data-genre="rb">R&B</button>
                    </div>
                </div>
                <div class="filters-right">
                    <div class="search-box-artists">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search artists..." id="searchArtists">
                    </div>
                    <div class="view-toggle-artists">
                        <button class="btn-view-artists active" data-view="grid" title="Grid View">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="btn-view-artists" data-view="list" title="List View">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="btn-sort-artists">
                            <i class="fas fa-sort-amount-down me-2"></i>
                            Sort
                        </button>
                    </div>
                </div>
            </div>

            <!-- Artists Container -->
            <div class="artists-container grid-view" id="artistsContainer">
                
                <!-- Artist Card 1 -->
                <div class="artist-card" data-genre="electronic pop">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=33" alt="DJ Cool">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">DJ Cool</h3>
                        <p class="artist-card-genre">Electronic • Pop</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>2.5M followers</span>
                            <span><i class="fas fa-music me-1"></i>45 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 2 -->
                <div class="artist-card" data-genre="pop acoustic">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=45" alt="Sarah Johnson">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Sarah Johnson</h3>
                        <p class="artist-card-genre">Pop • Acoustic</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>1.8M followers</span>
                            <span><i class="fas fa-music me-1"></i>32 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 3 -->
                <div class="artist-card" data-genre="rock indie">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=12" alt="The Nighters">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">The Nighters</h3>
                        <p class="artist-card-genre">Rock • Indie</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>1.5M followers</span>
                            <span><i class="fas fa-music me-1"></i>28 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 4 -->
                <div class="artist-card" data-genre="hip-hop">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=68" alt="MC Flow">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">MC Flow</h3>
                        <p class="artist-card-genre">Hip Hop • Rap</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>1.3M followers</span>
                            <span><i class="fas fa-music me-1"></i>38 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 5 -->
                <div class="artist-card" data-genre="rb soul">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=27" alt="Emma Davis">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Emma Davis</h3>
                        <p class="artist-card-genre">R&B • Soul</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>1.1M followers</span>
                            <span><i class="fas fa-music me-1"></i>25 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 6 -->
                <div class="artist-card" data-genre="jazz blues">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=52" alt="Jazz Quartet">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Jazz Quartet</h3>
                        <p class="artist-card-genre">Jazz • Blues</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>950K followers</span>
                            <span><i class="fas fa-music me-1"></i>42 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 7 -->
                <div class="artist-card" data-genre="electronic">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=15" alt="Bass Masters">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Bass Masters</h3>
                        <p class="artist-card-genre">Electronic • EDM</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>890K followers</span>
                            <span><i class="fas fa-music me-1"></i>35 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 8 -->
                <div class="artist-card" data-genre="electronic">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=60" alt="Synth Wave">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Synth Wave</h3>
                        <p class="artist-card-genre">Electronic • Synthwave</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>780K followers</span>
                            <span><i class="fas fa-music me-1"></i>30 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 9 -->
                <div class="artist-card" data-genre="pop">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=23" alt="Sunset Band">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Sunset Band</h3>
                        <p class="artist-card-genre">Pop • Alternative</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>720K followers</span>
                            <span><i class="fas fa-music me-1"></i>27 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 10 -->
                <div class="artist-card" data-genre="jazz">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=70" alt="Urban Jazz">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Urban Jazz</h3>
                        <p class="artist-card-genre">Jazz • Contemporary</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>650K followers</span>
                            <span><i class="fas fa-music me-1"></i>33 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 11 -->
                <div class="artist-card" data-genre="rock">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=8" alt="Electric Beats">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Electric Beats</h3>
                        <p class="artist-card-genre">Rock • Electronic</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>580K followers</span>
                            <span><i class="fas fa-music me-1"></i>29 songs</span>
                        </div>
                    </div>
                </div>

                <!-- Artist Card 12 -->
                <div class="artist-card" data-genre="pop">
                    <div class="artist-card-image">
                        <img src="https://i.pravatar.cc/300?img=41" alt="Melody Smith">
                        <div class="artist-card-overlay">
                            <button class="btn-play-artist">
                                <i class="fas fa-play"></i>
                            </button>
                        </div>
                      
                    </div>
                    <div class="artist-card-content">
                        <h3 class="artist-card-name">Melody Smith</h3>
                        <p class="artist-card-genre">Pop • Dance</p>
                        <div class="artist-card-stats">
                            <span><i class="fas fa-users me-1"></i>520K followers</span>
                            <span><i class="fas fa-music me-1"></i>24 songs</span>
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
const viewButtons = document.querySelectorAll('.btn-view-artists');
const artistsContainer = document.getElementById('artistsContainer');

viewButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        const view = btn.getAttribute('data-view');
        
        // Update active state
        viewButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        
        // Update container class
        if (view === 'grid') {
            artistsContainer.classList.remove('list-view');
            artistsContainer.classList.add('grid-view');
        } else {
            artistsContainer.classList.remove('grid-view');
            artistsContainer.classList.add('list-view');
        }
    });
});

// Genre Filter





artistCards.forEach(card => {
    card.addEventListener('click', () => {
      
    });
});
</script>

<?php include 'footer.php'; ?>