<style>
    /* Sticky Music Player */
    .music-player-bottom {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(20, 20, 26, 0.95);
        backdrop-filter: blur(30px);
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        z-index: 1000;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .music-player-bottom.active {
        transform: translateY(0);
    }

    .player-content {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        align-items: center;
        gap: 2rem;
        padding: 1rem 2rem;
        max-width: 1920px;
        margin: 0 auto;
    }


    .player-song-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        min-width: 0;
    }

    .player-thumbnail {
        width: 56px;
        height: 56px;
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .player-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .player-details {
        flex: 1;
        min-width: 0;
    }

    .player-song-name {
        font-size: 14px;
        font-weight: 600;
        color: white;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-bottom: 0.25rem;
    }

    .player-artist-name {
        font-size: 12px;
        color: #888;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .btn-player-like {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: transparent;
        border: none;
        color: #888;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .btn-player-like:hover {
        color: #ff7a18;
        transform: scale(1.1);
    }

    .btn-player-like.active {
        color: #ff7a18;
    }

    .btn-player-like.active i {
        font-weight: 900;
    }

    /* Player Controls Center */
    .player-controls-center {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .player-buttons {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }

    .btn-player-control {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: transparent;
        border: none;
        color: #aaa;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-player-control:hover {
        color: white;
        transform: scale(1.1);
    }

    .btn-player-control.active {
        color: #ff7a18;
    }

    .btn-player-play {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: none;
        color: #14141a;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 16px;
    }

    .btn-player-play:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
    }

    /* Timeline */
    .player-timeline-container {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .player-time {
        font-size: 11px;
        color: #888;
        min-width: 40px;
        text-align: center;
    }

    .player-timeline {
        flex: 1;
        height: 4px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
        position: relative;
        cursor: pointer;
    }

    .player-timeline-progress {
        height: 100%;
        background: linear-gradient(90deg, #ff7a18, #ffb347);
        border-radius: 2px;
        position: relative;
        transition: width 0.1s linear;
    }

    .player-timeline-dot {
        position: absolute;
        right: -6px;
        top: 50%;
        transform: translateY(-50%);
        width: 12px;
        height: 12px;
        background: white;
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .player-timeline:hover .player-timeline-dot {
        opacity: 1;
    }

    /* Right Controls */
    .player-right-controls {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 0.75rem;
    }

    .btn-player-extra {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: transparent;
        border: none;
        color: #aaa;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .btn-player-extra:hover {
        color: white;
    }

    /* Volume Container */
    .volume-container {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .volume-slider-container {
        width: 0;
        overflow: hidden;
        transition: width 0.3s ease;
    }

    .volume-container:hover .volume-slider-container {
        width: 100px;
    }

    .volume-slider {
        width: 100px;
        height: 4px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 2px;
        position: relative;
        cursor: pointer;
    }

    .volume-slider-fill {
        height: 100%;
        background: linear-gradient(90deg, #ff7a18, #ffb347);
        border-radius: 2px;
        transition: width 0.1s ease;
    }

    .volume-slider-dot {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 12px;
        height: 12px;
        background: white;
        border-radius: 50%;
        transition: left 0.1s ease;
    }

    @media (max-width: 1200px) {
        .player-content {
            grid-template-columns: 1fr 1.5fr 1fr;
            gap: 1rem;
        }
    }

    @media (max-width: 768px) {
        .player-content {
            grid-template-columns: 1fr;
            gap: 1rem;
            padding: 1rem;
        }

        .player-song-info {
            order: 1;
        }

        .player-controls-center {
            order: 2;
        }

        .player-right-controls {
            order: 3;
            justify-content: center;
        }

        .volume-slider-container {
            width: 100px;
        }
    }
</style>

<div class="music-player-bottom" id="musicPlayer">
    <div class="player-content">
        <!-- Song Info -->
        <div class="player-song-info">
            <div class="player-thumbnail">
                <a href="songDetail.php"><img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=100" alt="Now Playing"
                    id="playerThumbnail"></a>
            </div>
            <div class="player-details">
                <div class="player-song-name" id="playerSongName">Summer Vibes</div>
                <div class="player-artist-name" id="playerArtistName">DJ Cool</div>
            </div>
            <button class="btn-player-like" id="btnLike">
                <i class="far fa-heart"></i>
            </button>
        </div>

        <!-- Player Controls -->
        <div class="player-controls-center">
            <div class="player-buttons">
                <button class="btn-player-control" id="btnShuffle" title="Shuffle">
                    <i class="fas fa-random"></i>
                </button>
                <button class="btn-player-control" id="btnPrevious" title="Previous">
                    <i class="fas fa-step-backward"></i>
                </button>
                <button class="btn-player-play" id="btnPlayPause">
                    <i class="fas fa-play"></i>
                </button>
                <button class="btn-player-control" id="btnNext" title="Next">
                    <i class="fas fa-step-forward"></i>
                </button>
                <button class="btn-player-control" id="btnRepeat" title="Repeat">
                    <i class="fas fa-redo"></i>
                </button>
            </div>

            <div class="player-timeline-container">
                <span class="player-time" id="currentTime">0:00</span>
                <div class="player-timeline" id="playerTimeline">
                    <div class="player-timeline-progress" id="timelineProgress" style="width: 0%;">
                        <div class="player-timeline-dot"></div>
                    </div>
                </div>
                <span class="player-time" id="totalTime">3:45</span>
            </div>
        </div>


        <div class="player-right-controls">
            <button class="btn-player-extra" id="btnQueue" title="Queue">
                <i class="fas fa-list-ul"></i>
            </button>
            <div class="volume-container">
                <button class="btn-player-extra" id="btnVolume" title="Mute/Unmute">
                    <i class="fas fa-volume-up"></i>
                </button>
                <div class="volume-slider-container">
                    <div class="volume-slider" id="volumeSlider">
                        <div class="volume-slider-fill" id="volumeFill" style="width: 70%;"></div>
                        <div class="volume-slider-dot" style="left: 70%;"></div>
                    </div>
                </div>
            </div>
            <button class="btn-player-extra" id="btnFullscreen" title="Fullscreen">
                <i class="fas fa-expand"></i>
            </button>
        </div>
    </div>
</div>

<script>
const playerSongName = document.getElementById('playerSongName');
const playerArtistName = document.getElementById('playerArtistName');
const playerThumbnail = document.getElementById('playerThumbnail');


function togglePlayPause() {
    isPlaying = !isPlaying;
    
    if (isPlaying) {
        btnPlayPause.innerHTML = '<i class="fas fa-pause"></i>';
        startPlaying();
    } else {
        btnPlayPause.innerHTML = '<i class="fas fa-play"></i>';
        stopPlaying();
    }
}



// Seek in timeline
playerTimeline.addEventListener('click', (e) => {
    const rect = playerTimeline.getBoundingClientRect();
    const clickX = e.clientX - rect.left;
    const percentage = clickX / rect.width;
    currentTime = percentage * duration;
    updateTimeline();
});


let isDraggingTimeline = false;

playerTimeline.addEventListener('mousedown', () => {
    isDraggingTimeline = true;
});

document.addEventListener('mousemove', (e) => {
    if (isDraggingTimeline) {
        const rect = playerTimeline.getBoundingClientRect();
        const clickX = Math.max(0, Math.min(e.clientX - rect.left, rect.width));
        const percentage = clickX / rect.width;
        currentTime = percentage * duration;
        updateTimeline();
    }
});

document.addEventListener('mouseup', () => {
    isDraggingTimeline = false;
});


function updateVolume(newVolume) {
    volume = Math.max(0, Math.min(100, newVolume));
    volumeFill.style.width = volume + '%';
    document.querySelector('.volume-slider-dot').style.left = volume + '%';
    
    // Update volume icon
    const volumeIcon = btnVolume.querySelector('i');
    if (volume === 0 || isMuted) {
        volumeIcon.className = 'fas fa-volume-mute';
    } else if (volume < 50) {
        volumeIcon.className = 'fas fa-volume-down';
    } else {
        volumeIcon.className = 'fas fa-volume-up';
    }
}

// Volume slider click
volumeSlider.addEventListener('click', (e) => {
    const rect = volumeSlider.getBoundingClientRect();
    const clickX = e.clientX - rect.left;
    const percentage = (clickX / rect.width) * 100;
    updateVolume(percentage);
    if (isMuted) {
        isMuted = false;
    }
});


let isDraggingVolume = false;

volumeSlider.addEventListener('mousedown', () => {
    isDraggingVolume = true;
});

document.addEventListener('mousemove', (e) => {
    if (isDraggingVolume) {
        const rect = volumeSlider.getBoundingClientRect();
        const clickX = Math.max(0, Math.min(e.clientX - rect.left, rect.width));
        const percentage = (clickX / rect.width) * 100;
        updateVolume(percentage);
        if (isMuted) {
            isMuted = false;
        }
    }
});

document.addEventListener('mouseup', () => {
    isDraggingVolume = false;
});

// Mute/Unmute
function toggleMute() {
    isMuted = !isMuted;
    
    if (isMuted) {
        previousVolume = volume;
        updateVolume(0);
    } else {
        updateVolume(previousVolume);
    }
}

// Event Listeners
btnPlayPause.addEventListener('click', togglePlayPause);

document.querySelectorAll('.play-overlay-btn, .quick-play-btn, .album-play-btn , .btn-play-album , .btn-play-artist , .btn-play-playlist , .btn-play-card,  .btn-play-simple' ).forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        
        // Show player
        musicPlayer.classList.add('active');
        
        // Get song info from parent card
        const card = btn.closest('.music-card, .quick-card, .album-card-home');
        if (card) {
            const title = card.querySelector('.music-card-title, .quick-name, .album-title-home');
            const artist = card.querySelector('.music-card-artist, .quick-artist, .album-artist-home');
            const img = card.querySelector('img');
            
            if (title) playerSongName.textContent = title.textContent;
            if (artist) playerArtistName.textContent = artist.textContent;
            if (img) playerThumbnail.src = img.src;
        }
        
        // Start playing
        if (!isPlaying) {
            togglePlayPause();
        }
    });
});

// Keyboard shortcuts
document.addEventListener('keydown', (e) => {
    if (e.code === 'Space' && musicPlayer.classList.contains('active')) {
        e.preventDefault();
        togglePlayPause();
    }
});

// Initialize

updateVolume(70);
</script>