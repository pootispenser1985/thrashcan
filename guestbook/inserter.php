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
    echo "success"; //if the user's ip address isn't in the db, allow the comment
  }
  else {
    echo "repost";
    /*
    echo "You've been here before! Discarding your comment
    (so that there's not an assload of comments)"; //if the user's ip address IS in the db, disallow the comment */
  }
?>
