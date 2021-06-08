<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Inscription</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/inscription.css" />
</head>
<body>

	<div class="c_main">
		<div class="c_form rounded  border border-secondary  rounded-pill" >
			<form class ="form-inscription">
				<input class="form-control pseudo" type="text" name="pseudo" placeholder="Pseudonyme">
				<input class="form-control date" type="text" name="date-naissance"placeholder="jj/mm/aaaa">
				<input class="form-control email" type="email" name="user-mail"placeholder="tonMail@email.com">
				<div>
					<input class="form-control password" type="password" name="password"placeholder="Mot de passe">
					<input class="form-control confirm-password" type="password" name="password-confirmation"placeholder="Confirmez mot de passe">
					
				</div>
				<input class="submit-btn" type="submit"value="inscription"/>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="script/inscription.js"></script>
</body>
	