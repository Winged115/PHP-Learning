<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My First PHP</title>
  </head>
  <body>
    <?php
      echo "Hello World" . "<br />" ;

      $firstName = "Jack";

      if ($firstName === "Jason") {
        echo "Hello Jason";
      } else {
        echo "I bet your first name is " . $firstName;
      }
     ?>
  </body>
</html>
