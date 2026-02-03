<?php
$page_title = "Register - MusicStream";
include 'header.php';
?>
<link rel="stylesheet" href="register.css">


<div class="register-container">
    <div class="register-card">
        <!-- Logo -->
        <div class="register-logo">
            <div class="logo-icon">
                <i class="fas fa-music"></i>
            </div>
            <h1>Create Account</h1>
            <p>Join MusicStream and start your musical journey</p>
        </div>

        <!-- Account Type Selection -->
        <div class="account-type">
            <label class="type-card active">
                <input type="radio" name="accountType" value="listener" checked>
                <div class="type-icon">
                    <i class="fas fa-headphones"></i>
                </div>
                <div class="type-title">Listener</div>
                <div class="type-desc">Discover and enjoy music</div>
            </label>
            <label class="type-card">
                <input type="radio" name="accountType" value="artist">
                <div class="type-icon">
                    <i class="fas fa-microphone"></i>
                </div>
                <div class="type-title">Artist</div>
                <div class="type-desc">Share your music with the world</div>
            </label>
        </div>

        <!-- Register Form -->
        <form class="register-form" id="registerForm">
            <div class="form-row">
                <!-- Full Name -->
                <div class="form-group">
                    <label class="form-label">Full Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" class="form-input" placeholder="Enter your full name" required id="fullName">
                    </div>
                </div>

                <!-- Username -->
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-wrapper">
                        <i class="fas fa-at input-icon"></i>
                        <input type="text" class="form-input" placeholder="Choose a username" required id="username">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- Email -->
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" class="form-input" placeholder="Enter your email" required id="email">
                    </div>
                </div>

                <!-- Phone -->
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <div class="input-wrapper">
                        <i class="fas fa-phone input-icon"></i>
                        <input type="tel" class="form-input" placeholder="Enter your phone" id="phone">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <!-- Password -->
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="Create a password" required id="password"
                            oninput="checkPasswordStrength()">
                        <button type="button" class="password-toggle" onclick="togglePassword('password')">
                            <i class="fas fa-eye" id="password-icon"></i>
                        </button>
                    </div>
                    <div class="password-strength">
                        <div class="strength-bar">
                            <div class="strength-fill" id="strengthFill"></div>
                        </div>
                        <div class="strength-text" id="strengthText">Enter a password</div>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" class="form-input" placeholder="Confirm your password" required
                            id="confirmPassword">
                        <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')">
                            <i class="fas fa-eye" id="confirmPassword-icon"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Genre (Artist Only) -->
            <div class="form-group artist-only" style="display: none;">
                <label class="form-label">Primary Genre</label>
                <div class="input-wrapper">
                    <i class="fas fa-music input-icon"></i>
                    <select class="form-select" id="genre">
                        <option value="">Select your primary genre</option>
                        <option value="pop">Pop</option>
                        <option value="rock">Rock</option>
                        <option value="hip-hop">Hip Hop</option>
                        <option value="electronic">Electronic</option>
                        <option value="jazz">Jazz</option>
                        <option value="classical">Classical</option>
                        <option value="country">Country</option>
                        <option value="r&b">R&B</option>
                    </select>
                </div>
            </div>

            <!-- Terms & Conditions -->
            <div class="terms-check">
                <input type="checkbox" id="terms" required>
                <label for="terms">
                    I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-submit">
                <span class="spinner"></span>
                <span>Create Account</span>
                <i class="fas fa-arrow-right"></i>
            </button>
        </form>

        <!-- Divider -->
        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">OR</span>
            <div class="divider-line"></div>
        </div>

        <!-- Social Register -->
        <div class="social-register">
            <button class="btn-social" onclick="socialRegister('google')">
                <i class="fab fa-google"></i>
                Google
            </button>
        </div>

        <!-- Login Link -->
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</div>

<script>
   
    document.querySelectorAll('.type-card').forEach(card => {
        card.addEventListener('click', function () {
            document.querySelectorAll('.type-card').forEach(c => c.classList.remove('active'));
            this.classList.add('active');
            this.querySelector('input').checked = true;

            // Show/hide artist fields
            const accountType = this.querySelector('input').value;
            const artistFields = document.querySelectorAll('.artist-only');
            if (accountType === 'artist') {
                artistFields.forEach(field => field.style.display = 'block');
            } else {
                artistFields.forEach(field => field.style.display = 'none');
            }
        });
    });

    // Toggle Password Visibility
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