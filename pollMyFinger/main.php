<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="poll.css?version=33" />
</head>
<body>
<h1>Here's a Question</h1>

<form action="vote.php" method="post">
 <ul id="mult-choice">
  <li>A <input type="radio" name="A"></li>
  <li>B <input type="radio" name="B"></li>
  <li>C <input type="radio" name="C"></li>
  <li>D <input type="radio" name="D"></li>
 </ul>
  <?php
  //connect to db

  include '/home/thrashca/etc/pollMyFinger.php';
  $ip = $_SERVER['REMOTE_ADDR'];
  $db = new mysqli('localhost', $sqlUser, $sqlPass, 'thrashca_surveys');
  $vote = A;

  //first, figure out if the user has submitted for this survey before 

  $ipQuery = "SELECT * FROM responses WHERE ip_address = '".$ip."'";
  $ipResult = $db->query($ipQuery);

  if ($ipResult->fetch_array()[0] == NULL) {
   echo "your ip address, ".$ip.", is not in the db";
  }
  else { echo "your ip, ".$ip.", is in the db"; }

  //$insertQuery = "INSERT INTO responses (ip_address, vote) VALUES ('".$ip."', '".$vote."')";	
  //var_dump($db->query($insertQuery));

  echo "<BR>".$sql;
  
  ?>
</form>
</body>
</html>
