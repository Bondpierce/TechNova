<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechNova | Digital Transformation Case Studies</title>

     <link href="favicon_io/android-chrome-192x192.png" rel="icon">

    <base target="_self">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@preline/preline@2.0.0/dist/preline.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite'
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
                            '50%': { transform: 'translateY(-10px)' }
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
        .social-icon {
            @apply w-12 h-12 rounded-full bg-gray-800 flex items-center justify-center text-gray-300 transition-all duration-300 transform hover:scale-110 shadow-lg;
        }
        .footer-link {
            @apply relative pl-6 text-gray-400 hover:text-white transition-colors duration-300 before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:w-2 before:h-2 before:rounded-full;
        }
        .footer-legal-link {
            @apply text-sm text-gray-500 hover:text-white transition-colors duration-300;
        }
    </style>
</head>

<body class="bg-light dark:bg-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation (Maintained from TechNova) -->
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


    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 animate-fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Digital Transformation</span>
                        <br>Success Stories
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        Discover how TechNova has helped industry leaders revolutionize their digital infrastructure, enhance customer experiences, and drive measurable business growth.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="index.php #contact" class="px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-all duration-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                            Contact Our Team
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-12 lg:mt-0 animate-float">
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 w-full h-full rounded-2xl border-4 border-primary/20 animate-pulse-slow"></div>
                        <div class="absolute -top-3 -left-3 w-full h-full rounded-2xl border-4 border-primary/30 animate-pulse-slow delay-1000"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             alt="Digital Transformation" 
                             class="relative z-10 w-full rounded-2xl shadow-2xl object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies Overview -->
    <section id="case-studies" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header with Animation -->
            <div class="text-center mb-16 animate-slide-up">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">
                    Our Work
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Client Success Stories
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">
                    Explore how we've helped organizations transform their digital capabilities and achieve measurable results.
                </p>
            </div>

            <!-- Case Study Grid with Staggered Animations -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Case Study 1 - Financial Services -->
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 transform hover:-translate-y-2 animate-fade-in" style="animation-delay: 100ms">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             alt="Financial Dashboard" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="inline-block w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">FINANCIAL SERVICES</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Global Banking Platform Modernization</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Transformed legacy systems into a cloud-native platform serving 5M+ customers with 99.99% uptime.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-blue-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span class="text-sm font-medium">42% efficiency gain</span>
                            </div>
                            <a href="#banking-case-study" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                                Read Case Study →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 - Healthcare -->
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 transform hover:-translate-y-2 animate-fade-in" style="animation-delay: 200ms">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             alt="Healthcare App" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="inline-block w-3 h-3 bg-green-600 rounded-full mr-2"></span>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">HEALTHCARE</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Patient Engagement Platform</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Developed HIPAA-compliant telehealth solution reducing appointment no-shows by 35%.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-green-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span class="text-sm font-medium">35% no-show reduction</span>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                                Read Case Study →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 - Retail -->
                <div class="bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 transform hover:-translate-y-2 animate-fade-in" style="animation-delay: 300ms">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" 
                             alt="Retail Analytics" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="inline-block w-3 h-3 bg-purple-600 rounded-full mr-2"></span>
                            <span class="text-sm font-medium text-gray-500 dark:text-gray-400">RETAIL</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Omnichannel Retail Transformation</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Integrated eCommerce and in-store systems resulting in 28% revenue growth.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-purple-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span class="text-sm font-medium">28% revenue growth</span>
                            </div>
                            <a href="#" class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                                Read Case Study →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button with Animation -->
            <div class="text-center mt-12 animate-fade-in" style="animation-delay: 500ms">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-gray-300 dark:border-gray-600 rounded-md text-base font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors transform hover:scale-105">
                    View All Case Studies
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed Case Study Example -->
    <section id="banking-case-study" class="py-20 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
        <div class="max-w-5xl mx-auto px-6 lg:px-8">
            <div class="mb-12 text-center animate-slide-up">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-6">FINANCIAL SERVICES</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Global Banking Platform Modernization</h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">How we helped a Fortune 500 bank transform their digital infrastructure</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="mb-10 rounded-xl overflow-hidden shadow-lg animate-fade-in">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" 
                             alt="Banking Platform" 
                             class="w-full h-auto object-cover hover:scale-105 transition-transform duration-500">
                    </div>

                    <div class="prose dark:prose-invert max-w-none">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 animate-fade-in">The Challenge</h3>
                        <p class="animate-fade-in" style="animation-delay: 100ms">The client, a multinational banking institution, was struggling with outdated legacy systems that couldn't scale with their growing customer base. Their platform experienced frequent downtime during peak hours and lacked modern security features, putting customer data at risk and limiting their ability to innovate.</p>

                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4 animate-fade-in" style="animation-delay: 200ms">Our Approach</h3>
                        <p class="animate-fade-in" style="animation-delay: 250ms">We implemented a phased modernization strategy that balanced innovation with stability:</p>
                        <ul class="animate-fade-in" style="animation-delay: 300ms">
                            <li>Comprehensive system audit and risk assessment to identify critical pain points</li>
                            <li>Gradual migration of core banking functions to cloud-native architecture</li>
                            <li>Implementation of microservices for better scalability and maintainability</li>
                            <li>Development of real-time fraud detection using machine learning algorithms</li>
                            <li>Creation of a seamless mobile experience with biometric authentication</li>
                            <li>Continuous integration/delivery pipeline for rapid feature deployment</li>
                        </ul>

                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mt-8 mb-4 animate-fade-in" style="animation-delay: 400ms">Results Delivered</h3>
                        <div class="grid sm:grid-cols-2 gap-6 mb-8 animate-fade-in" style="animation-delay: 450ms">
                            <div class="bg-gray-50 dark:bg-gray-800 p-5 rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">99.99%</div>
                                <p class="text-gray-600 dark:text-gray-300">Platform uptime (from 98.5% previously)</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 p-5 rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">42%</div>
                                <p class="text-gray-600 dark:text-gray-300">Operational efficiency gain</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 p-5 rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">5M+</div>
                                <p class="text-gray-600 dark:text-gray-300">Customers served without capacity issues</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-800 p-5 rounded-lg hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-2">78%</div>
                                <p class="text-gray-600 dark:text-gray-300">Faster transaction processing</p>
                            </div>
                        </div>

                        <blockquote class="border-l-4 border-blue-600 dark:border-blue-400 pl-6 py-2 my-8 italic text-gray-600 dark:text-gray-300 animate-fade-in" style="animation-delay: 500ms">
                            "TechNova's solution transformed our digital banking capabilities. Their strategic approach and technical expertise delivered results that exceeded our expectations. The new platform has become a competitive differentiator in our market."
                            <footer class="mt-4 font-medium text-gray-900 dark:text-white">— Chief Digital Officer, Global Bank</footer>
                        </blockquote>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 100ms">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Project Details</h4>
                        <div class="space-y-4">
                            <div>
                                <span class="block text-sm text-gray-500 dark:text-gray-400">Client</span>
                                <span class="font-medium">Fortune 500 Bank (Confidential)</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500 dark:text-gray-400">Industry</span>
                                <span class="font-medium">Financial Services</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500 dark:text-gray-400">Duration</span>
                                <span class="font-medium">18 Months (Phased Rollout)</span>
                            </div>
                            <div>
                                <span class="block text-sm text-gray-500 dark:text-gray-400">Technologies</span>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">AWS</span>
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Kubernetes</span>
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">React</span>
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Node.js</span>
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">TensorFlow</span>
                                    <span class="px-3 py-1 bg-gray-200 dark:bg-gray-700 rounded-full text-sm hover:bg-blue-100 dark:hover:bg-blue-900/30 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Docker</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 200ms">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Download Case Study</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Get the complete case study with detailed technical implementation and results.</p>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-md transition-all font-medium transform hover:-translate-y-1 shadow-md hover:shadow-lg">
                            Download PDF
                        </button>
                    </div>

                    <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-xl hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 300ms">
                        <h4 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Related Case Studies</h4>
                        <div class="space-y-4">
                            <a href="#" class="block group p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                <h5 class="font-medium text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Payment Processing System Upgrade</h5>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Increased transaction speed by 65%</p>
                            </a>
                            <a href="#" class="block group p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                                <h5 class="font-medium text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Wealth Management Platform</h5>
                                <p class="text-sm text-gray-600 dark:text-gray-300">Personalized investment solutions</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology Section -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 animate-slide-up">
                <span class="inline-block px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full text-sm font-medium mb-4">OUR PROCESS</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Proven Digital Transformation Methodology</h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">Our structured approach ensures successful outcomes for every engagement</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 100ms">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                        <span class="text-xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Discovery & Assessment</h3>
                    <p class="text-gray-600 dark:text-gray-300">Comprehensive analysis of current systems, pain points, and business objectives to define success metrics.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 200ms">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                        <span class="text-xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Strategy & Roadmap</h3>
                    <p class="text-gray-600 dark:text-gray-300">Development of phased implementation plan with clear milestones and technology recommendations.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 300ms">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                        <span class="text-xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Implementation</h3>
                    <p class="text-gray-600 dark:text-gray-300">Agile development with continuous integration and regular stakeholder reviews.</p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 animate-fade-in" style="animation-delay: 400ms">
                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center text-blue-600 dark:text-blue-400 mb-4">
                        <span class="text-xl font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">Optimization</h3>
                    <p class="text-gray-600 dark:text-gray-300">Performance monitoring, user feedback analysis, and iterative improvements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div class="animate-fade-in">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Business?</h2>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">Let's discuss how TechNova can help you achieve similar results for your organization.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#contact" class="px-8 py-4 bg-white text-primary font-bold rounded-lg shadow-lg hover:bg-gray-100 transition-colors duration-300 transform hover:scale-105">
                        Contact Our Team
                    </a>
                    <a href="#" class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors duration-300 transform hover:scale-105">
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </section>

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
                    <a href="#home" class="footer-link before:bg-primary">
                    <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                    Home
                    </a>
                </li>
                <li>
                    <a href="#case-studies" class="footer-link before:bg-blue-400">
                    <i class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i>
                    Case Studies
                    </a>
                </li>
                <li>
                    <a href="#services" class="footer-link before:bg-purple-400">
                    <i class="fas fa-chevron-right text-xs mr-2 text-purple-400"></i>
                    Services
                    </a>
                </li>
                <li>
                    <a href="#about" class="footer-link before:bg-green-400">
                    <i class="fas fa-chevron-right text-xs mr-2 text-green-400"></i>
                    About Us
                    </a>
                </li>
                <li>
                    <a href="#contact" class="footer-link before:bg-yellow-400">
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
                <a href="privacy.php" class="footer-legal-link hover:text-primary">
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

    <script>
        // Mobile menu toggle
        
        // Handle nav link clicks (for active state)

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in', 'animate-slide-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('[class*="animate-"]').forEach(element => {
            observer.observe(element);
        });
    </script>

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