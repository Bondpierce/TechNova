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