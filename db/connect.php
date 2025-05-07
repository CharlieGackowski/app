<?php
$host = 'localhost';
$db   = 'admin_'; // Replace with your actual database name
$user = 'grouptab_admin';     // Replace with your actual database username
$pass = 'r+zBO1:5shU0@Q@x*U7A#';     // Replace with your actual database password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     http_response_code(500);
     echo json_encode(['error' => 'Database connection failed']);
     exit;
}
?>
