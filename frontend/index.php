<?php include 'db.php'; ?>
<html>
<head><title>Micro-Blog</title></head>
<body>
  <h1>📝 Micro-Blog Feed</h1>
  <form action="post.php" method="post">
    <textarea name="content" rows="3" cols="40" placeholder="Type your post..." required></textarea><br>
    <button type="submit">Post</button>
  </form>
  <h2>Recent Posts:</h2>
  <ul>
    <?php
    $res = $conn->query("SELECT content, created_at FROM posts ORDER BY created_at DESC");
    while ($row = $res->fetch_assoc()) {
      echo "<li><strong>{$row['created_at']}:</strong> {$row['content']}</li>";
    }
    ?>
  </ul>
</body>
</html>
