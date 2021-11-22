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
    <link rel="stylesheet" href="Register.css">
</head>

<body>
    <div class="container-fluid">
		<div class="main-content bg-success text-center">
			<div class="row col-md-11 picture">
				<span class="picture"></span>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Sign Up</h2>
					</div>
					<div class="row">
						<form action="Signup.php", method="post">
							<div class="row">
								<input type="text" name="username" id="username" class="form__input" placeholder="Username" required>
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
							</div>
							<div class="row">
								<input type="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Already have an account? <a href="Login.php">Login Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>