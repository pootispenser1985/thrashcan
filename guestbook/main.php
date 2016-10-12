<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12./jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://www.thrashcan.net/main.css?version=80">
  <title>Guestbook</title>
</head>

<body>
<div class="container">
  <nav class="row">
    <div class="col-xs-3 col-md-2"><a href="/guestbook/main.php">Guestbook</a></div>
    <div class="col-md-2 hidden-xs hidden-sm"><a href="#">Placeholder</a></div>
    <div class="col-xs-3 col-md-2"><a href="/pics/pics.html">Pictures</a></div>
    <div class="col-xs-6 col-md-2 col-md-offset-4"><a href="http://www.thrashcan.net">Thrash</a>
      <img src="/pics/dogturd.png"></div>
  </nav>

  <div class="row"  id="comment-box">
    <form action="inserter.php" class="col-md-6 col-md-offset-3 form-group text-center" method="post">
      <textarea class="form-control" name="comment"
        placeholder="Leave a comment! Only one per IP, please." rows=4></textarea>
      <input class="btn btn-primary" type="submit" value="submit"></input>
    </form>
  </div>

  <?php
    include '/home/thrashca/etc/guestbook.php';
    $db = new mysqli('localhost', $sqlUser, $sqlPass, 'thrashca_guestbook');

    $query = "SELECT `id`, `ip`, `time`, `content` FROM posts ORDER BY id DESC LIMIT 12;";
    $result = $db->query($query);

    echo "<br><br>";
    while (2 < 5) {
      $line = $result->fetch_array();
      if ($line == NULL) {break;}

      echo "<p>".$line['time']."  ".$line['ip'];
      echo "<br>".$line['content']."</p>";
    }
  ?>
</div>
</body>

</html>
