!DOCTYPE HTML>
<html>
	<head>	
		<link rel="stylesheet" href="css/allstyles.css">
		<title>Bætt við</title> 
	</head>
  	<body>
  		<h3>Bætt við</h3>

			<?php

			$mysqli = new mysqli("tsuts.tskoli.is", "2704912199", "mypassword", "2704912199_skilaverkefni4_vsh2b3u");
			 
			// C
			if($mysqli === false){
			    die("Villa, getum ekki tengst. " . $mysqli->connect_error);
			}
			 
			// Escape user inputs for security
			$nafn = $mysqli->real_escape_string($_REQUEST['name']);
			$simi = $mysqli->real_escape_string($_REQUEST['simanmr']);
			 
	
			$sql = "INSERT INTO nintendopower (nafn, simanumer) VALUES ('$nafn', '$simi')";
			if($mysqli->query($sql) === true){
			    print($nafn. " hefur verið bætt við...");
			} else{
			    print("Villa, ekki hægt að keyra... " . $mysqli->error);
			}
			
			//Loka...
			$mysqli->close();

			sleep(1);//Tefjum um eina sek...
			header("Location: index.php"); // Förum á aðalsíðu...
			exit();
			?>

  	</body> 
</html>