<!DOCTYPE html>
<html>
<head>
	<title>Game Submit</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="scss/main.css" rel="stylesheet">
    <link href="game.css" rel="stylesheet">

<body>
	<?php
		
		$amounts = array();
		foreach($_POST as $key=>$val)
	    {
	    	$len = strlen($key)-2;
	        $chemical = substr($key, 0, $len);
	       
	        	$val = $amounts[$chemical];
	        	$val = $val +1;
	        	$amounts[$chemical] =$val;
	        
	    }
	    print_r($amounts);
		echo $_POST['drinks'];
	    $success = True;

	    if($success){?>
	    	<div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>The updated interview information was not saved!</strong> <div id="Div2" runat="server" ></div>
			</div>
	    <?php }
	?>
</body>
</html>