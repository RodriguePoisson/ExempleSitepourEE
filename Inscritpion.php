<?php
include("traitement_form.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Inscription</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/inscription.css">
</head>
<body>

	<div class="c_main">
		<div class="c_form rounded  border border-secondary  rounded-pill" >
			<form method="POST" class ="form-inscription"  >
				<div class="c_input_pseudo">
					
					<input class="form-control pseudo" type="text" name="pseudo" placeholder="Pseudonyme">
					<div class="erreur erreur_pseudo"></div>

			</div>
			<div class="c_input c_input_date">
				<input class="form-control date" type="text" name="date-naissance"placeholder="jj/mm/aaaa">
				<div class="erreur erreur_date"></div>

			</div>
			<div class="c_input c_input_email">
				<input class="form-control email" type="text" name="user-mail"placeholder="tonMail@email.com">
				<div class="erreur erreur_email"></div>
				

			</div class="c_input">
			<div>
				<input class="form-control password" type="password" name="password"placeholder="Mot de passe">
				<div class="erreur erreur_password"></div>
				<input class="form-control confirm-password" type="password" name="password-confirmation"placeholder="Confirmez mot de passe">
				<div class="erreur erreur_confirm_password"></div>
				

			</div>
			<input class="submit-btn" type="submit"value="inscription" name="submit-btn" disabled />
			<div class ="erreur erreur_submit"></div>
		</form>
	</div>
</div>
<script type="text/javascript" src="script/inscription_script.js"></script>
</body>
