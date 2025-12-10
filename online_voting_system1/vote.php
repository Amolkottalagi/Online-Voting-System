<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("You must be logged in to vote.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $candidate_name = $_POST['candidate'];

    $stmt = $conn->prepare("INSERT INTO votes (user_id, candidate_name) VALUES (:user_id, :candidate_name)");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':candidate_name', $candidate_name);

    if ($stmt->execute()) {
        echo "Vote submitted successfully!";
    } else {
        echo "Error submitting vote.";
    }
}
?>