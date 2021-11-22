<?php
session_start();
$rand = rand(1,20);
setcookie("index", $rand);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Instructions</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="scss/main.css" rel="stylesheet">
    <link href="game.css" rel="stylesheet">
</head>
<body>
	<div class="container va11-nopadding">
		<!-- top nav -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Cyperpunk Bartender</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="instructions.php">Home</a>
                        </li>
                        <li>
                            <a href="scoreboard.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="instructions.php">Exit Game</a>
                        </li>
                        <li>
                            <a href="Logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!-- top nav -->
		<div style="text-align: center;">
			<h1>How To Play</h1>
			<p>1. Aim of this game is to serve customers a drink based on the description they provide. You are aiming to serve the customer the most accurate drink that fits their needs. </p>
			<p>2. Each play has a new charachter giving description of the drink they want.</p>
			<p>3. Game also provides a list of drinks and menu page contains drinks sorted by various types. 
						You can use information from drink menu to make the perfect drink.</p>
			<p>4. Points earned will vary depending upon how close is your drink to the perfect drink required by the customer.</p>
			<p>5. Karmotrine is the alcoholic factor in a drink.</p>
			<!--<p>6.If a drink has 10 or less ingredients, it is considered a regular drink. You can make it big by doubling the ingredients. If the drink has 11 or more ingredients(without needing to double it), that drink is considered big and you can’t double it</p>-->
			<button><a href="game.php">Start Game</a></button>
		</div>
	</div>
		
</body>
</html>