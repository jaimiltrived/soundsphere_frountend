
const sidebar = document.getElementById("sidebar");
const mainContent = document.getElementById('main-content');
const toggleBtn = document.getElementById('toggleSidebar');
const overlay = document.getElementById('sidebarOverlay');

toggleBtn.addEventListener('click', function () {
    if (window.innerWidth <= 768) {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    } else {

        sidebar.classList.toggle('hide');
        mainContent.classList.toggle('expanded');
    }
});

overlay.addEventListener('click', function () {
    sidebar.classList.remove('show');
    overlay.classList.remove('show');
});

// Handle window resize
window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
        sidebar.classList.remove('show');
        overlay.classList.remove('show');
    }
});


let currentIndex = -1;
let currentSongId = null;

const audio = document.getElementById("audio");

let isSeeking = false;
let isPlaying = false;
const playPauseBtn = document.getElementById("playPauseBtn");
const playPauseIcon = document.getElementById("playPauseIcon");
const SongId = document.getElementById('songid');

const titleEl = document.getElementById("playerTitle");
const artistEl = document.getElementById("playerArtist");
const coverEl = document.getElementById("playerCover");

const progressFill = document.querySelector(".progress-fill");
const currentTimeEl = document.querySelectorAll(".time")[0];
const durationEl = document.querySelectorAll(".time")[1];

const volumeBox = document.getElementById("volumeBox");
const volumeFill = document.getElementById("volumeFill");
audio.volume = 0.3;                     // initial volume
volumeFill.style.width = "30%";


function setVolume(e) {
    const rect = volumeBox.getBoundingClientRect();
    let percent = (e.clientX - rect.left) / rect.width;

    percent = Math.max(0, Math.min(1, percent));

    audio.volume = percent;
    volumeFill.style.width = (percent * 100) + "%";
}

volumeBox.addEventListener("mousedown", () => {
    document.addEventListener("mousemove", setVolume);
});

document.addEventListener("mouseup", () => {
    document.removeEventListener("mousemove", setVolume);
});

volumeBox.addEventListener("click", setVolume);

function formatTime(sec) {
    const m = Math.floor(sec / 60);
    const s = Math.floor(sec % 60).toString().padStart(2, "0");
    return `${m}:${s}`;
}


function likesong() {
    if (!currentSongId) return

    fetch("http://localhost:3000/api/like/" + currentSongId, {
        method: "POST",
        credentials: "include"
    })
        .then(res => res.json())
        .then(data => {
            document.getElementById("like-count").innerText = data.likes
            toggleHeart(data.isLiked)
        })
}


function toggleHeart(liked) {
    const icon = document.querySelector(".like-btn i")
    if (liked) {
        icon.classList.add("fa-solid")
        icon.classList.remove("fa-light")
    } else {
        icon.classList.remove("fa-solid")
        icon.classList.add("fa-light")
    }
}

function loadSongDetails(id) {
    fetch("http://localhost:3000/song/" + id)
        .then(res => res.json())
        .then(data => {
            document.getElementById("like-count").innerText = data.likes
            toggleHeart(data.isLiked)
        })
}


window.playTrack = function (title, artist, songId, cover) {
    currentSongId = songId;
    const index = window.playlist.findIndex(s => s.song_id === songId);
    if (index !== -1) {
        currentIndex = index;
    }
    titleEl.textContent = title;
    artistEl.textContent = artist;
    SongId.textContent = songId;

    coverEl.src = "http://localhost:3000/covers/" + cover;
    audio.src = "http://localhost:3000/stream/" + songId;
    audio.play();

    isPlaying = true;
    playPauseIcon.className = "fas fa-pause";

    document.getElementById("songLink").href = "songDetail.php?song_id=" + songId;
    loadSongDetails(id)
}

window.prevSong = function () {
    if (currentIndex <= 0) return;
    const song = window.playlist[currentIndex - 1];
    currentIndex--;
    playTrack(song.title, song.artist, song.song_id, song.cover_image);
}

window.nextSong = function () {
    if (currentIndex >= window.playlist.length - 1) return;
    const song = window.playlist[currentIndex + 1];
    currentIndex++;
    playTrack(song.title, song.artist, song.song_id, song.cover_image);
}

audio.onended = () => {
    if (currentIndex < window.playlist.length - 1) {
        nextSong();
    }
};


playPauseBtn.onclick = () => {
    if (!audio.src) return;

    // 1. Toggle Audio State
    if (isPlaying) {
        audio.pause();
    } else {
        audio.play();

    }


    playPauseBtn.innerHTML = isPlaying
        ? `<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>`
        : `<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pause"><rect x="14" y="4" width="4" height="16" rx="1"></rect><rect x="6" y="4" width="4" height="16" rx="1"></rect></svg>`;


    isPlaying = !isPlaying;
};


audio.ontimeupdate = () => {
    if (!isSeeking) {
        const percent = (audio.currentTime / audio.duration) * 100;
        progressFill.style.width = percent + "%";
    }

    currentTimeEl.textContent = formatTime(audio.currentTime);
    durationEl.textContent = formatTime(audio.duration || 0);
};

function seek(e) {
    const rect = progressBar.getBoundingClientRect();
    let percent = (e.clientX - rect.left) / rect.width;
    percent = Math.max(0, Math.min(1, percent));

    progressFill.style.width = (percent * 100) + "%";
    audio.currentTime = percent * audio.duration;
}


progressBar.addEventListener("click", seek);


progressBar.addEventListener("mousedown", () => {
    isSeeking = true;
    document.addEventListener("mousemove", seek);
});

document.addEventListener("mouseup", () => {
    isSeeking = false;
    document.removeEventListener("mousemove", seek);
});

