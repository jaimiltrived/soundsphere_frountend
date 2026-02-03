<?php
$page_title = "Login - MusicStream";
include 'header.php';
?>

<link rel="stylesheet" href="login.css">

<div class="login-container">
    <div class="login-card">
        <!-- Logo -->
        <div class="login-logo">
            <div class="logo-icon">
                <i class="fas fa-music"></i>
            </div>
            <h1>Welcome Back</h1>
            <p>Login to continue to MusicStream</p>
        </div>


        <form class="login-form" id="loginForm">

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <div class="input-wrapper">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" class="form-input" placeholder="Enter your email"  id="email">
                </div>
            </div>


            <div class="form-group">
                <label class="form-label">Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" class="form-input" placeholder="Enter your password"  id="password">
                    <button type="button" class="password-toggle" onclick="togglePassword('password')">
                        <i class="fas fa-eye" id="password-icon"></i>
                    </button>
                </div>
            </div>


            <div class="form-options">
                <div class="remember-me">
                    <a href="forgot-password.php" class="forgot-link">Forgot Password?</a>
                </div>
            </div>


            <button type="submit" class="btn-submit">
             
                <span>Login</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>


        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">OR</span>
            <div class="divider-line"></div>
        </div>

        <div class="social-login">
            <button class="btn-social">
                <i class="fab fa-google"></i>
                Google
            </button>
        </div>


        <div class="register-link">
            Don't have an account? <a href="register.php">Sign Up</a>
        </div>
    </div>
</div>

<script>

    function togglePassword(inputId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(inputId + '-icon');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

</script>

<?php include 'footer.php'; ?>