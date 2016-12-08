<html>

<head>

  <title>Aliens Abducted Me!!!</title>

</head>

<body>

  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$when_it_happened = $_POST['whenithappened'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];

  // $to = 'shultis@zurka.com';
  // $subject = 'Aliens Abducted me!!!1!!1!';
  // $msg = "$name was abducted $whenithappened and was gone for $howlong.\n" .
  //   "Number of aliens: $howmany.\n" .
  //   "What they did: $whattheydid.\n" .
  //   "Fang spotted? $fangspotted.\n" .
  //   "Other comments: $other";
  // mail($to, $subject, $msg, 'From:' . $email);
$dbc = mysqli_connect ('127.0.0.1', 'homestead', 'secret', 'aliendatabase') or die('Ur Moms Pizza');

$query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, " .
  "how_many, alien_description, what_they_did, fang_spotted, other, email) " .
  "VALUES ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', " .
  "'$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

  $result = mysqli_query($dbc, $query)
    or die('Ur Moms Pizza had an error connecting');

  mysqli_close($dbc);
  // $to = 'shultis@zurka.com';
  // $subject = 'Aliens Abducted Me - Abduction Report';
  // $msg = "$name was abducted $whenithappened and was gone for $howlong.\n" .
  //   "Number of aliens: $howmany\n" .
  //   "What they did: $whattheydid\n" .
  //   "Fang spotted: $fangspotted\n" .
  //   "Other comments: $other";
  // mail($to, $subject, $msg, 'From:' . $email);
  //
  // echo 'Thanks for submitting the form!<br />';
  // echo 'You were abducted '. $whenithappened;
  // echo ' and were gone for ' . $howlong . '<br />';
  // echo 'Number of aliens: ' . $howmany . '<br />';
  // echo 'Your description: ' . $aliendescription . '<br />';
  // echo 'The aliens did this: ' . $whattheydid . '<br />';
  // echo 'Was fang there? ' . $fangspotted . '<br />';
  // echo 'Other comments: ' . $other . '<br />';
  // echo 'Your email address: ' . $email;
 ?>
</body>
</html>
