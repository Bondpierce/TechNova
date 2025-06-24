<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio | TechNova - Elite Web Development & Design Agency</title>

    <!-- Favicon -->
    <link href="favicon_io/android-chrome-192x192.png" rel="icon">

    <base target="_self">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@preline/preline@2.0.0/dist/preline.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        dark: '#1E293B',
                        light: '#F8FAFC'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 6s ease-in-out infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' }
                        }
                    }
                }
            }
        }
    </script>
   
    <style>
        .portfolio-item {
            perspective: 1000px;
        }
        
        .portfolio-card {
            transform-style: preserve-3d;
            transition: all 0.5s ease;
        }
        
        .portfolio-item:hover .portfolio-card {
            transform: rotateY(10deg) rotateX(5deg);
        }
        
        .portfolio-image {
            transform: translateZ(30px);
        }
        
        .portfolio-badge {
            transform: translateZ(50px);
        }
        
        .filter-btn {
            transition: all 0.3s ease;
            transform-origin: center;
        }
        
        .filter-btn:hover {
            transform: scale(1.1);
        }
        
        .filter-btn.active {
            animation: pulse-slow 2s infinite;
        }
        
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .hover-grow {
            transition: all 0.3s ease;
        }
        
        .hover-grow:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
   <!-- nav link -->
        <?php include 'header.php'; ?>

    <!-- Portfolio Header -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center animate-fade-in">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4 animate-float">Our Work</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white">Portfolio of <span class="text-blue-600 dark:text-blue-400">Excellence</span></h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate-slide-up">
                    Explore our curated selection of projects that showcase our technical expertise and creative problem-solving.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Filter -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-8">
        <div class="flex flex-wrap justify-center gap-4 mb-12 animate-fade-in">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
            <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
            <button class="filter-btn" data-filter="design">UI/UX Design</button>
        </div>
    </div>

    <!-- Portfolio Grid -->
    <section class="py-12 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 - E-Commerce -->
                <div class="portfolio-item web ecommerce animate-slide-up" data-category="web ecommerce">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="E-Commerce Dashboard" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                Web + E-Commerce
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Global E-Commerce Platform</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">A scalable solution for international retail with multi-currency support.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">React</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">Node.js</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">MongoDB</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 - Mobile App -->
                <div class="portfolio-item mobile animate-slide-up" data-category="mobile" style="animation-delay: 0.1s">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="Fitness Mobile App" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                Mobile App
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Fitness Tracker Pro</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">AI-powered workout companion with real-time form correction.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full text-xs">Flutter</span>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full text-xs">Firebase</span>
                                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-full text-xs">TensorFlow</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-green-600 dark:text-green-400 hover:text-green-800 dark:hover:text-green-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 - UI/UX Design -->
                <div class="portfolio-item design animate-slide-up" data-category="design" style="animation-delay: 0.2s">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="FinTech Dashboard" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                UI/UX Design
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">FinTech Dashboard UI</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Complex financial data visualized through intuitive interfaces.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-xs">Figma</span>
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-xs">Adobe XD</span>
                                <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full text-xs">After Effects</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-purple-600 dark:text-purple-400 hover:text-purple-800 dark:hover:text-purple-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 - Web Development -->
                <div class="portfolio-item web animate-slide-up" data-category="web" style="animation-delay: 0.3s">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="Corporate Portal" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                Web Development
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Enterprise Resource Portal</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Custom intranet solution for Fortune 500 company.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">Vue.js</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">Laravel</span>
                                <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-xs">MySQL</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 - E-Commerce -->
                <div class="portfolio-item ecommerce animate-slide-up" data-category="ecommerce" style="animation-delay: 0.4s">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="Online Marketplace" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-yellow-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                E-Commerce
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Artisan Marketplace</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Platform connecting craftsmen with global buyers.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded-full text-xs">React</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded-full text-xs">Node.js</span>
                                <span class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded-full text-xs">PostgreSQL</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-yellow-600 dark:text-yellow-400 hover:text-yellow-800 dark:hover:text-yellow-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 - Mobile + Design -->
                <div class="portfolio-item mobile design animate-slide-up" data-category="mobile design" style="animation-delay: 0.5s">
                    <div class="portfolio-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-glow transition-all duration-500 h-full flex flex-col">
                        <div class="portfolio-image h-64 overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 alt="Health App" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 via-gray-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="portfolio-badge absolute top-4 left-4 bg-pink-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                Mobile + UI/UX
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Telemedicine Platform</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">Secure video consultations with healthcare providers.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-full text-xs">Swift</span>
                                <span class="px-2 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-full text-xs">Kotlin</span>
                                <span class="px-2 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded-full text-xs">WebRTC</span>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="#" class="inline-flex items-center text-pink-600 dark:text-pink-400 hover:text-pink-800 dark:hover:text-pink-300 transition-colors duration-300">
                                View Case Study <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16">
                <button id="load-more" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">Client <span class="text-blue-600 dark:text-blue-400">Testimonials</span></h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">What our clients say about working with TechNova</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow hover-grow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold dark:text-white">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">CEO, RetailCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        "TechNova transformed our e-commerce platform, resulting in a 150% increase in online sales within the first quarter post-launch."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow hover-grow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold dark:text-white">Michael Chen</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">CTO, HealthTech Solutions</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        "The mobile app developed by TechNova exceeded our expectations in both performance and user experience. Their team is truly exceptional."
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow hover-grow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold dark:text-white">David Rodriguez</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Director, Financial Services</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        "From concept to deployment, TechNova demonstrated unparalleled expertise in developing our complex financial dashboard. Highly recommended!"
                    </p>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-blue-400 dark:from-blue-800 dark:to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Let's discuss how we can bring your vision to life with our technical expertise and creative solutions.</p>
            <a href="index.php#contact" class="inline-block px-8 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition-colors duration-300">
                Get in Touch
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="main.js"></script>
    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    const isHidden = mobileMenu.classList.contains('hidden');
                    
                    if (isHidden) {
                        mobileMenu.classList.remove('hidden');
                        setTimeout(() => {
                            mobileMenu.classList.remove('scale-y-0');
                            mobileMenu.classList.add('scale-y-100');
                        }, 10);
                    } else {
                        mobileMenu.classList.remove('scale-y-100');
                        mobileMenu.classList.add('scale-y-0');
                        setTimeout(() => {
                            mobileMenu.classList.add('hidden');
                        }, 300);
                    }
                });
            }
            
            // Portfolio filtering
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Filter items
                    portfolioItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category').includes(filterValue)) {
                            item.style.display = 'block';
                            item.classList.add('animate-fade-in');
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('animate-fade-in');
                        }
                    });
                });
            });
            
            // Load more functionality
            const loadMoreBtn = document.getElementById('load-more');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    // In a real implementation, this would load more items via AJAX
                    alert('More projects would be loaded in a real implementation');
                    this.textContent = 'No More Projects';
                    this.disabled = true;
                });
            }
            
            // Dark mode toggle
            const darkModeToggle = document.createElement('button');
            darkModeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            darkModeToggle.className = 'p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-300 ml-4';
            darkModeToggle.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
                this.innerHTML = document.documentElement.classList.contains('dark') ? 
                    '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
            });
            
            // Add toggle button next to mobile menu button
            const navContainer = document.querySelector('nav > div > div');
            if (navContainer) {
                navContainer.appendChild(darkModeToggle);
            }
            
            // Check for saved dark mode preference
            if (localStorage.getItem('darkMode') === 'true') {
                document.documentElement.classList.add('dark');
                if (darkModeToggle) darkModeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            }
        });
    </script>
</body>
</html>