<?php
header("Content-Type: application/json");

// Sample data
$users = [
    1 => ["name" => "Alice Smith", "age" => 20, "role" => "Web Developer"],
    2 => ["name" => "Bob Johnson", "age" => 21, "role" => "UI/UX Designer"],
    3 => ["name" => "Charlie Brown", "age" => 19, "role" => "System Architect"]
];

// Get ID safely
$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(["error" => "Please enter a User ID"]);
    exit;
}

// Check if user exists
if (array_key_exists($id, $users)) {
    echo json_encode($users[$id]);
} else {
    echo json_encode(["error" => "User not found"]);
}
?>