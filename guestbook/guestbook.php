<!DOCTYPE html>
<html>
<head>
  <title>Guestbook!</title>
  <link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
  <div id="container">

    <div id="menu">
      <ul>
        <li><a href="flashcards/flashcards.php">Flashcard Thingy</a></li>
        <li><a href="guestbook/guestbook.php">Guestbook</a></li>
        <li><a href="#">Placeholder Two</a></li>
      </ul>
    </div>
    <h1>SIGN THE FUCKING GUESTBOOK. DO IT NOW.</h1>

    <p>Prior Blerbz:</p>






    <?php
      $db = new SQLite3("comments.db");
      $query = "SELECT * FROM comments";
      $result = $db->query($query);
      $row = $result->fetchArray();

      echo $row[1]." ".$row[2];

   ?>
  </div>
</body>
</html>
