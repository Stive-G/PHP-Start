<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Yu-Gi-Oh!</title>
</head>
<body>
    <div class="inside">
	<h1>Ajouter une carte Yu-Gi-Oh!</h1>
	<form action="post.php" method="post">
		<label for="name">Nom de la carte :</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="description">Description de la carte :</label>
		<textarea id="description" name="description" required></textarea><br><br>

		<label for="type">Type de la carte :</label>
		<select id="type" name="type">
        <option value="choix">--Choisir le Type--</option>
			<option value="monstre">Monstre</option>
			<option value="magie">Magie</option>
			<option value="piege">Piège</option>
		</select><br><br>

		<input type="submit" value="Ajouter">
	</form>
    </div>
</body>
</html>