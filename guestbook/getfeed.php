<?php
  include '/home/thrashca/etc/guestbook.php';
  $db = new mysqli('localhost', $sqlUser, $sqlPass, 'thrashca_guestbook');
  $query = "SELECT `id`, `ip`, `time`, `content` FROM posts ORDER BY id DESC LIMIT 12;";
  $result = $db->query($query);
  while (2 < 5) {
    $line = $result->fetch_array();
    if ($line == NULL) {break;}
    echo "<p>".$line['time']."  ".$line['ip'];
    echo "<br>".$line['content']."</p>";
  }
?>
