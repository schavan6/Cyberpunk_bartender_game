<?php
	$myFile = "Users.txt";
	$contents = file_get_contents($myFile);
    $contents = explode("\n", $contents);
	$found = false;

	foreach($contents as $values){
     	$loginInfo = explode(",", $values);
        $user = trim($loginInfo[0]);
        $password = trim($loginInfo[1]);
		
    	if($user == $_POST['username'] && $password == $_POST['password']){
        	session_start(); 
			$_SESSION['user'] = $user;
			$_SESSION['password'] = $password;
			$_SESSION['score'] = 0;
			$found = true;
        	header('Location: instructions.php');
   		}  
	}
	if($found == false){
	header("location:Login.php?msg=failed");
	}
?>