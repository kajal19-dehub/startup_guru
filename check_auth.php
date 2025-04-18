<?php
session_start();

header('Content-Type: application/json');

$response = [
    'authenticated' => false,
    'user' => null
];

if (isset($_SESSION['user_id'])) {
    // Database configuration
    $host = 'localhost';
    $dbname = 'startupguru';
    $username = 'root';
    $password = '';

    try {
        // Connect to database
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get user data
        $stmt = $pdo->prepare("SELECT id, username, email FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $user = $stmt->fetch();

        if ($user) {
            $response['authenticated'] = true;
            $response['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email']
            ];
        }
    } catch(PDOException $e) {
        // Log error if needed
    }
}

echo json_encode($response);
?>