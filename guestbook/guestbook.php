<!DOCTYPE html>
<html>
<head><title>Guestbook!</title></head>
<body>
  SIGN THE FUCKING GUESTBOOK. DO IT NOW.

  Prior Blerbz:

  <?php
    $db = new SQLite3("comments.db");
    $query = "SELECT * FROM comments";
    $result = $db->query($query);
    $row = $result->fetchArray();

    echo $row[1]." ".$row[2];

   ?>
</body>
</html>
