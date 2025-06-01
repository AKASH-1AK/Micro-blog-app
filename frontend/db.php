<?php
$host = "10.0.2.161";  // replace later with private EC2 IP
$user = "root";
$pass = "";
$db = "microblog";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
