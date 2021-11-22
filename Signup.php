<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to VA-11 Hall-A</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="scss/main.css" rel="stylesheet">
    <link rel="stylesheet" href="Signup.css">

</head>

<body>

    <div class="main-content bg-dark text-center">
        <div class="row col-md-9 picture">
			<img src="./assets/welcomePic.png">
		</div>

        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <?php
            echo "<h1>Thank you!</h1> <p>Welcome to the bar! " . $_POST["username"] . "!</p>";
            echo "<p>You are now in VA-ll Hall-A</p>";

            $personalInfo = $_POST['username'] . ',' . $_POST['password'];

            file_put_contents("Users.txt", PHP_EOL . $personalInfo, FILE_APPEND);
            ?>

            <p>
                <a href="Login.php">Back to Login Page</a>
            </p>
        </div>
    </div>
</body>
</html>