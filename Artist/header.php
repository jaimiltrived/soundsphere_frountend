<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Artist Dashboard'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Artist css/artist.css">
    <link rel="stylesheet" href="Artist css/song.css">
    <link rel="stylesheet" href="Artist css/cursor.css">
    <link rel="stylesheet" href="Artist css/wave.css">
    <style>
        :root {
            --bg: #050507;
            --glass: rgba(255, 255, 255, .06);
            --border: rgba(255, 255, 255, .1);
            --orange: #ff7b3a;
            --gold: #ffb347;
            --purple: #8f4bff;
            --red: #ff4f6d;
        }

        body {
            overflow-x: hidden;
            font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #050507;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 310px;
            height: 100vh;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            color: white;
            display: flex;
            flex-direction: column;
            transition: 0.3s ease;
            z-index: 1000;
            font-size: 21px;
            background: rgba(5, 5, 7, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            overflow-y: auto;
            box-shadow: 20px 0 40px rgba(0,0,0,0.1);
        }

        .sidebar.hide {
            transform: translateX(-100%);
        }

        .logo-box {
            width: 45px;
            height: 45px;
            background: #ff7a18;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            border-radius: 12px;
            color: #aaa;
            text-decoration: none;
            cursor: pointer;
            transition: 0.2s;
            margin: 5px 20px;
        }

        .menu-item:hover {
            background: #1f1f23;
            color: white;
        }

        .menu-item.active {
            background: #1f1f23;
            color: #ff7a18;
        }

        .menu-item i {
            width: 24px;
            text-align: center;
            font-size: 20px;
        }

        .muted-text {
            color: #878792;
            font-size: 15px;
            padding: 20px;
            margin: 0px 0px 12px;
            letter-spacing: 0.05em;
            font-weight: 600;
        }

        .gradient-text {
            background: linear-gradient(135deg, hsl(16, 85%, 60%), hsl(35, 90%, 55%));
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        /* Profile */
        .profile {
            border-top: 1px solid #222;
            padding-top: 15px;
            margin-top: auto;
        }

        .avatar-box {
            gap: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-weight: bold;
            margin: 10px 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 12px;
            transition: 0.2s;
        }

        .avatar-box:hover {
            background: rgba(255, 122, 24, 0.1);
        }

        .avatar {
            width: 40px;
            height: 40px;
            background: #ff7a18;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }


        .main-content {
            margin-left: 310px;
            transition: margin-left 0.3s ease;
            min-height: 100vh;
        }

        .main-content.expanded {
            margin-left: 0;
        }

        /* Top Navbar */
        .top-navbar {
            background: rgba(10, 10, 15, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(30px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Dashboard Cards */
        .dashboard-card {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 138, 76, 0.05), rgba(251, 176, 59, 0.05));
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 122, 24, 0.3);
        }

        .dashboard-card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 50px;
            height: 50px;
        }

        .percentage {
            font-size: 14px;
        }

        .card-value {
            font-size: 2rem;
        }


        .toggle-btn {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 2000;
            background: #ff7a18;
            color: black;
            border-radius: 10px;
            border: none;
            padding: 12px 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .toggle-btn:hover {
            background: #ff8a28;
            transform: scale(1.05);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .card-value {
                font-size: 1.5rem;
            }


        }


        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
            backdrop-filter: blur(4px);
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 122, 24, 0.3);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 122, 24, 0.5);
        }

        /* Dropdown menu styling */
        .dropdown-menu {
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dropdown-item {
            color: #aaa;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: rgba(255, 122, 24, 0.1);
            color: white;
        }
    </style>
</head>

<body>
    <!-- Custom Cursor -->
    <div class="cursor-dot" data-cursor-dot></div>
    <div class="cursor-outline" data-cursor-outline></div>

    <!-- Wave Background -->
    <div class="wave-bg">
        <div class="wave-blob wave-1"></div>
        <div class="wave-blob wave-2"></div>
        <div class="wave-blob wave-3"></div>
    </div>