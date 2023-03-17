<?php
$title = "index";

include 'templates/authentification/layout.php'
?>
<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png"/>
    <title>Connexion</title>
</head>

<body>
<div class="bandeau"> Administration</div>
	<div class="boxF">
		<div class="titre">
		</div>
		<form class=cadre method="POST" action="connexion.php">
			<label class="label" for="name" required>Email :</label>
			<input type="email" name="login" id="nom"><br>
			<label class="label" for="name">Mot de passe :</label>
			<input type="password" name="login" id="motdepasse"><br>
			<select>
				
			</select>
			<button type="submit" id="valid">Valider</button>
		</form>
	</div>
</body>
</html>