<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Able-Choice Designs | Immersive Visual Experience</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css for additional animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <!-- Custom cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    
    <!-- Scroll progress indicator -->
    <div class="scroll-progress"></div>
    
    <!-- Background elements -->
    <div class="gradient-bg"></div>
    <div id="particles-js"></div>
    
    <!-- Floating elements -->
    <div class="floating-element floating-element-1"></div>
    <div class="floating-element floating-element-2"></div>
    <div class="floating-element floating-element-3"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-infinity me-2"></i>Able-Choice Design
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#contact" class="btn btn-aesthetic">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="hero-title animate__animated animate__fadeInUp">IMMERSE IN <span class="d-block">VISUAL PERFECTION</span></h1>
                        <p class="hero-subtitle animate__animated animate__fadeInUp animate__delay-1s">Experience the future of web aesthetics with our cutting-edge design system. Where every pixel tells a story and every interaction creates emotion.</p>
                        <div class="d-flex flex-wrap gap-3 animate__animated animate__fadeInUp animate__delay-2s">
                            <a href="#about" class="btn btn-aesthetic">Explore More</a>
                            <a href="#contact" class="btn btn-aesthetic" style="background: var(--gradient-secondary);">Start Journey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">The Art of Digital Experience</h2>
                    <p class="section-subtitle">We blend cutting-edge technology with artistic vision to create immersive digital environments that captivate and inspire.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="aesthetic-card">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="h4 mb-3">Visual Mastery</h3>
                        <p class="text-light opacity-75">Crafting stunning visuals with dynamic animations, particle systems, and fluid gradients that respond to user interaction.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="aesthetic-card">
                        <div class="card-icon">
                            <i class="fas fa-mouse-pointer"></i>
                        </div>
                        <h3 class="h4 mb-3">Interactive Design</h3>
                        <p class="text-light opacity-75">Creating intuitive interfaces with custom cursor systems, scroll-triggered animations, and immersive hover effects.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="aesthetic-card">
                        <div class="card-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="h4 mb-3">Color Symphony</h3>
                        <p class="text-light opacity-75">Harmonious color schemes with dynamic gradients that adapt and flow, creating emotional connections with users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-dark" style="background: rgba(0,0,0,0.2);">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Immersive Features</h2>
                    <p class="section-subtitle">Experience a new dimension of web interaction with our advanced feature set.</p>
                </div>
            </div>
            
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="feature-visual p-4">
                        <div class="position-relative" style="height: 400px;">
                            <div class="aesthetic-card h-100 d-flex flex-column justify-content-center">
                                <div class="text-center">
                                    <div class="mb-4">
                                        <i class="fas fa-magic fa-3x" style="background: var(--gradient-acid); -webkit-background-clip: text; background-clip: text; color: transparent;"></i>
                                    </div>
                                    <h3 class="mb-3">Real-time Interaction</h3>
                                    <p class="mb-4">Move your mouse around to see the custom cursor, particle effects, and interactive elements respond in real-time.</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="p-3 mx-2 rounded-circle" style="background: rgba(123, 44, 191, 0.2); border: 2px solid var(--primary-color);">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </div>
                                        <div class="p-3 mx-2 rounded-circle" style="background: rgba(0, 245, 212, 0.2); border: 2px solid var(--accent-2);">
                                            <i class="fas fa-mouse"></i>
                                        </div>
                                        <div class="p-3 mx-2 rounded-circle" style="background: rgba(255, 158, 0, 0.2); border: 2px solid var(--accent-3);">
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="aesthetic-card">
                        <h3 class="h2 mb-4">Dynamic Animations</h3>
                        <ul class="list-unstyled">
                            <li class="mb-4 d-flex">
                                <div class="me-3">
                                    <div class="rounded-circle p-2" style="background: rgba(123, 44, 191, 0.2); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-wave-square"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="h5">Scroll-triggered Effects</h4>
                                    <p class="text-light opacity-75">Elements animate as you scroll through the page, creating a narrative flow.</p>
                                </div>
                            </li>
                            <li class="mb-4 d-flex">
                                <div class="me-3">
                                    <div class="rounded-circle p-2" style="background: rgba(0, 245, 212, 0.2); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-hand-pointer"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="h5">Mouse-responsive Design</h4>
                                    <p class="text-light opacity-75">Custom cursor system with follower and interactive hover states.</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3">
                                    <div class="rounded-circle p-2" style="background: rgba(255, 158, 0, 0.2); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-atom"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="h5">Particle Background</h4>
                                    <p class="text-light opacity-75">Dynamic particle system that responds to mouse movement and creates depth.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">PROJECTS</h2>
                    <p class="section-subtitle">Explore our portfolio of stunning visual projects with interactive elements.</p>
                </div>
            </div>
            
            <div class="gallery-container">
                <div class="gallery-item">
                    <img src="assets/portfolio.png" class="gallery-img" alt="Visual Design 1">
                    <div class="gallery-overlay">
                        <div>
                            <h4 class="h3">Portfolio</h4>
                            <p class="text-light opacity-75">Detail about Developer.</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="assets/Able-choice.png" class="gallery-img" alt="Visual Design 2">
                    <div class="gallery-overlay">
                        <div>
                            <h4 class="h3">Able-Choice</h4>
                            <p class="text-light opacity-75">Interactive E-Commerce marble website.</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="assets/al-shaikhi-enterprices.png" class="gallery-img" alt="Visual Design 3">
                    <div class="gallery-overlay">
                        <div>
                            <h4 class="h3">Al-Shaikh-Enterprices</h4>
                            <p class="text-light opacity-75">E-commerce website.</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="assets/parlour.png" class="gallery-img" alt="Visual Design 4">
                    <div class="gallery-overlay">
                        <div>
                            <h4 class="h3">Parlore</h4>
                            <p class="text-light opacity-75">Parlour website for showing makrup, hair, nails, faical arts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Contact Us</h2>
                    <p class="section-subtitle">Let's connect and build something extraordinary.</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="aesthetic-card">
                        <form id="contactForm">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(157, 78, 221, 0.3); color: white;">
                                        <label for="name" class="text-light">Your Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(157, 78, 221, 0.3); color: white;">
                                        <label for="email" class="text-light">Email Address</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select" id="projectType" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(157, 78, 221, 0.3); color: white;">
                                            <option value="" disabled selected>Select project type</option>
                                            <option value="website">Immersive Website</option>
                                            <option value="app">Interactive Application</option>
                                            <option value="branding">Visual Branding</option>
                                            <option value="other">Other Experience</option>
                                        </select>
                                        <label for="projectType" class="text-light">Project Type</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" placeholder="Your Vision" rows="5" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(157, 78, 221, 0.3); color: white; height: 150px;"></textarea>
                                        <label for="message" class="text-light">Your Vision</label>
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-aesthetic px-5 py-3">Contact Us <i class="fas fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h3 class="h2 mb-3"><i class="fas fa-infinity me-2"></i>Able-Choice Design</h3>
                    <p class="text-light opacity-75">Creating immersive digital experiences through advanced visual design and interactive technology.</p>
                </div>
                
                <div class="col-lg-4 mb-4 mb-lg-0 text-center">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 text-lg-end">
                    <p class="text-light opacity-75 mb-0">© 2023 Able-Choice Design. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Particles.js library -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="assets/main.js"></script>
</body>
</html>