<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game</title>

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
    </div>
	<?php
	$sucess = false;
	/*If user has submitted with the mix button, then this block of code will run and check what the user has inputted.
	The code will fetch the information associated with the current character and post them for the user to see. It will then
	include sub.php to check the drink ingredients and compares the drinks to a text file containing the names of the drinks.
	From there, the corresponding function associated with $vars will run. If the value is greater than 0 then the function has ran and 
	we have found the correct drink. We give the score and prompt the user to play again.*/ 
		if(count($_POST) > 0){
			
			include 'sub.php';//Includes php file for counting the number of ingredients and containing the drink functions
			$myfile = fopen("./characters.txt", "r") or die("Unable to open file!");
			$index = $_COOKIE['index'];//The cookie holds the index of which character we are currently looking at
			$info = findEntry($myfile,$index);
			$customer = $info[1];
			
			$drink = $info[2];

			$idealDrinks = $info[3];
			$picture= "./assets/".$customer.".jpg"; //These 4 variables hold the information needed to fill in the rest of the screen with words and images.
			$arr = explode(">", $idealDrinks);

			foreach($arr as $vars){//Looks through each of the characters perferred drinks and runs the corresponding function 
				$points =
				$vars = trim($vars);
				$vars = str_replace(' ', '', $vars);
				
				if(($points = $vars()) > 0){
					$sucess = true;
					$_SESSION['score'] += $points;
					setcookie("index", rand(1,20));
				}
			}

			if($sucess == true){?>
		    	<div style="background-color: black;color: green;" class="alert alert-success"  id="gameSuceess" visible ="false">
		    	  <img src="./assets/success.png">
				  <strong>Success!</strong>
				  <a href="game.php"><u>Play Again!</u></a>
				</div>
		    	<?php 
		    	
	    	}
	    	else{ ?>
		    	<div style="background-color: black;color: red;" class="alert alert-danger"  id="gameSuceess" visible ="false">
			    	  <img src="./assets/failure.png">
					  <strong>Error! You made a wrong drink!</strong>
					  <a href="game.php"><u>Play Again!</u></a>
				</div>
	   <?php }
	
		}
		else{
			$success=False;
			$myfile = fopen("./characters.txt", "r") or die("Unable to open file!");
			$index = $_COOKIE['index'];
			$info = findEntry($myfile,$index);
			$customer = $info[1];
			
			$drink = $info[2];

			$idealDrinks = $info[3];
			$picture= "./assets/".$customer.".jpg";
		}

		

		function findEntry($myfile,$rand) {
		
			while(!feof($myfile)) {
				
			    $customer =  fgets($myfile);
			    
			    if(strpos($customer, strval($rand)) !== false){
			    	$info = explode(";",$customer);
			    	break;
			    }
			    	
			}
			
			
			return $info;

		}
	?>
	<div class="container va11-theme" role="main">
		<form action="game.php" method="post">
			<!-- Main Row-->
		<div class="row">
			<!-- bar picture-->
			<div class="col-md-6 purple-border-5">
				<img src="<?=$picture?>" width="550px" height="360px">
			</div>

			<!-- game portion-->
			<div class="col-md-6 purple-border-5">
				<!-- upper row-->
				<div class="row height-180">
					<!-- Adelhyde square-->
					<div class="col-md-4 purple-border-5 full-height">
						<p>Adelhyde</p>
						<!-- Adelhyde upper row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-1" name="Adelhyde-1" class="Adelhyde hide-checkbox" id="Adelhyde-1">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-1"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-2" name="Adelhyde-2" class="Adelhyde hide-checkbox" id="Adelhyde-2">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-2"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-3" name="Adelhyde-3" class="Adelhyde hide-checkbox" id="Adelhyde-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-3"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-4" name="Adelhyde-4" class="Adelhyde hide-checkbox" id="Adelhyde-4">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-4"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-5" name="Adelhyde-5" class="Adelhyde hide-checkbox" id="Adelhyde-5">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-5"><b>+</b></label>
								</div>
							</div>
							

						</div>

						<!-- Adelhyde lower row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-6" name="Adelhyde-6" class="Adelhyde hide-checkbox" id="Adelhyde-6">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-6"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-7" name="Adelhyde-7" class="Adelhyde hide-checkbox" id="Adelhyde-7">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-7"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox"  value="Adelhyde-8" name="Adelhyde-8" class="Adelhyde hide-checkbox" id="Adelhyde-8">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-8"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-9" name="Adelhyde-9" class="Adelhyde hide-checkbox" id="Adelhyde-9">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-9"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Adelhyde-10" name="Adelhyde-10" class="Adelhyde hide-checkbox" id="Adelhyde-10">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Adelhyde-10"><b>+</b></label>
								</div>
							</div>
							

						</div>
					</div>
					<div class="col-md-4 purple-border-5 full-height">
						<p>Bronson Ext</p>
						<!-- Bronson upper row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Bronson hide-checkbox" value="Bronson-1" name="Bronson-1" id="Bronson-1">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-1"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-2" name="Bronson-2" class="Bronson hide-checkbox" id="Bronson-2">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-2"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-3" name="Bronson-3" class="Bronson hide-checkbox" id="Bronson-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-3"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-4" name="Bronson-4" class="Bronson hide-checkbox" id="Bronson-4">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-4"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-5" name="Bronson-5" class="Bronson hide-checkbox" id="Bronson-5">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-5"><b>+</b></label>
								</div>
							</div>
							

						</div>

						<!-- Bronson lower row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-6" name="Bronson-6" class="Bronson hide-checkbox" id="Bronson-6">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-6"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-7" name="Bronson-7" class="Bronson hide-checkbox" id="Bronson-7">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-7"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-8" name="Bronson-8" class="Bronson hide-checkbox" id="Bronson-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-8"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-9" name="Bronson-9" class="Bronson hide-checkbox" id="Bronson-9">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-9"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" value="Bronson-10" name="Bronson-10" class="Bronson hide-checkbox" id="Bronson-10">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Bronson-10"><b>+</b></label>
								</div>
							</div>
							

						</div>
					</div>
					<div class="col-md-4 purple-border-5 full-height">
						<p>Pwd Delta</p>
						<!-- Delta upper row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-1" name="Delta-1" id="Delta-1">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-1"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-2" name="Delta-2" id="Delta-2">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-2"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-3" name="Delta-3" id="Delta-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-3"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-4" name="Delta-4" id="Delta-4">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-4"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-5" name="Delta-5" id="Delta-5">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-5"><b>+</b></label>
								</div>
							</div>
							

						</div>

						<!-- Delta lower row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-6" name="Delta-6" id="Delta-6">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-6"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-7" name="Delta-7" id="Delta-7">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-7"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-8" name="Delta-8" id="Delta-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-8"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-9" name="Delta-9" id="Delta-9">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-9"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Delta hide-checkbox" value="Delta-10" name="Delta-10" id="Delta-10">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Delta-10"><b>+</b></label>
								</div>
							</div>
							

						</div>
					</div>
				</div>
				<!-- lower row-->
				<div class="row height-180">
					<div class="col-md-4 purple-border-5 full-height">
						<p>Flanergide</p>
						<!-- Flanergide upper row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-1" name="Flanergide-1" id="Flanergide-1">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-1"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-2" name="Flanergide-2" id="Flanergide-2">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-2"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-3" name="Flanergide-3" id="Flanergide-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-3"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-4" name="Flanergide-4" id="Flanergide-4">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-4"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-5" name="Flanergide-5" id="Flanergide-5">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-5"><b>+</b></label>
								</div>
							</div>
							

						</div>

						<!-- Flanergide lower row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-6" name="Flanergide-6" id="Flanergide-6">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-6"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-7" name="Flanergide-7" id="Flanergide-7">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-7"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-8" name="Flanergide-8" id="Flanergide-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-8"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-9" name="Flanergide-9" id="Flanergide-9">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-9"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Flanergide hide-checkbox" value="Flanergide-10" name="Flanergide-10" id="Flanergide-10">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Flanergide-10"><b>+</b></label>
								</div>
							</div>
							

						</div>
					</div>
					<div class="col-md-4 purple-border-5 full-height" style="text-align: center;">
						<img id="bottle" src="./assets/bottle.png">
						<br>
						<input id="mix" type="submit" value="Mix">
						<input type="reset" value="Reset">
					</div>
					<div class="col-md-4 purple-border-5 full-height">
						<p>Karmotrine</p>
						<!-- Karmotrine upper row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-1" name="Karmotrine-1" id="Karmotrine-1">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-1"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-2" name="Karmotrine-2" id="Karmotrine-2">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-2"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-3" name="Karmotrine-3" id="Karmotrine-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-3"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-4" name="Karmotrine-4" id="Karmotrine-4">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-4"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-5" name="Karmotrine-5" id="Karmotrine-5">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-5"><b>+</b></label>
								</div>
							</div>
							

						</div>

						<!-- Karmotrine lower row-->
						<div class="row row-height-align">
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-6" name="Karmotrine-6" id="Karmotrine-6">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-6"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-7" name="Karmotrine-7" id="Karmotrine-7">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-7"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-8" name="Karmotrine-8" id="Karmotrine-3">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-8"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-9" name="Karmotrine-9" id="Karmotrine-9">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-9"><b>+</b></label>
								</div>
							</div>
							<div class="col-md-2 full-height">
								<input type="checkbox" class="Karmotrine hide-checkbox" value="Karmotrine-10" name="Karmotrine-10" id="Karmotrine-10">
										
								<div class="to-be-changed purple-border-1">
									<label class="to-be-changed" for="Karmotrine-10"><b>+</b></label>
								</div>
							</div>
							

						</div>
					</div>
				</div>
			</div>
		</div>
		
		</form>
		<div class="row purple-border-5" style="height: 360px;">
			<div class="col-md-6 purple-border-5 full-height">
				
				<p style="color: purple;"><?=$customer?>:</p>
				<p style="height: 100px;"><?=$drink?></p>
				
			</div>
			<div class="col-md-6 purple-border-5" style="height: 360px;">
				<ul style="height: 90%;overflow: auto;float: left;">
					<caption>Drink Menu</caption>
                    <li><a href="Menu.html#sugar-rush" target="_blank">Sugar Rush</a></li>
                    <li><a href="Menu.html#sparkle-star" target="_blank">Sparkle Star</a></li>
                    <li><a href="Menu.html#blue-fairy" target="_blank">Blue Fairy</a></li>
                    <li><a href="Menu.html#moonblast" target="_blank">Moonblast</a></li>
                    <li><a href="Menu.html#brandtini" target="_blank">Brandtini</a></li>
                    <li><a href="Menu.html#piano-woman" target="_blank">Piano Woman</a></li>
                    <li><a href="Menu.html#sunshine-cloud" target="_blank">Sunshine Cloud</a></li>
                    <li><a href="Menu.html#gut-punch" target="_blank">Gut Punch</a></li>
                    <li><a href="Menu.html#pile-driver" target="_blank">Pile Driver</a></li>
                    <li><a href="Menu.html#suplex" target="_blank">Suplex</a></li>
                    <li><a href="Menu.html#grizzly-temple" target="_blank">Grizzly Temple</a></li>
                    <li><a href="Menu.html#fluffy-dream" target="_blank">Fluffy Dream</a></li>
                    <li><a href="Menu.html#crevice-spike" target="_blank">Crevice Spike</a></li>
                    
                </ul>
				<ul style="height: 90%;overflow: auto;float: left">
					<li><a href="Menu.html#bad-touch" target="_blank">Bad Touch</a></li>
                    <li><a href="Menu.html#mercuryblast" target="_blank">Mercuryblast</a></li>
                    <li><a href="Menu.html#zen-star" target="_blank">Zen Star</a></li>
                    <li><a href="Menu.html#marsblast" target="_blank">Marsblast</a></li>
                    <li><a href="Menu.html#bleeding-jane" target="_blank">Bleeding Jane</a></li>
                    <li><a href="Menu.html#bloom-light" target="_blank">Bloom Light</a></li>
                    <li><a href="Menu.html" target="_blank"><b>Click To See Full Menu</b></a></li>
				</ul>
				
			</div>
		</div>
	</div>
</body>
</html>