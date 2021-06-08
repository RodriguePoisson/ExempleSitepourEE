<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/log-style.css" />
	<title>Connexion</title>
</head>
<body>
	<div id="c_titre_log">
		<h1 id="titre_log">Connexion</h1>
	</div>
	
	<div id = "c_form_login">
		<form  method = "post" id = "form_login">
			<div id = "c_login">
				<div class = "log" >
					<label for ="email" class="lab_log">Adresse email </label>
					<input   type="email" name="email" id="email" placeholder="votreEmail@email.com" required />
				</div>
				<div class = "log" >
					<label for ="password" class="lab_log">Mot de passe </label>
					<input  type="password" name="password" id="password"required/>
				</div>
				<div class = "log">
					<label for="souvenir" class="lab_log"> Se souvenir de moi </label>
					<input  type="checkbox" checked name="souvenir" id ="souvenir"/>	
				</div>
				<div class="log">
					<input  type="submit" value="Connexion"
				</div>
			</div>
			<div id = "inscription">
				<a id = "link_inscription" href = "Fortnite_seeker_Inscritpion.php">Inscription gratuite et rapide.</a>
			</div>

		</form>
	</div>

	

</body>
</html>
