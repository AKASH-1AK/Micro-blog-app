<?php
include 'db.php';
$content = $_POST['content'];
$stmt = $conn->prepare("INSERT INTO posts (content) VALUES (?)");
$stmt->bind_param("s", $content);
$stmt->execute();
header("Location: index.php");
?>
