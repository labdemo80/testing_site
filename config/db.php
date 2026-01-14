<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'feelinggood');
define('DB_USER', 'root');     // Change to your DB user
define('DB_PASS', '');        // Change to your DB password

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed.");
}
?>