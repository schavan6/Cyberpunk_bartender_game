<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scoreboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="scss/main.css" rel="stylesheet">
    <link href="game.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
                        <a href="#about">Leaderboard</a>
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
    <h1>Leaderboard</h1>
    <table class="table table-hover">
        <tr>
            <th>Name:</th>
            <th>Score:</th>
        </tr>
        <?php
        
        //Storing new users and rewriting existing users
        $found = false;
        $name = $_SESSION['user'];
        $score = $_SESSION['score'];

        $found = false;
        if ($file = fopen("scores.txt", "r")) {
            while (($line = fgets($file)) !== false && $found != true) {
                $entries = explode(";", $line);
                if ($entries[0] == $name){
                    $found = true;
                   if($entries[1] < $score){
                    $find = "$entries[0];$entries[1]";
                    $replace = "$name;$score\n";
                    $test = file_get_contents('scores.txt');
                    $str = str_replace($find, $replace, $test);
                    file_put_contents('scores.txt', $str);
                   }
                }
            }
            if($found == false){
                $text = "scores.txt";
                $fileContents = file_get_contents($text);
                $fileContents .= "$name;$score\n";
                file_put_contents($text, $fileContents);
            }
        } 
        fclose($file);

        ?>

        <?php
        //Print out the all the scores from score.txt
        //Make two arrays, one for names and scores. Find index of max score and outprint the element at the index of both arrays
        $arr1[] = null;
        $arr2[] = null;
        $i = 0;
        if ($file = fopen("scores.txt", "r")) {
            while (($line = fgets($file)) !== false) {
                $entries = explode(";", $line);
                $arr1[$i] = $entries[0];
                $arr2[$i] = $entries[1];
                $i++;
            }
        }
        fclose($file);
        //Sorting 
        $lastIndex = 0;
        $maxIndex = 0;
        for($j = 0; $j < sizeof($arr2); $j++){
            $lastIndex = $j;
            $max = $arr2[$j];
            for($k = $j+1; $k < sizeof($arr2); $k++){
                if($max < $arr2[$k]){
                    $max = $arr2[$k];
                    $maxIndex = $k;
                    $temp = $arr2[$lastIndex];
                    $arr2[$lastIndex] = $max;
                    $arr2[$maxIndex] = $temp;
                    $temp = $arr1[$lastIndex];
                    $arr1[$lastIndex] = $arr1[$maxIndex];
                    $arr1[$maxIndex] = $temp;
                }
            }
        }
        //Outprint names
        for($l = 0; $l < sizeof($arr1); $l++){
            echo "<tr>";
            echo "<td>$arr1[$l]</td>";
            echo "<td>$arr2[$l]</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>