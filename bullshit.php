<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://www.thrashcan.net/includes/jquery-3.1.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Permanent Marker">
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" type="text/css" href="main.css?version=80">
  <link rel="shortcut icon" href="http://thrashcan.net/pics/dogturd-transparent.png">
  <script src="http://code.onion.com/fartscroll.js"></script>
  <title>Ain't that some shit?</title>
</head>
<body>
  <div class="container">
    <?php include 'includes/navbar.html'; ?>
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <h3>Javascript fart library courtesy of The Onion</h3>
        <p><a href="http://theonion.github.io/fartscroll.js/">http://theonion.github.io/fartscroll.js/</a>
        <?php
        $i = 0;


        while ($i < 100) {
          $j = rand(0, 300);
          print '<p style="margin-left: '.$j.'px;">Here is some sample text.</p>';
          $i = $i + 1;
        }
        ?>
        <script type="text/javascript">
          fartscroll();
        </script>
      </div>
    </div>
  </div>
</body>
