<!DOCTYPE html>
<html>
  <head>
    <body>
      <fieldset>
      <legend>Contact information</legend>
      <form action="endpoint.php" method="post">
        <P>Name:
          <input type="text" name="Name" size="15" placeholder="Name..." />
        </p>
        <p>Email:
          <input type="email" name="Email" size="30" placeholder="Email..." />
        </p>
        <p>Phone Number:
          <input type="phone number" name="Phone Number" size="15" maxlength="10" placeholder="Phone Number..." />
        </p>
        <p>Comments:
          <textarea name="comments" cols="20" rows="4">Enter your comments...</textarea>
        </p>
        <p>
          <input type="Submit" value="Submit" />
        </p>
      </form>
    </fieldset>
    </body>
</html>
