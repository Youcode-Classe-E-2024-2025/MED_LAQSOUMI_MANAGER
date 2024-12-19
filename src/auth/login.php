<?php
// Start session
session_start();

// Include database connection
require('../config/db_config.php'); // Ensure this file sets up the $conn variable using MySQLi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    try {
        // Prepare SQL statement
        $stmt = $conn->prepare("SELECT id, nom, mot_de_passe, role, statut, archived FROM users WHERE email = ?");
        $stmt->bind_param("s", $email); // "s" denotes a string parameter
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch the user record
        if ($user = $result->fetch_assoc()) {

            // Create session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['role'] = $user['role'];
            if ($user['role'] === 'admin') {
                header("Location: ../../dashboard.php");
            } else {
                header("Location: ../../reservation.php");
            }
            exit();
        }
    } catch (Exception $e) {
        header("Location: login.php?error=server_error");
        exit();
    }
}
?>
