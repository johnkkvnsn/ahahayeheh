<?php
session_start();
if (!isset($_SESSION["username"])) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Not logged in']);
    exit;
}

require_once '../database/db_connect.php';

header('Content-Type: application/json');

try {
    $username = $_SESSION["username"];
    
    // Get all quiz scores for the user
    $stmt = $conn->prepare("SELECT quiz_type, score, total_questions FROM quiz_scores WHERE username = ? ORDER BY created_at DESC");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $scores = [];
    while ($row = $result->fetch_assoc()) {
        $scores[$row['quiz_type']] = [
            'score' => (int)$row['score'],
            'total' => (int)$row['total_questions']
        ];
    }
    
    echo json_encode($scores);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

$stmt->close();
$conn->close();
?> 