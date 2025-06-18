<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova | Elite Web Development & Design Agency</title>
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

    <!-- Hero Section -->
   <section id="home" class="min-h-screen flex items-center bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-fade-in">
                <!-- Trust indicator (more subtle) -->
                <div class="inline-flex items-center bg-gray-100 dark:bg-gray-800 px-4 py-2 rounded-full mb-8">
                    <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Trusted by 150+ enterprises worldwide</span>
                </div>

                <!-- Headline -->
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 dark:text-white leading-tight">
                    <span>Strategic Digital Solutions for </span> 
                    <span class="text-blue-600 dark:text-blue-400">Modern Businesses</span>
                </h1>
                
                <!-- Subheadline -->
                <p class="text-xl font-normal mb-8 text-gray-600 dark:text-gray-300">
                    Expert-led technology services that drive measurable growth and digital transformation.
                </p>
                
                <!-- Description -->
                <p class="text-lg mb-10 text-gray-600 dark:text-gray-300 max-w-lg">
                    Our integrated approach combines technical excellence with business acumen to deliver solutions that align with your strategic objectives.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3.5 rounded-md transition-all font-medium text-center">
                        Contact Our Team
                    </a>
                    <a href="case_study.php" class="border border-gray-300 dark:border-gray-600 hover:border-blue-600 text-gray-800 dark:text-white hover:text-blue-600 px-8 py-3.5 rounded-md transition-all font-medium text-center">
                        View Case Studies
                    </a>
                </div>
                
                <!-- Trust indicators (more professional) -->
                <div class="flex flex-wrap items-center gap-6">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm font-medium">Enterprise-grade solutions</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-600 dark:text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm font-medium">Industry compliance</span>
                    </div>
                </div>
            </div>
            
            <!-- Image -->
            <div class="animate-slide-up">
                <div class="relative w-full h-96 rounded-xl overflow-hidden shadow-md border border-gray-200 dark:border-gray-700">
                    <img src="images/ai-nuclear-energy-future-innovation-disruptive-technology.jpg" 
                         alt="Business technology solutions" 
                         class="w-full h-full object-cover object-center"
                         loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30 to-transparent"></div>
                    <!-- Professional badge -->
                    <div class="absolute bottom-6 left-6 bg-white dark:bg-gray-800 p-3 rounded-lg shadow-sm max-w-xs">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full mr-2"></div>
                            <span class="text-sm font-medium">75+ Successful Implementations</span>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Across financial, healthcare, and enterprise sectors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- About Section -->
   <section id="about" class="py-5 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-7">About <span class="text-primary">TechNova</span></h2>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="images/group-multinational-busy-people-working-office.jpg" 
                     alt="Our Team" 
                     class="w-full h-auto rounded-2xl shadow-lg">
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-4">Who We Are</h3>
                <p class="mb-6 text-gray-600 dark:text-gray-300">We are a passionate digital agency with 5+ years of experience creating modern web solutions for businesses worldwide. Our team specializes in full-stack development, UX/UI design, and digital transformation strategies.</p>
                
                <div class="mb-8">
                    <h4 class="text-xl font-semibold mb-4">Our Expertise</h4>
                    <div class="space-y-4">
                        <div class="border-l-2 border-primary pl-4 py-1">
                            <h5 class="font-medium">Web Development</h5>
                            <p class="text-sm text-gray-500 dark:text-gray-400">React, Vue.js, Node.js, and responsive design</p>
                        </div>
                        <div class="border-l-2 border-primary pl-4 py-1">
                            <h5 class="font-medium">Digital Strategy</h5>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Growth-focused solutions tailored to your business</p>
                        </div>
                        <div class="border-l-2 border-primary pl-4 py-1">
                            <h5 class="font-medium">UX/UI Design</h5>
                            <p class="text-sm text-gray-500 dark:text-gray-400">User-centered design that converts visitors to customers</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-4">
                    <a href="our_portfolio.php" class="inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition">
                        Our Portfolio
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#" class="inline-flex items-center px-4 py-2 border border-primary text-primary rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                        Meet The Team
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Skills Section -->
  <section id="skills" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Our <span class="text-primary">Capabilities</span></h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">We combine technical expertise with creative problem-solving to deliver exceptional results</p>
        </div>
        
        <!-- Core Skills Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Technical Skills -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-code text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Technical Excellence</h3>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Modern Web Development</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Responsive UI/UX</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>API Integration</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Performance Optimization</span>
                    </li>
                </ul>
            </div>
            
            <!-- Creative Skills -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-paint-brush text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Creative Solutions</h3>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Brand Identity</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>User-Centered Design</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Interactive Experiences</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Visual Storytelling</span>
                    </li>
                </ul>
            </div>
            
            <!-- Strategy Skills -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Strategic Approach</h3>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Data-Driven Decisions</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Conversion Optimization</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Scalable Architecture</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check-circle text-primary mr-2"></i>
                        <span>Future-Proof Solutions</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Technology Stack -->
        <div class="py-16 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">Technologies</span>
            <h3 class="text-3xl md:text-4xl font-bold mb-12 text-gray-900 dark:text-white">Our <span class="text-blue-600 dark:text-blue-400">Technology Stack</span></h3>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <!-- Frontend -->
                <div class="tech-card group">
                    <div class="tech-icon bg-orange-50 dark:bg-gray-800 group-hover:bg-orange-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-html5 text-orange-500 group-hover:text-orange-600 text-3xl"></i>
                    </div>
                    <span class="tech-name">HTML5</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-50 dark:bg-gray-800 group-hover:bg-blue-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-css3-alt text-blue-500 group-hover:text-blue-600 text-3xl"></i>
                    </div>
                    <span class="tech-name">CSS3</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-yellow-50 dark:bg-gray-800 group-hover:bg-yellow-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-js text-yellow-500 group-hover:text-yellow-600 text-3xl"></i>
                    </div>
                    <span class="tech-name">JavaScript</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-100 dark:bg-gray-800 group-hover:bg-blue-200 dark:group-hover:bg-gray-700">
                        <i class="fab fa-react text-blue-600 group-hover:text-blue-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">React</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-green-50 dark:bg-gray-800 group-hover:bg-green-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-vuejs text-green-600 group-hover:text-green-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">Vue.js</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-pink-50 dark:bg-gray-800 group-hover:bg-pink-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-angular text-red-600 group-hover:text-red-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">Angular</span>
                </div>

                <!-- Backend -->
                <div class="tech-card group">
                    <div class="tech-icon bg-green-50 dark:bg-gray-800 group-hover:bg-green-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-node-js text-green-600 group-hover:text-green-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">Node.js</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-gray-100 dark:bg-gray-800 group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/django.svg" alt="Django" class="w-8 h-8">
                    </div>
                    <span class="tech-name">Django</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-yellow-50 dark:bg-gray-800 group-hover:bg-yellow-100 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel" class="w-8 h-8">
                    </div>
                    <span class="tech-name">Laravel</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-red-50 dark:bg-gray-800 group-hover:bg-red-100 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/ruby.svg" alt="Ruby" class="w-8 h-8">
                    </div>
                    <span class="tech-name">Ruby on Rails</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-50 dark:bg-gray-800 group-hover:bg-blue-100 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/python-5.svg" alt="Python" class="w-8 h-8">
                    </div>
                    <span class="tech-name">Python</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-purple-50 dark:bg-gray-800 group-hover:bg-purple-100 dark:group-hover:bg-gray-700">
                        <img src="images/net.png" alt=".NET" class="w-8 h-8">
                    </div>
                    <span class="tech-name">.NET Core</span>
                </div>

                <!-- Databases -->
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-50 dark:bg-gray-800 group-hover:bg-blue-100 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg" alt="MongoDB" class="w-8 h-8">
                    </div>
                    <span class="tech-name">MongoDB</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-100 dark:bg-gray-800 group-hover:bg-blue-200 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/postgresql.svg" alt="PostgreSQL" class="w-8 h-8">
                    </div>
                    <span class="tech-name">PostgreSQL</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-orange-50 dark:bg-gray-800 group-hover:bg-orange-100 dark:group-hover:bg-gray-700">
                        <img src="images/development+logo+mysql+icon-1320184807686758112.png" alt="MySQL" class="w-8 h-8">
                    </div>
                    <span class="tech-name">MySQL</span>
                </div>

                <!-- DevOps & Cloud -->
                <div class="tech-card group">
                    <div class="tech-icon bg-orange-50 dark:bg-gray-800 group-hover:bg-orange-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-aws text-orange-600 group-hover:text-orange-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">AWS</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-50 dark:bg-gray-800 group-hover:bg-blue-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-docker text-blue-600 group-hover:text-blue-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">Docker</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-blue-100 dark:bg-gray-800 group-hover:bg-blue-200 dark:group-hover:bg-gray-700">
                        <i class="fab fa-google text-blue-600 group-hover:text-blue-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">GCP</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-gray-100 dark:bg-gray-800 group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
                        <!-- <img src="" alt="Kubernetes" class="w-8 h-8"> -->

                        <img width="48" height="48" src="https://img.icons8.com/color/48/kubernetes.png" alt="kubernetes"/>
                    </div>
                    <span class="tech-name">Kubernetes</span>
                </div>

                <!-- Tools -->
                <div class="tech-card group">
                    <div class="tech-icon bg-orange-50 dark:bg-gray-800 group-hover:bg-orange-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-git-alt text-orange-600 group-hover:text-orange-700 text-3xl"></i>
                    </div>
                    <span class="tech-name">Git</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-purple-50 dark:bg-gray-800 group-hover:bg-purple-100 dark:group-hover:bg-gray-700">
                        <i class="fab fa-figma text-purple-500 group-hover:text-purple-600 text-3xl"></i>
                    </div>
                    <span class="tech-name">Figma</span>
                </div>
                <div class="tech-card group">
                    <div class="tech-icon bg-gray-100 dark:bg-gray-800 group-hover:bg-gray-200 dark:group-hover:bg-gray-700">
                        <img src="https://cdn.worldvectorlogo.com/logos/jira-1.svg" alt="Jira" class="w-8 h-8">
                    </div>
                    <span class="tech-name">Jira</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tech stack style -->

