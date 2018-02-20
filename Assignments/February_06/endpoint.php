<?php
session_start();
foreach ($_POST as $key => $value) {
      $_SESSION[$key] = $value;
  }
?>
<html>
  <head>
    <title>Confirmation Page</title>
  </head>
  <body>
    <p>
      <?php>
        echo 'Hi, ' . $_SESSION["Name"] . 'Thank you for submitting this form.'
      ?>
    </P>
    <p>Below is a summary of the information you provided</p>
  <?php
    echo 'Name:'.$_POST["Name"].'<br>';
    echo 'Email:'.$_POST["Email"].'<br>';
    echo 'Phone Number:'.$_POST["PhoneNumber"].'<br>';
    echo 'Comments:'.$_POST["Comments"];
  ?>
  </body>
</html>
