<?php
$host = "YOUR_DB_PRIVATE_IP";  // replace later with private EC2 IP
$user = "root";
$pass = "";
$db = "microblog";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
