<?php
  include '/home/thrashca/etc/guestbook.php';
  $db = new mysqli('localhost', $sqlUser, $sqlPass, 'thrashca_guestbook');
  $comment = $_POST['comment'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $ipQuery = "SELECT * FROM posts WHERE `ip` = '".$ip."';";
  $insertQuery = "INSERT INTO posts (`ip`, `content`)
    VALUES ('".$ip."', '".$comment."');";
  $result = $db->query($ipQuery);
  if ($result->fetch_array() == NULL) {
    $db->query($insertQuery);
    echo "success";
  }
  else {
    echo "repost";
  }
?>
