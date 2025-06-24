<?php 
include 'script/config.php'; ?>

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
            <!-- <a href="#" class="inline-flex items-center text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors">
                View Project
                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a> -->
        </div>
    </div>
    <?php
        }
    } catch (PDOException $e) {
        echo "Error fetching projects: " . $e->getMessage();
    }
    ?>
</div>
