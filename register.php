<?php
	// This is what happens when the user submits the form
    $cookieUserFirst= $_POST["firstName"];
    $cookieUserLast= $_POST["lastName"];
    $cookieUserEmail= $_POST["email"];
    setcookie("first", $cookieUserFirst);
    setcookie("last", $cookieUserLast);  
    setcookie("email", $cookieUserEmail); 
?>

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
       <h4> Thanks for signing up for Gourmet Potatoes! Have a great day! </h4>
       <img src="images/tot.png">
    </body>
</html>