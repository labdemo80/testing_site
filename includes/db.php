<?php
$conn = new mysqli("localhost", "root", "", "db_name");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
