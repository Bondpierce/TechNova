<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../script/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $category_color = $_POST['category_color'];
    $category_name = $_POST['category_name'];
    $tags = $_POST['tags'];
    
    // Handle file upload
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }
    
    // Check file size (5MB max)
    if ($_FILES["image"]["size"] > 5000000) {
        die("Sorry, your file is too large.");
    }
    
    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }
    
    // Create unique filename
    $new_filename = uniqid() . '.' . $imageFileType;
    $target_path = $target_dir . $new_filename;
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_path)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO projects (title, description, category, category_color, category_name, image_path, tags) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$title, $description, $category, $category_color, $category_name, $target_path, $tags]);
            
            header("Location: ../projects.php?success=1");
            exit;
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    } else {
        die("Sorry, there was an error uploading your file.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Add New Project</h1>
        
        <form action="add_project.php" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Project Title</label>
                <input type="text" id="title" name="title" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="description" name="description" rows="3" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label for="category" class="block text-gray-700 font-medium mb-2">Category (short)</label>
                    <input type="text" id="category" name="category" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="category_color" class="block text-gray-700 font-medium mb-2">Category Color</label>
                    <select id="category_color" name="category_color" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                        <option value="green">Green</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                        <option value="indigo">Indigo</option>
                    </select>
                </div>
                
                <!-- <div>
                    <label for="category_name" class="block text-gray-700 font-medium mb-2">Category Name (long)</label>
                    <input type="text" id="category_name" name="category_name" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div> -->
            </div>
            
            <div class="mb-4">
                <label for="tags" class="block text-gray-700 font-medium mb-2">Tags (comma separated)</label>
                <input type="text" id="tags" name="tags" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="React, Node.js, MongoDB">
            </div>
            
            <div class="mb-6">
                <label for="image" class="block text-gray-700 font-medium mb-2">Project Image</label>
                <input type="file" id="image" name="image" accept="image/*" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">Add Project</button>
        </form>
    </div>
</body>
</html>