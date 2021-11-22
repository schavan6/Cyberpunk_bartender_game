<?php
session_unset();
setcookie("index", "", time() - 3600);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goodbye</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="scss/main.css" rel="stylesheet">
    <link href="game.css" rel="stylesheet">

</head>

<body>
    </div>

    <div class="background">
        <div class="centered">
        </div>
    </div>
    <div class="text-box">
        <h1>Thanks for Playing</h1>
        <a href="Login.php">Return to login page</a>
    </div>

</body>

</html>