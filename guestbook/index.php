<!-- Guestbook -->
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
  <link rel="stylesheet" type="text/css" href="http://www.thrashcan.net/main.css?version=88">
  <link rel="shortcut icon" href="http://thrashcan.net/pics/dogturd-transparent.png">
  <title>THRASHCAN</title>
</head>
<body>
  <div class="container">
    <?php include '../includes/navbar.html'; ?>
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center" id="comment-box">
        <form id="guestbook-form" role="form">
          <span id="msgSubmit">placeholder</span>
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
<script src="submitter.js"></script>
</html>
