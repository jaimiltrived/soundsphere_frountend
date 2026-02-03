<?php
    include 'sidebar.php';
    include 'background.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="style1.css" />
    <style>
        .header-section {
            padding: 40px 0;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.2);
        }

        .search-bar {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--glass-border);
            border-radius: 10px;
            color: white;
            padding: 10px 20px;
        }

        .search-bar::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.8rem;
        }

        
        .table-header {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            padding: 10px 20px;
        }

        .song-row {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 15px;
            margin-bottom: 12px;
            padding: 15px 20px;
            transition: transform 0.2s, background 0.2s;
            cursor: pointer;
            align-items: center;
        }

        .song-row:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.01);
        }

        .album-art {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }

        .song-title {
            font-weight: bold;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .artist-name {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .meta-text {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        /* Action Buttons */
        .btn-play {
            background-color: var(--accent-green);
            color: white;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .btn-download {
            color: var(--accent-green);
            background: none;
            border: none;
            font-size: 1.5rem;
        }

        @media (min-width:768px) {
            .flex-grow-1 {
                margin-left: 310px;
            }
        }

        .playlist-container {
            display: flex;
            align-items: center;
            gap: 30px;
            max-width: 800px;
            width: 100%;
            padding: 40px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .playlist-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .playlist-cover {
            width: 240px;
            height: 240px;
            background: linear-gradient(135deg, #ff8a5b 0%, #ff6b3d 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 10px 30px rgba(255, 107, 61, 0.3);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .playlist-cover:hover {
            transform: scale(1.05);
        }

        .broadcast-icon {
            position: relative;
            width: 80px;
            height: 80px;
        }

        .broadcast-icon::before,
        .broadcast-icon::after {
            content: '';
            position: absolute;
            border: 4px solid #1a0f0d;
            border-radius: 50%;
        }

        /* Outer arc - left */
        .broadcast-icon::before {
            width: 35px;
            height: 70px;
            left: -5px;
            top: 5px;
            border-right: none;
            border-top-left-radius: 70px;
            border-bottom-left-radius: 70px;
        }

        /* Outer arc - right */
        .broadcast-icon::after {
            width: 35px;
            height: 70px;
            right: -5px;
            top: 5px;
            border-left: none;
            border-top-right-radius: 70px;
            border-bottom-right-radius: 70px;
        }

        .broadcast-center {
            position: absolute;
            width: 24px;
            height: 24px;
            background: #1a0f0d;
            border-radius: 50%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .broadcast-center::before,
        .broadcast-center::after {
            content: '';
            position: absolute;
            border: 3px solid #1a0f0d;
            border-radius: 50%;
        }

        /* Inner arc - left */
        .broadcast-center::before {
            width: 20px;
            height: 40px;
            left: -23px;
            top: -8px;
            border-right: none;
            border-top-left-radius: 40px;
            border-bottom-left-radius: 40px;
        }


        .broadcast-center::after {
            width: 20px;
            height: 40px;
            right: -23px;
            top: -8px;
            border-left: none;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .playlist-info {
            flex: 1;
            color: white;
        }

        .personalized-tag {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #999;
            margin-bottom: 8px;
        }

        .playlist-title {
            font-size: 72px;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 12px;
            line-height: 1;
        }

        .playlist-description {
            font-size: 16px;
            color: #aaa;
            font-weight: 400;
        }

        .playlist-description span {
            margin: 0 8px;
        }

        .playlist-description span:first-child {
            margin-left: 0;
        }


        @media (max-width: 768px) {
            .playlist-container {
                flex-direction: column;
                text-align: center;
                gap: 25px;
                padding: 30px 20px;
            }

            .playlist-cover {
                width: 200px;
                height: 200px;
            }

            .broadcast-icon {
                width: 70px;
                height: 70px;
            }

            .playlist-title {
                font-size: 56px;
            }

            .playlist-description {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .playlist-container {
                padding: 25px 15px;
            }

            .playlist-cover {
                width: 180px;
                height: 180px;
            }

            .broadcast-icon {
                width: 60px;
                height: 60px;
            }

            .broadcast-icon::before,
            .broadcast-icon::after {
                border-width: 3px;
            }

            .broadcast-center {
                width: 20px;
                height: 20px;
            }

            .playlist-title {
                font-size: 48px;
            }

            .personalized-tag {
                font-size: 11px;
            }

            .playlist-description {
                font-size: 13px;
            }
        }



        .playlist-cover:hover .broadcast-icon::before,
        .playlist-cover:hover .broadcast-icon::after,
        .playlist-cover:hover .broadcast-center::before,
        .playlist-cover:hover .broadcast-center::after {
            animation: pulse 1.5s ease-in-out infinite;
        }
    </style>
</head>

<body>
    
    <button class="btn toggle-btn d-md-none" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>
    <div class="d-flex">
   
        <div class="flex-grow-1 text-white p-4">
            <div class="container-fluid mb-5">
                <div class="playlist-container">
                    <div class="playlist-cover" role="button" aria-label="Play Daily Mix">
                        <div class="broadcast-icon">
                            <div class="broadcast-center"></div>
                        </div>
                    </div>

                    <div class="playlist-info">
                        <div class="personalized-tag">Personalized Mix</div>
                        <h1 class="playlist-title">Daily Mix</h1>
                        <p class="playlist-description">
                            Curated just for you<span>•</span>Updated daily<span>•</span>10 songs
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row table-header d-none d-md-flex mt-4">
                    <div class="col-5">Name</div>
                    <div class="col-3">Album</div>
                    <div class="col-2">Date Added</div>
                    <div class="col-2 text-end">Length</div>
                </div>

                <div id="song-list" class="mt-3 mb-3">
                    <div class="row song-row mx-0">
                        <div class="col-md-5 col-8 d-flex align-items-center p-0">
                            <img src="https://images.unsplash.com/photo-1614613535308-eb5fbd3d2c17?auto=format&fit=crop&w=80&q=80"
                                class="album-art">
                            <div>
                                <p class="song-title">Ghost</p>
                                <p class="artist-name">Justin Bieber</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-flex align-items-center meta-text">JUSTICE</div>
                        <div class="col-md-2 d-none d-md-flex align-items-center meta-text">One Hour Ago</div>
                        <div class="col-md-2 col-4 text-end meta-text">3:05</div>
                    </div>

                    <div class="row song-row mx-0">
                        <div class="col-md-5 col-8 d-flex align-items-center p-0">
                            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=80&q=80"
                                class="album-art">
                            <div>
                                <p class="song-title">Left and Right</p>
                                <p class="artist-name">Charlie Puth, Jung Kook</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-flex align-items-center meta-text">CHARLIE</div>
                        <div class="col-md-2 d-none d-md-flex align-items-center meta-text">2 Weeks Ago</div>
                        <div class="col-md-2 col-4 text-end meta-text">3:45</div>
                    </div>

                    <div class="row song-row mx-0">
                        <div class="col-md-5 col-8 d-flex align-items-center p-0">
                            <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&w=80&q=80"
                                class="album-art">
                            <div>
                                <p class="song-title">Left and Right</p>
                                <p class="artist-name">Charlie Puth, Jung Kook</p>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-flex align-items-center meta-text">CHARLIE</div>
                        <div class="col-md-2 d-none d-md-flex align-items-center meta-text">2 Weeks Ago</div>
                        <div class="col-md-2 col-4 text-end meta-text">3:45</div>
                    </div>





                </div>
                <hr>
                <div style="margin:20px 0px 40px 0px;">
                    <h1>Recommended for you</h1>
                </div>
                <section>
                    <div class="my-grid-container mt-4">
                        <div class="album-card">
                            <img src="die-with-smile_cover.jpg" class="album-cover">
                            <div class="album-info">
                                <div class="album-title">Die with smile</div>
                                <div class="album-artist">Lady Gaga</div>
                                <button class="play-btn  align-items-center justify-content-center text-white"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M8 17.175V6.825q0-.425.3-.713t.7-.287q.125 0 .263.037t.262.113l8.15 5.175q.225.15.338.375t.112.475t-.112.475t-.338.375l-8.15 5.175q-.125.075-.262.113T9 18.175q-.4 0-.7-.288t-.3-.712m2-1.825L15.25 12L10 8.65z" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="music-player-container mt-5">
                <div class="d-flex justify-content-between align-items-center h-100"
                    style="padding-left: 1.5rem;padding-right: 1.5rem">
                    <div class="d-flex align-items-center" style="width:18rem;gap:1.5rem">
                        <img src="die-with-smile_cover.jpg"
                            style="width:4rem; height:4rem; border-radius:1rem; object-fit:cover;" id="playerCover">
                        <div style="display:flex-1;min-width:150px">
                            <h4 style="font-weight: 500;color: hsl(0,0%,95%);font-size:18px" id="playerTitle">Midnight
                                Drive
                            </h4>
                            <small id="playerArtist">Aurora Beats</small>
                        </div>
                        <button onclick="likesong()" id="songid">
                            <i class="fa-light fa-heart" style="color: #ff0000;"></i>
                        </button>
                    </div>
                    <div style="display:flex-1;min-width:36rem;max-width:36rem;">
                        <div class="d-flex align-items-center justify-content-center mb-2 " style="gap:1.5rem">
                            <button class="music_btn" onclick="prevSong()"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-skip-back w-5 h-5">
                                    <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                    <line x1="5" x2="5" y1="19" y2="5"></line>
                                </svg></button>
                            <button class="playpausebtn" id="playPauseBtn"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="30" height="30" id="playPauseIcon" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-pause w-5 h-5 text-background">
                                    <rect x="14" y="4" width="4" height="16" rx="1"></rect>
                                    <rect x="6" y="4" width="4" height="16" rx="1"></rect>
                                </svg></button>
                            <button class="music_btn" onclick="nextSong()"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-skip-forward w-5 h-5">
                                    <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                    <line x1="19" x2="19" y1="5" y2="19"></line>
                                </svg></button>
                        </div>
                        <div class="d-flex align-items-center" style="gap:0.75rem;">
                            <span style="color:hsl(240,5%,55%);width:2.5rem;" class="text-right time">0:0</span>
                            <div class="progress-bar" id="progressBar">
                                <div class="progress-fill"></div>
                            </div>
                            <span style="color:hsl(240,5%,55%);width:2.5rem;" class="text-right time">0:0</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-end" style="width: 12rem;">
                        <div class="d-flex  align-items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-volume2 w-4 h-4 text-muted-foreground">
                                <path
                                    d="M11 4.702a.705.705 0 0 0-1.203-.498L6.413 7.587A1.4 1.4 0 0 1 5.416 8H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h2.416a1.4 1.4 0 0 1 .997.413l3.383 3.384A.705.705 0 0 0 11 19.298z">
                                </path>
                                <path d="M16 9a5 5 0 0 1 0 6"></path>
                                <path d="M19.364 18.364a9 9 0 0 0 0-12.728"></path>
                            </svg>
                            <div class="bar-hoverbox" id="volumeBox">
                                <div class="bar">
                                    <div class="bar-fill" id="volumeFill"></div>
                                </div>
                            </div>

                            <audio id="audio" src="song.mp3"></audio>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="soundSphere.js"></script>
    <script src="background.js"></script>
</body>

</html>