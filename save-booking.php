<?php
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

$name    = $_POST['name'] ?? '';
$email   = $_POST['email'] ?? '';
$phone   = $_POST['phone'] ?? '';
$program = $_POST['program'] ?? '';
$mode    = $_POST['mode'] ?? '';
$fee     = intval($_POST['fee'] ?? 0);

$stmt = $conn->prepare(
    "INSERT INTO bookings (name, email, phone, program, mode, fee)
     VALUES (?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssssi", $name, $email, $phone, $program, $mode, $fee);
$stmt->execute();

$stmt->close();
$conn->close();

http_response_code(200);
