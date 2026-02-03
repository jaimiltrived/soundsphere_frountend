    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('toggleSidebar');
        const overlay = document.getElementById('sidebarOverlay');

        toggleBtn.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                // Mobile: Show/Hide sidebar with overlay
                sidebar.classList.toggle('show');
                overlay.classList.toggle('show');
            } else {
              
                sidebar.classList.toggle('hide');
                mainContent.classList.toggle('expanded');
            }
        });

        // Close sidebar when clicking overlay (mobile)
        overlay.addEventListener('click', function() {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
            }
        });

        // Active link handling
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Don't prevent default for navigation
                // Remove active class from all links
                navLinks.forEach(l => l.classList.remove('active'));
                // Add active class to clicked link (unless it's logout)
                if (!this.classList.contains('text-danger')) {
                    this.classList.add('active');
                }
            });
        });

        // Custom Cursor Logic
    const cursorOutline = document.querySelector('[data-cursor-outline]');

    if (cursorOutline) {
        
        // Move cursor instantly (no lag for "hard" feel)
        window.addEventListener('mousemove', function(e) {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorOutline.style.left = `${posX}px`;
            cursorOutline.style.top = `${posY}px`;
        });

            // Add hover effect to interactive elements
            const addHoverListeners = () => {
                const interactiveElements = document.querySelectorAll('a, button, input, select, textarea, .btn-action, .card, .song-card, .sidebar-link, .nav-link, .stat-card, label');
                
                interactiveElements.forEach(el => {
                    el.addEventListener('mouseenter', () => document.body.classList.add('hovering'));
                    el.addEventListener('mouseleave', () => document.body.classList.remove('hovering'));
                });
            };

            // Add click effect
            window.addEventListener('mousedown', () => document.body.classList.add('clicking'));
            window.addEventListener('mouseup', () => document.body.classList.remove('clicking'));

            addHoverListeners();
            
            // Re-apply listeners periodically for dynamic content
            setInterval(addHoverListeners, 2000);
        }
    </script>
</body>
</html>
