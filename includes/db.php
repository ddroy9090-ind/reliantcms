<?php
//Simple PDO connection helper
// $dsn = getenv('DB_DSN') ?: 'mysql:host=localhost;dbname=drel;charset=utf8mb4';
// $user = getenv('DB_USER') ?: 'root';
// $pass = getenv('DB_PASS') ?: 'India@123';
// $options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// ];


$dsn = 'mysql:host=localhost;dbname=drel_main;charset=utf8mb4';
$user = 'root';
$pass = ''; // blank password
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('DB connection failed: ' . $e->getMessage());
}
?>
