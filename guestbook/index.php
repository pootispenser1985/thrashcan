<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://www.thrashcan.net/includes/jquery-3.1.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" type="text/css" href="http://www.thrashcan.net/main.css?version=82">
  <link rel="shortcut icon" href="http://thrashcan.net/pics/dogturd-transparent.png">
  <title>THRASHCAN</title>
</head>
<body>
  <div class="container">
    <nav class="row">
      <div class="col-xs-3 col-md-2"><a href="/guestbook/index.php">Guestbook</a></div>
      <div class="col-md-2 hidden-xs hidden-sm"><a href="#">Placeholder</a></div>
      <div class="col-xs-3 col-md-2"><a href="/pics/pics.html">Pictures</a></div>
      <div class="col-xs-6 col-md-2 col-md-offset-4"><a href="http://www.thrashcan.net">Thrash</a>
        <img src="/pics/dogturd.png"></div>
    </nav>
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
        <form id="guestbook-form" role="form">
          <span id="msgSubmit"></span>
          <textarea class="form-control" id="comment-text" name="comment"
            placeholder="Leave a comment! Only one per IP, please." rows=4></textarea>
          <input class="btn btn-primary" id="submit-button" type="submit" value="submit"></input>

        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2" id="comment-feed">
        <?php
          include 'getfeed.php';
        ?>
      </div>
    </div>
  </div>
</body>
<script src="submitter.js?v=33"></script>
</html>
