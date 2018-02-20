<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
  </head>
    <body>
      <fieldset>
      <legend>Contact information</legend>
      <form action="endpoint.php" method="post">
        <P>Name:
          <input type="text" name="Name" id="Name" size="15" placeholder="Name..." value="<?php echo (isset($_SESSION['Name']) ? $_SESSION['Name'] : null); ?>"/>
        </p>
        <p>Email:
          <input type="email" name="Email" id="Email" size="30" placeholder="Email..." value="<?php echo (isset($_SESSION['Email']) ? $_SESSION['Email'] : null); ?>" />
        </p>
        <p>Phone Number:
          <input type="tel" name="PhoneNumber" id="PhoneNumber" size="15" maxlength="10" placeholder="Phone Number..." />
        </p>
        <p>Comments:
          <textarea name="Comments" id="Comments" cols="20" rows="4"><?php echo (isset($_SESSION['Comments']) ? $_SESSION['Comments'] : "Enter your comments..."); ?></textarea>
        </p>
        <p>
          <input type="Submit" value="Submit" />
        </p>
      </form>
    </fieldset>
    </body>
</html>
