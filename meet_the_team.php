<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet The Team | TechNova - Elite Web Development & Design Agency</title>

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
                        'slide-up': 'slideUp 0.5s ease-out'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>
   
    <style>
        /* Custom clip-path shapes */
        .clip-hexagon {
            clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
        }
        
        .clip-diamond {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
        
        .clip-circle {
            clip-path: circle(50% at 50% 50%);
        }
        
        .clip-pentagon {
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
        }
        
        /* Dark mode team cards */
        .team-card-dark {
            @apply bg-gray-800 border border-gray-700 hover:border-blue-500 transition-all duration-300;
        }
        
        /* Glow effect on hover */
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/80 dark:bg-gray-900/80 backdrop-blur-md z-50 shadow-sm transition-all duration-300 hover:bg-white/90 dark:hover:bg-gray-900/90">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="text-xl font-bold flex items-center group">
                        <span class="mr-2 text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-colors duration-300">
                            <i class="fa-solid fa-laptop-code"></i>
                        </span>
                        <span class="bg-gradient-to-r from-blue-600 to-blue-400 dark:from-blue-400 dark:to-blue-300 bg-clip-text text-transparent group-hover:from-blue-700 group-hover:to-blue-500 transition-all duration-500">
                            TechNova
                        </span>
                        <span class="ml-2 h-1 w-6 bg-blue-600 dark:bg-blue-400 group-hover:w-10 transition-all duration-300 ease-out"></span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php#home" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                    </a>
                    <a href="index.php#about" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                    </a>
                    <a href="index.php#skills" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                        Skills
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                    </a>
                    <a href="our_portfolio.php" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">
                        Portfolio
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                    </a>
                    <a href="meet_the_team.php" class="relative group py-1 px-1 font-medium text-blue-600 dark:text-blue-400 transition-colors duration-300">
                        Meet The Team
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-600 dark:bg-blue-400 transition-all duration-300 ease-out"></span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="p-2 rounded-md hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-300 transform hover:scale-110">
                        <i class="fas fa-bars text-gray-700 dark:text-gray-300"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 shadow-lg rounded-b-lg origin-top transform transition-all duration-300 scale-y-0">
            <div class="px-5 pt-2 pb-3 space-y-2">
                <a href="index.php#home" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
                <a href="index.php#about" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2">
                    <i class="fas fa-user mr-2"></i> About
                </a>
                <a href="index.php#skills" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2">
                    <i class="fas fa-code mr-2"></i> Skills
                </a>
                <a href="our_portfolio.php" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2">
                    <i class="fas fa-project-diagram mr-2"></i> Portfolio
                </a>
                <a href="meet_the_team.php" class="block px-3 py-2 rounded-md text-blue-600 dark:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2">
                    <i class="fas fa-users mr-2"></i> Meet The Team
                </a>
            </div>
        </div>
    </nav>

    <!-- Team Header -->
    <section class="pt-32 pb-20 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">Our Team</span>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white">Meet The <span class="text-blue-600 dark:text-blue-400">TechNova</span> Team</h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    The brilliant minds behind our success - a diverse team of experts passionate about delivering exceptional digital solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">Leadership <span class="text-blue-600 dark:text-blue-400">Team</span></h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Our visionary leaders who guide the strategic direction of TechNova</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-hexagon w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="CEO" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">Alexandra Mitchell</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">CEO & Founder</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Visionary leader with 15+ years in tech innovation and business strategy.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- CTO -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-diamond w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="CTO" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">David Chen</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Chief Technology Officer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Full-stack architect with expertise in scalable cloud solutions.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <!-- Creative Director -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-circle w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Creative Director" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">Sophia Rodriguez</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Creative Director</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Award-winning designer with a passion for user-centered experiences.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Team -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">Development <span class="text-blue-600 dark:text-blue-400">Team</span></h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Our technical wizards who bring ideas to life with clean, efficient code</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Frontend Lead -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-pentagon w-32 h-32 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Frontend Lead" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold dark:text-white">Michael Johnson</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Frontend Lead</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center text-sm mb-4">
                        React specialist with an eye for pixel-perfect implementations.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-codepen"></i>
                        </a>
                    </div>
                </div>

                <!-- Backend Developer -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-hexagon w-32 h-32 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Backend Developer" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold dark:text-white">Raj Patel</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Backend Developer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center text-sm mb-4">
                        Node.js and Python expert focused on performance optimization.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-stack-overflow"></i>
                        </a>
                    </div>
                </div>

                <!-- Mobile Developer -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-diamond w-32 h-32 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Mobile Developer" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold dark:text-white">Sarah Williams</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Mobile Developer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center text-sm mb-4">
                        Cross-platform app developer with Flutter expertise.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-apple"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-android"></i>
                        </a>
                    </div>
                </div>

                <!-- Full Stack Developer -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-circle w-32 h-32 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Full Stack Developer" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold dark:text-white">James Wilson</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Full Stack Developer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center text-sm mb-4">
                        Versatile developer with expertise across the entire stack.
                    </p>
                    <div class="flex justify-center space-x-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300 text-sm">
                            <i class="fab fa-dev"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Team -->
    <section class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">Design <span class="text-blue-600 dark:text-blue-400">Team</span></h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">Creative minds who craft beautiful, intuitive user experiences</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- UI/UX Designer -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-hexagon w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="UI/UX Designer" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">Emma Thompson</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">UI/UX Designer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Creates interfaces that are both beautiful and intuitive.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-figma"></i>
                        </a>
                    </div>
                </div>

                <!-- Graphic Designer -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-pentagon w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="Graphic Designer" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">Carlos Mendez</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">Graphic Designer</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Visual storyteller with a passion for brand identity.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-behance"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- UX Researcher -->
                <div class="team-card-dark rounded-xl p-6 hover-glow transition-all duration-500">
                    <div class="flex flex-col items-center mb-6">
                        <div class="clip-diamond w-40 h-40 overflow-hidden mb-4 border-4 border-blue-500 dark:border-blue-400">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                 alt="UX Researcher" 
                                 class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-bold dark:text-white">Priya Kapoor</h3>
                        <p class="text-blue-500 dark:text-blue-400 text-sm font-medium">UX Researcher</p>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-center mb-4">
                        Uncovers user needs through data-driven research.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fas fa-graduation-cap"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-700 dark:text-gray-300 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                            <i class="fas fa-book"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Values -->
    <section class="py-16 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4 dark:text-white">Our <span class="text-blue-600 dark:text-blue-400">Values</span></h2>
                <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">The principles that guide our team's work and collaboration</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Innovation -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-xl flex items-center justify-center text-2xl mb-6 mx-auto">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center dark:text-white mb-3">Innovation</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        We embrace creativity and continuous improvement to deliver cutting-edge solutions.
                    </p>
                </div>

                <!-- Collaboration -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-xl flex items-center justify-center text-2xl mb-6 mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center dark:text-white mb-3">Collaboration</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        We believe the best results come from teamwork and shared knowledge.
                    </p>
                </div>

                <!-- Excellence -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-xl flex items-center justify-center text-2xl mb-6 mx-auto">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center dark:text-white mb-3">Excellence</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        We're committed to delivering work of the highest quality in every project.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="bg-white dark:bg-gray-700 p-8 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="w-16 h-16 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded-xl flex items-center justify-center text-2xl mb-6 mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-center dark:text-white mb-3">Integrity</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">
                        We maintain transparency and honesty in all our professional relationships.
                    </p>
                </div>
            </div>
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
            
            // Dark mode toggle (if you want to add a toggle button)
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