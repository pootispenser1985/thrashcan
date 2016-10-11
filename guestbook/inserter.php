<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12./jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://www.thrashcan.net/main.css?version=63">
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
  <div class="row">
    <p class="col-sm-12 alertText">
      <?php
        include '/home/thrashca/etc/guestbook.php';
        $db = new mysqli('localhost', $sqlUser, $sqlPass, 'thrashca_guestbook');
        $comment = $_POST['comment'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $ipQuery = "SELECT * FROM posts WHERE `ip` = '".$ip."';";
        $insertQuery = "INSERT INTO posts (`ip`, `content`)
        VALUES ('".$ip."', '".$comment."');";

        $result = $db->query($ipQuery);

        if (($result->fetch_array()) == NULL) {
          echo "You haven't been here before (or your ip address hasn't, anyway). Thanks for the input!"; //if the user's ip address isn't in the db, allow the comment
          $db->query($insertQuery);
        }
        else {
          echo "You've been here before! Discarding your comment
          (so that there's not an assload of comments)"; //if the user's ip address IS in the db, disallow the comment
        }
      ?>
    <p>
  </div>
</div>
</body>
</html>
