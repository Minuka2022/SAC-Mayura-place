<?php
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed']));
}

$result = $conn->query("SELECT COUNT(*) as donor_count, SUM(bricks_donated) as total_bricks FROM donors");
$data = $result->fetch_assoc();
$total_bricks_goal = 100000;

$response = [
    'donor_count' => $data['donor_count'],
    'total_bricks' => $data['total_bricks'],
    'total_amount' => $data['total_bricks'] * 1000,
    'remaining_bricks' => $total_bricks_goal - $data['total_bricks'],
];

echo json_encode($response);
?>
