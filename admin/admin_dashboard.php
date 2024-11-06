<?php
session_start();
require '../includes/db_connect.php';

// Check if user is admin
if ($_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin</h1>
    <!-- Include subject and timetable management functionalities here -->
</body>
</html>
