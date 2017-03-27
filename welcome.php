<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/quiz2.css">
        <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
        <title>
            Potato Mailing Service
        </title>
    </head>
    <body id="info" >
        <h4>
            Gourmet potatoes, handpicked by master Tatologists, and mailed to you weekly. <br> Sign up below for more information.
        </h4>
        <?php 
            if(!isset($_COOKIE["first"])) {
        ?>
        <form action="register.php" method="post">
          First name:
          <br>
          <input type="text" name="firstName" value="Jane">
          <br><br>
          Last name:
          <br>
          <input type="text" name="lastName" value="Smith">
          <br><br>
          Email:
          <br>
          <input type="text" name="email" value="jane@smith.com">
          <br><br>
          <input type="submit" value="Submit">
        </form> 
        <?php
            }
            else{
        ?>
            <p>
              Hi, <?php echo $_COOKIE["first"] . " " . $_COOKIE["last"] ?>, you recently signed up with the email address: <?php echo $_COOKIE["email"] ?>, thank you!
            </p>
        <?php
            }
        ?>
    </body>
</html>
