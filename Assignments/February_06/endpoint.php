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
  echo 'Email Address:'.$_POST["EmailAddress"].'<br>';
  echo 'Telephone Number:'.$_POST["TelephoneNumber"].'<br>';
  echo 'Comments:'.$_POST["Comments"];
  ?>
