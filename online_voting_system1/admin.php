<?php
include 'db.php';

$stmt = $conn->prepare("SELECT candidate_name, COUNT(*) as vote_count FROM votes GROUP BY candidate_name");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
?>