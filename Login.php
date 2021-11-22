
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
    <link rel="stylesheet" href="Login.css">
</head>

<body>
    <div class="container-fluid">
		<div class="main-content text-center">
			<div class="row col-md-11 picture">
				<span class="picture"></span>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form class="form-group" method="post" action="Session.php">
							<?php
							if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
								echo "<h4>Wrong Username / Password, Try Again!</h4>";
							}
							?>
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username" required>
							</div>
							<div class="row">
								<input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
							</div>
							<div class="row">
								<input type="submit" name="submit" value="Log In" class="btn">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a href="Register.php">Register Here</a></p>
					</div>
				</div>
			</div>
			
		</div>
		<div class="text-center">
				<a href="project-info.html">Projec Information</a>
		</div>
	</div>
</body>

</html>