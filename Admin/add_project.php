<?php include '../script/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Success Notification (shown when ?success=1 is in URL) -->
        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
                <div class="flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <p>Project added successfully!</p>
                </div>
            </div>
        <?php endif; ?>

        <h1 class="text-3xl font-bold mb-8">Our Projects</h1>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            try {
                $stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
                while ($project = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $tags = explode(',', $project['tags']);
            ?>
            <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700">
                <div class="relative h-48 overflow-hidden">
                    <img src="<?php echo htmlspecialchars($project['image_path']); ?>" 
                         alt="<?php echo htmlspecialchars($project['title']); ?>" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-transparent"></div>
                    <span class="absolute top-4 right-4 bg-<?php echo htmlspecialchars($project['category_color']); ?>-600 text-white text-xs px-3 py-1 rounded-full">
                        <?php echo htmlspecialchars($project['category']); ?>
                    </span>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3">
                        <span class="w-3 h-3 bg-<?php echo htmlspecialchars($project['category_color']); ?>-600 rounded-full mr-2"></span>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                            <?php echo htmlspecialchars($project['category_name']); ?>
                        </span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                        <?php echo htmlspecialchars($project['title']); ?>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        <?php echo htmlspecialchars($project['description']); ?>
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <?php foreach ($tags as $tag): ?>
                            <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded">
                                <?php echo htmlspecialchars(trim($tag)); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                        View Project
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <?php
                }
            } catch (PDOException $e) {
                echo "<div class='bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6'>Error fetching projects: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
            ?>
        </div>
    </div>

    <script>
        // Auto-hide success message after 5 seconds
        setTimeout(() => {
            const successMsg = document.querySelector('.bg-green-100');
            if (successMsg) {
                successMsg.style.opacity = '0';
                setTimeout(() => successMsg.remove(), 500);
            }
        }, 5000);
    </script>
</body>
</html>