<?php
// script/db.php

function getDBConnection() {
    $db_host = 'localhost';
    $db_user = 'root';      // Default XAMPP username
    $db_pass = '';          // Default XAMPP password
    $db_name = 'tech_stack_db';
    
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Create tables if they don't exist
    $conn->query("CREATE TABLE IF NOT EXISTS contact_submissions (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(200) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        is_processed BOOLEAN DEFAULT FALSE
    )");
    
    return $conn;
}