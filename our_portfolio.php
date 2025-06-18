<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola Timi |web developer and web Designer</title>
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
        .active {
            color: #3B82F6;
            font-weight: 600;
        }
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .skill-bar {
            transition: width 1.5s ease-in-out;
        }
    </style>

</head>
<body class="bg-light dark:bg-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
  <nav class="fixed w-full bg-white/80 dark:bg-gray-900/80 backdrop-blur-md z-50 shadow-sm transition-all duration-300 hover:bg-white/90 dark:hover:bg-gray-900/90">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Animated Logo -->
            <div class="flex items-center">
                <a href="#home" class="text-xl font-bold flex items-center group" onclick="handleNavClick(event)">
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
                <a href="#home" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300" onclick="handleNavClick(event)">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                </a>
                <a href="#about" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300" onclick="handleNavClick(event)">
                    About
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                </a>
                <a href="#skills" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300" onclick="handleNavClick(event)">
                    Skills
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                </a>
                <a href="#projects" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300" onclick="handleNavClick(event)">
                    Projects
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
                </a>
                <a href="#contact" class="relative group py-1 px-1 font-medium text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300" onclick="handleNavClick(event)">
                    Contact
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 dark:bg-blue-400 group-hover:w-full transition-all duration-300 ease-out"></span>
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
            <a href="#home" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2" onclick="handleNavClick(event)">
                <i class="fas fa-home mr-2"></i> Home
            </a>
            <a href="#about" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2" onclick="handleNavClick(event)">
                <i class="fas fa-user mr-2"></i> About
            </a>
            <a href="#skills" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2" onclick="handleNavClick(event)">
                <i class="fas fa-code mr-2"></i> Skills
            </a>
            <a href="#projects" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2" onclick="handleNavClick(event)">
                <i class="fas fa-project-diagram mr-2"></i> Projects
            </a>
            <a href="#contact" class="block px-3 py-2 rounded-md text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300 transform hover:translate-x-2" onclick="handleNavClick(event)">
                <i class="fas fa-envelope mr-2"></i> Contact
            </a>
        </div>
    </div>
</nav>



<!-- footer -->
  <footer class="bg-gradient-to-b from-gray-900 to-gray-800 text-white pt-20 pb-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-blue-600/10 blur-3xl"></div>
                <div class="absolute -top-10 -left-10 w-40 h-40 rounded-full bg-primary/10 blur-2xl"></div>
                
                <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    
                    <!-- Agency Info -->
                    <div class="lg:col-span-2">
                        <a href="#" class="text-3xl font-bold flex items-center mb-6 group">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400 group-hover:from-blue-400 group-hover:to-primary transition-all duration-500">Digital</span>
                        <span class="text-white">Creative</span>
                        <span class="ml-3 w-12 h-1 bg-gradient-to-r from-primary to-blue-400 group-hover:from-blue-400 group-hover:to-primary transition-all duration-500"></span>
                        </a>
                        <p class="text-gray-400 mb-8 text-lg leading-relaxed">
                        We craft <span class="text-primary font-medium">digital experiences</span> that transform brands and accelerate business growth.
                        </p>
                        <div class="flex space-x-5">
                        <a href="#" class="social-icon hover:bg-twitter hover:shadow-twitter/30">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon hover:bg-linkedin hover:shadow-linkedin/30">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon hover:bg-dribbble hover:shadow-dribbble/30">
                            <i class="fab fa-dribbble"></i>
                        </a>
                        <a href="#" class="social-icon hover:bg-instagram hover:shadow-instagram/30">
                            <i class="fab fa-instagram"></i>
                        </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-xl font-bold mb-8 relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-primary to-blue-400 rounded-full"></span>
                        </h3>
                        <ul class="space-y-4">
                        <li>
                            <a href="#Home" class="footer-link before:bg-primary">
                            <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                            Home
                            </a>
                        </li>
                        <li>
                            <a href="#Services" class="footer-link before:bg-blue-400">
                            <i class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i>
                            Services
                            </a>
                        </li>
                        <li>
                            <a href="#Portfolio" class="footer-link before:bg-purple-400">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-400"></i>
                            Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#About" class="footer-link before:bg-green-400">
                            <i class="fas fa-chevron-right text-xs mr-2 text-green-400"></i>
                            About Us
                            </a>
                        </li>
                        <li>
                            <a href="#Contact" class="footer-link before:bg-yellow-400">
                            <i class="fas fa-chevron-right text-xs mr-2 text-yellow-400"></i>
                            Contact
                            </a>
                        </li>
                        </ul>
                    </div>
                    
                    <!-- Newsletter Subscription -->
                    <div>
                        <h3 class="text-xl font-bold mb-8 relative inline-block">
                        Stay Updated
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-gradient-to-r from-primary to-blue-400 rounded-full"></span>
                        </h3>
                        <p class="text-gray-400 mb-6 leading-relaxed">
                        Join our newsletter for exclusive <span class="text-primary font-medium">insights</span> and industry <span class="text-blue-400 font-medium">updates</span>.
                        </p>
                        <form class="flex flex-col space-y-4">
                        <div class="relative">
                            <input 
                            type="email" 
                            placeholder="Your email address" 
                            class="w-full bg-gray-800/70 backdrop-blur-sm text-white px-5 py-4 rounded-xl border border-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder-gray-500 transition-all duration-300 hover:border-gray-600"
                            required
                            >
                            <i class="fas fa-envelope absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                        <button 
                            type="submit" 
                            class="relative overflow-hidden bg-gradient-to-r from-primary to-blue-500 hover:from-blue-500 hover:to-primary text-white font-semibold py-4 px-6 rounded-xl transition-all duration-500 hover:shadow-lg hover:shadow-primary/20 group"
                        >
                            <span class="relative z-10 flex items-center justify-center">
                            Subscribe
                            <i class="fas fa-paper-plane ml-3 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </span>
                            <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                        </button>
                        </form>
                    </div>
                    </div>
                    
                    <!-- Bottom Bar -->
                    <div class="border-t border-gray-800 pt-10 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 mb-6 md:mb-0 text-center md:text-left">
                        © 2025 <span class="text-primary">DigitalCreative</span>. All rights reserved.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                        <a href="Privacy.php" class="footer-legal-link hover:text-primary">
                        Privacy Policy
                        </a>
                        <a href="terms" class="footer-legal-link hover:text-blue-400">
                        Terms of Service
                        </a>
                        <a href="#" class="footer-legal-link hover:text-purple-400">
                        Cookies
                        </a>
                        <a href="#" class="footer-legal-link hover:text-green-400">
                        Sitemap
                        </a>
                    </div>
                    </div>
                </div>
                </footer>

                <script src="main.js"></script>
                <script src="https://cdn.tailwindcss.com"></script>
                <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
        </body>
        </html>
