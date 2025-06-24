<?php
// Start session
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

// Include database configuration
require_once 'script/config.php';

// Check if user is logged in
$isLoggedIn = isset($_SESSION['user_id']);

// Check if user is already subscribed
$isSubscribed = false;
$clientIP = getClientIP();

if (!$isLoggedIn) {
    try {
        // Check by IP
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE ip_address = :ip AND is_active = 1");
        $stmt->execute(['ip' => $clientIP]);
        $ipCount = $stmt->fetchColumn();
        
        // If no IP match, check by email if available
        $userEmail = $_SESSION['user_email'] ?? $_COOKIE['user_email'] ?? null;
        if ($userEmail) {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM subscribers WHERE email = :email AND is_active = 1");
            $stmt->execute(['email' => $userEmail]);
            $emailCount = $stmt->fetchColumn();
        }
        
        $isSubscribed = ($ipCount > 0) || (isset($emailCount) && $emailCount > 0);
    } catch (PDOException $e) {
        // Log error but don't show to user
        error_log("Subscription check error: " . $e->getMessage());
    }
}
?>

<!-- footer.php -->
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
                <a href="index.php#Home" class="footer-link before:bg-primary">
                <i class="fas fa-chevron-right text-xs mr-2 text-primary"></i>
                Home
                </a>
            </li>
            <li>
                <a href="index.php#Services" class="footer-link before:bg-blue-400">
                <i class="fas fa-chevron-right text-xs mr-2 text-blue-400"></i>
                Services
                </a>
            </li>
            <li>
                <a href="our_portfolio.php" class="footer-link before:bg-purple-400">
                <i class="fas fa-chevron-right text-xs mr-2 text-purple-400"></i>
                Portfolio
                </a>
            </li>
            <li>
                <a href="index.php#About" class="footer-link before:bg-green-400">
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
<?php if ($isLoggedIn || $isSubscribed): ?>
            <div class="bg-blue-900/20 border border-blue-800 rounded-lg p-4 text-center">
                <p class="text-blue-300">
                    <?php 
                    echo $isLoggedIn 
                        ? "You're receiving updates as a registered user." 
                        : "You're already subscribed to our newsletter!";
                    ?>
                </p>
            </div>
        <?php else: ?>
            <form id="newsletterForm" class="flex flex-col space-y-4">
                <div class="relative">
                    <input 
                        type="email" 
                        id="newsletterEmail"
                        name="email" 
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
                <input type="hidden" id="clientIP" value="<?php echo htmlspecialchars($clientIP); ?>">
            </form>
            <div id="subscriptionMessage" class="hidden mt-4 p-4 rounded-lg"></div>
        <?php endif; ?>
    </div>
        </div>
        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 pt-10 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-500 mb-6 md:mb-0 text-center md:text-left">
            © <?php echo date("Y"); ?> <span class="text-primary">TechNova</span>. All rights reserved.
        </p>
        <div class="flex flex-wrap justify-center gap-4 md:gap-6">
            <a href="privacy.php" class="footer-legal-link hover:text-primary">
            Privacy Policy
            </a>
            <a href="terms.php" class="footer-legal-link hover:text-blue-400">
            Terms of Service
            </a>
            <a href="cookies.php" class="footer-legal-link hover:text-purple-400">
            Cookies
            </a>
            <a href="sitemap.php" class="footer-legal-link hover:text-green-400">
            Sitemap
            </a>
        </div>
        </div>
    </div>
</footer>

<style>
    .social-icon {
        @apply w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center text-gray-400 transition-all duration-300;
        @apply hover:text-white hover:shadow-lg;
    }
    
    .footer-link {
        @apply relative flex items-center text-gray-400 hover:text-white transition-colors duration-300;
        @apply before:content-[''] before:absolute before:-left-1 before:top-1/2 before:-translate-y-1/2;
        @apply before:w-1 before:h-1 before:rounded-full before:opacity-0 before:transition-all before:duration-300;
        @apply hover:before:opacity-100 hover:before:-left-3;
    }
    
    .footer-legal-link {
        @apply text-sm text-gray-500 transition-colors duration-300;
    }
</style>
<script>
document.getElementById('newsletterForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const email = form.email.value;
    const ip = document.getElementById('clientIP').value;
    const messageDiv = document.getElementById('subscriptionMessage');
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.innerHTML = `
        <span class="relative z-10 flex items-center justify-center">
            Processing...
            <i class="fas fa-spinner fa-spin ml-3"></i>
        </span>
    `;
    
    // AJAX request
    fetch('subscribe.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `email=${encodeURIComponent(email)}&ip=${encodeURIComponent(ip)}`
    })
    .then(response => response.json())
    .then(data => {
        messageDiv.classList.remove('hidden');
        
        if (data.success) {
            messageDiv.className = 'bg-green-900/20 border border-green-800 text-green-300 mt-4 p-4 rounded-lg';
            messageDiv.textContent = data.message;
            form.classList.add('hidden');
            
            // Set cookie to remember subscription
            document.cookie = `subscribed=true; max-age=${60*60*24*30}; path=/`;
        } else {
            messageDiv.className = 'bg-red-900/20 border border-red-800 text-red-300 mt-4 p-4 rounded-lg';
            messageDiv.textContent = data.message;
        }
    })
    .catch(error => {
        messageDiv.classList.remove('hidden');
        messageDiv.className = 'bg-red-900/20 border border-red-800 text-red-300 mt-4 p-4 rounded-lg';
        messageDiv.textContent = 'An error occurred. Please try again later.';
        console.error('Error:', error);
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = `
            <span class="relative z-10 flex items-center justify-center">
                Subscribe
                <i class="fas fa-paper-plane ml-3 transition-transform duration-300 group-hover:translate-x-1"></i>
            </span>
            <span class="absolute inset-0 bg-gradient-to-r from-blue-500 to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
        `;
    });
});
</script>