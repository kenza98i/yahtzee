<?php
		session_start();
		include ('yah.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yahtzee</title>
        <meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="main.css">

    </head>
	<body>
  <h2>Bienvenue dans le jeu du Yahtzee !</h2>
	<form method="post">
		<div id="nouveau">
		<input type="text"  name="nom"/> </br>
		<input type="submit" name="submit" value="commencer"/>
		</div>
	</form>
	<?php

		$connexion = mysqli_connect("127.0.0.1", "root", "aucun", "sys");
		if (isset($_POST['submit']) && !empty($_POST['nom']) ){
				$pseudo = $_POST['nom'];
				mysqli_query($connexion, "INSERT INTO yahtzee VALUES ('$pseudo','','','','','','','','','','','','','','','','')");
					$_SESSION['pseudo'] = $pseudo;
					header("Location: nom.php");
					mysqli_close($connexion);
		}
	?>
	</body>
</html>
