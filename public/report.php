<html>

<head>

  <title>Aliens Abducted Me - Report an Abduction</title>

</head>

<body>

  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
  $when_it_happened = $_POST['whenithappened'];
  $how_long = $_POST['howlong'];
  $aliendescription = $_POST['aliendescription'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];

  echo 'Thanks for submitting the form!<br />';
  echo 'You were abducted '. $when_it_happened;
  echo ' and were gone for ' . $how_long . '<br />';
  echo 'Your description: ' . $aliendescription . '<br />';
  echo 'Was fang there? ' . $fang_spotted . '<br />';
  echo 'Your email address: ' . $email;
 ?>
</body>
</html>
