<html>
  <head>
    <title>Confirmation Page</title>
  </head>
  <body>
    <p>Thank you for submitting this form</p>
    <p>Below is a summary of the information you provided</p>
  </body>
  <?php
  echo 'Name:'.$_POST["Name"].'<br>';
  echo 'Email:'.$_POST["Email"].'<br>';
  echo 'Phone Number:'.$_POST["PhoneNumber"].'<br>';
  echo 'Comments:'.$_POST["Comments"];
  ?>