<style>
    .tech-card {
        @apply flex flex-col items-center p-4 rounded-xl transition-all duration-300 cursor-default;
        @apply hover:transform hover:-translate-y-2 hover:shadow-lg;
        @apply border border-gray-200 dark:border-gray-700 hover:border-blue-200 dark:hover:border-blue-800;
    }
    
    .tech-icon {
        @apply w-16 h-16 rounded-full flex items-center justify-center mb-3 transition-all duration-300;
        @apply shadow-sm;
    }
    
    .tech-name {
        @apply text-sm font-medium text-gray-700 dark:text-gray-300 transition-colors duration-300;
        @apply group-hover:text-blue-600 dark:group-hover:text-blue-400;
    }
</style>
</section>


    <!-- Projects Section -->
    
    <section id="projects" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">Portfolio</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured <span class="text-blue-600 dark:text-blue-400">Projects</span></h2>
            <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">Delivering innovative solutions across industries with measurable impact</p>
        </div>

        <!-- Project Grid -->
            <?php include 'projects.php'; ?>
        </div>
    </div>
</section>

    <!-- Contact Section -->
                <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">Let's Connect</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Get In <span class="text-blue-600 dark:text-blue-400">Touch</span></h2>
            <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">Have a project in mind or want to discuss potential collaboration? We'd love to hear from you.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden">
            <!-- Contact Information -->
            <div class="p-10 lg:p-12 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-gray-700 dark:to-gray-800">
                <div class="mb-10">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 relative inline-block">
                        Contact Information
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-blue-600 dark:bg-blue-400 rounded-full"></span>
                    </h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 p-3 bg-white dark:bg-gray-600 rounded-lg mr-5 group-hover:bg-blue-100 dark:group-hover:bg-gray-500 transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-1">Email Us</h4>
                                <a href="mailto:TechNova@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">TechNova@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 p-3 bg-white dark:bg-gray-600 rounded-lg mr-5 group-hover:bg-blue-100 dark:group-hover:bg-gray-500 transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-1">Call Us</h4>
                                <a href="tel:+2348065373055" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-300">+234 (806) 537-3055</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 p-3 bg-white dark:bg-gray-600 rounded-lg mr-5 group-hover:bg-blue-100 dark:group-hover:bg-gray-500 transition-all duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600 dark:text-blue-400 group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium text-gray-700 dark:text-gray-300 mb-1">Our Location</h4>
                                <p class="text-gray-600 dark:text-gray-400">Lagos State, Nigeria</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 relative inline-block">
                        Business Hours
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-blue-600 dark:bg-blue-400 rounded-full"></span>
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Monday - Friday</span>
                            <span class="text-gray-900 dark:text-white font-medium">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Saturday</span>
                            <span class="text-gray-900 dark:text-white font-medium">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Sunday</span>
                            <span class="text-gray-900 dark:text-white font-medium">Closed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="p-10 lg:p-12">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 relative inline-block">
                    Send Us a Message
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-blue-600 dark:bg-blue-400 rounded-full"></span>
                </h3>
                
                <form id="contactForm" class="space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name *</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                required 
                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400 dark:bg-gray-700 dark:text-white transition-all duration-200"
                placeholder="Your name">
            <p id="name-error" class="mt-1 text-sm text-red-600 hidden"></p>
        </div>
        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address *</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                required 
                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400 dark:bg-gray-700 dark:text-white transition-all duration-200"
                placeholder="your@email.com">
            <p id="email-error" class="mt-1 text-sm text-red-600 hidden"></p>
        </div>
    </div>
    
    <div>
        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Subject</label>
        <input 
            type="text" 
            id="subject" 
            name="subject" 
            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400 dark:bg-gray-700 dark:text-white transition-all duration-200"
            placeholder="How can we help?">
    </div>
    
    <div>
        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Message *</label>
        <textarea 
            id="message" 
            name="message" 
            rows="5" 
            required 
            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400 dark:bg-gray-700 dark:text-white transition-all duration-200"
            placeholder="Your message here..."></textarea>
        <p id="message-error" class="mt-1 text-sm text-red-600 hidden"></p>
    </div>
    
    <div id="form-message" class="hidden p-4 mb-4 text-sm rounded-lg"></div>
    
    <div>
        <button 
            type="submit" 
            id="submit-btn"
            class="w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800 text-white font-medium rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800">
            <span id="btn-text">Send Message</span>
            <span id="btn-spinner" class="hidden ml-2">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
            <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
                </form>
                    </div>
                </div>
            </div>
        </section>
                <!-- WhatsApp Button HTML -->

                <div id="whatsapp-btn" class="fixed bottom-8 right-8 z-50 animate-bounce hover:animate-none">
                <div class="relative group">

                    <!-- Main Button -->
                    <a href="https://wa.me/+2348065373055" 
                    class="w-16 h-16 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110">
                    <i class="fa-brands fa-whatsapp text-white text-3xl"></i>
                    </a>
                    
                    <!-- Pulsing Ring Effect -->
                    <div class="absolute inset-0 border-4 border-[#25D366] rounded-full opacity-0 group-hover:opacity-100 animate-ping transition-opacity duration-300"></div>
                    
                    <!-- Floating Tooltip -->
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 px-3 py-2 bg-gray-800 text-white text-sm rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                    Chat with us!
                    <div class="absolute top-1/2 right-0 w-2 h-2 bg-gray-800 transform translate-x-1/2 -translate-y-1/2 rotate-45"></div>
                    </div>
                </div>
                </div>

                <!-- Animation JavaScript -->
                    <script>
                // Add ripple effect on click
                document.getElementById('whatsapp-btn').addEventListener('click', function(e) {
                    if (e.target.closest('a')) {
                    const ripple = document.createElement('span');
                    ripple.className = 'absolute inset-0 bg-[#25D366] rounded-full animate-ripple';
                    this.querySelector('a').appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 1000);
                    }
                });
                </script>

                    <!-- Footer -->

             <footer class="bg-gradient-to-b from-gray-900 to-gray-800 text-white pt-20 pb-12 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-blue-600/10 blur-3xl"></div>
                <div class="absolute -top-10 -left-10 w-40 h-40 rounded-full bg-primary/10 blur-2xl"></div>
                
                <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                    
                    <!-- Agency Info -->
                    <div class="lg:col-span-2">
                        <a href="#" class="text-3xl font-bold flex items-center mb-6 group">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400 group-hover:from-blue-400 group-hover:to-primary transition-all duration-500">Tech</span>
                        <span class="text-white">Nova</span>
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
                        © 2025 <span class="text-primary">TechNova</span>. All rights reserved.
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


                    <!-- nav script -->
                        <script>
                    // Mobile menu toggle animation
                    document.getElementById('mobile-menu-button').addEventListener('click', function() {
                        const menu = document.getElementById('mobile-menu');
                        if (menu.classList.contains('hidden')) {
                            menu.classList.remove('hidden');
                            setTimeout(() => {
                                menu.classList.remove('scale-y-0');
                                menu.classList.add('scale-y-100');
                            }, 10);
                        } else {
                            menu.classList.add('scale-y-0');
                            setTimeout(() => {
                                menu.classList.add('hidden');
                            }, 300);
                        }
                    });
                </script>

                <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Reset error messages
    document.querySelectorAll('[id$="-error"]').forEach(el => {
        el.classList.add('hidden');
    });
    
    // Validate form
    let isValid = true;
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    
    if (!name) {
        document.getElementById('name-error').textContent = 'Name is required';
        document.getElementById('name-error').classList.remove('hidden');
        isValid = false;
    }
    
    if (!email) {
        document.getElementById('email-error').textContent = 'Email is required';
        document.getElementById('email-error').classList.remove('hidden');
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById('email-error').textContent = 'Please enter a valid email address';
        document.getElementById('email-error').classList.remove('hidden');
        isValid = false;
    }
    
    if (!message) {
        document.getElementById('message-error').textContent = 'Message is required';
        document.getElementById('message-error').classList.remove('hidden');
        isValid = false;
    }
    
    if (!isValid) return;
    
    // Show loading state
    const submitBtn = document.getElementById('submit-btn');
    submitBtn.disabled = true;
    document.getElementById('btn-text').classList.add('hidden');
    document.getElementById('btn-icon').classList.add('hidden');
    document.getElementById('btn-spinner').classList.remove('hidden');
    
    // Submit form via AJAX
    const formData = new FormData(this);
    const formMessage = document.getElementById('form-message');
    
    fetch('script/process_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.text();
    })
    .then(data => {
        formMessage.classList.remove('hidden');
        
        if (data.includes('Thank you')) {
            formMessage.textContent = data;
            formMessage.classList.add('bg-green-100', 'text-green-700', 'dark:bg-green-800', 'dark:text-green-200');
            document.getElementById('contactForm').reset();
        } else {
            formMessage.textContent = data;
            formMessage.classList.add('bg-red-100', 'text-red-700', 'dark:bg-red-800', 'dark:text-red-200');
        }
    })
    .catch(error => {
        formMessage.classList.remove('hidden');
        formMessage.textContent = 'There was an error submitting your form. Please try again.';
        formMessage.classList.add('bg-red-100', 'text-red-700', 'dark:bg-red-800', 'dark:text-red-200');
        console.error('Error:', error);
    })
    .finally(() => {
        // Reset button state
        submitBtn.disabled = false;
        document.getElementById('btn-text').classList.remove('hidden');
        document.getElementById('btn-icon').classList.remove('hidden');
        document.getElementById('btn-spinner').classList.add('hidden');
    });
});
</script>

                </body>
                </html>