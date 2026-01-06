
        // Initialize particles.js
        particlesJS("particles-js", {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#9D4EDD" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#00F5D4",
                    opacity: 0.2,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                    attract: { enable: false, rotateX: 600, rotateY: 1200 }
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" },
                    resize: true
                }
            },
            retina_detect: true
        });
        
        // Custom cursor
        const cursor = document.querySelector('.cursor');
        const follower = document.querySelector('.cursor-follower');
        let mouseX = 0, mouseY = 0;
        let posX = 0, posY = 0;
        
        // Mouse movement tracking
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            
            // Create mouse trail effect
            if (Math.random() > 0.7) {
                createTrail(e.clientX, e.clientY);
            }
        });
        
        // Mouse trail creation
        function createTrail(x, y) {
            const trail = document.createElement('div');
            trail.className = 'mouse-trail';
            trail.style.left = x + 'px';
            trail.style.top = y + 'px';
            document.body.appendChild(trail);
            
            // Animate trail
            anime({
                targets: trail,
                opacity: [0.7, 0],
                scale: [1, 3],
                duration: 600,
                easing: 'easeOutExpo',
                complete: function() {
                    trail.remove();
                }
            });
        }
        
        // Cursor animation loop
        function animateCursor() {
            // Cursor position with delay for follower
            posX += (mouseX - posX) / 9;
            posY += (mouseY - posY) / 9;
            
            cursor.style.left = mouseX + 'px';
            cursor.style.top = mouseY + 'px';
            
            follower.style.left = posX + 'px';
            follower.style.top = posY + 'px';
            
            requestAnimationFrame(animateCursor);
        }
        
        animateCursor();
        
        // Cursor effects on hover
        const interactiveElements = document.querySelectorAll('a, button, .gallery-item, .aesthetic-card');
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.style.transform = 'scale(1.5)';
                cursor.style.borderColor = '#FF9E00';
                follower.style.transform = 'translate(-50%, -50%) scale(1.5)';
                follower.style.borderColor = 'rgba(255, 158, 0, 0.5)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.style.transform = 'scale(1)';
                cursor.style.borderColor = '#00F5D4';
                follower.style.transform = 'translate(-50%, -50%) scale(1)';
                follower.style.borderColor = 'rgba(0, 245, 212, 0.3)';
            });
        });
        
        // Scroll progress indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.scroll-progress').style.width = scrolled + '%';
            
            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            // Section title animation
            const sectionTitles = document.querySelectorAll('.section-title');
            sectionTitles.forEach(title => {
                const rect = title.getBoundingClientRect();
                if (rect.top < window.innerHeight * 0.8) {
                    title.classList.add('in-view');
                }
            });
            
            // Parallax effect for floating elements
            const floatingElements = document.querySelectorAll('.floating-element');
            floatingElements.forEach(el => {
                const speed = el.classList.contains('floating-element-1') ? 0.2 : 
                             el.classList.contains('floating-element-2') ? 0.3 : 0.1;
                el.style.transform = `translateY(${window.scrollY * speed}px)`;
            });
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Create confetti effect on form submission
            createConfetti();
            
            // Show success message
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Message Sent!';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                this.reset();
            }, 3000);
        });
        
        // Confetti effect
        function createConfetti() {
            const colors = ['#7B2CBF', '#9D4EDD', '#00BBF9', '#00F5D4', '#FF9E00'];
            
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.style.position = 'fixed';
                confetti.style.width = '10px';
                confetti.style.height = '10px';
                confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.borderRadius = '50%';
                confetti.style.left = Math.random() * window.innerWidth + 'px';
                confetti.style.top = '-20px';
                confetti.style.zIndex = '9999';
                confetti.style.pointerEvents = 'none';
                document.body.appendChild(confetti);
                
                // Animate confetti
                anime({
                    targets: confetti,
                    translateY: window.innerHeight + 100,
                    translateX: Math.random() * 200 - 100,
                    rotate: Math.random() * 360,
                    duration: 1500 + Math.random() * 1000,
                    easing: 'easeOutQuad',
                    complete: function() {
                        confetti.remove();
                    }
                });
            }
        }
        
        // Initialize section title animations
        document.addEventListener('DOMContentLoaded', () => {
            // Trigger initial check for section titles
            window.dispatchEvent(new Event('scroll'));
            
            // Add click effects to buttons
            const buttons = document.querySelectorAll('.btn-aesthetic');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.7);
                        transform: scale(0);
                        animation: ripple-animation 0.6s linear;
                        width: ${size}px;
                        height: ${size}px;
                        top: ${y}px;
                        left: ${x}px;
                        pointer-events: none;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
            
            // Add CSS for ripple animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple-animation {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);
        });
 