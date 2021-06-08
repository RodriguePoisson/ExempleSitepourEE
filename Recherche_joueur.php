<?php
session_start();
include('traitement_chat.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/seek-style.css" />
		
        <title>Recherche Joueur</title>
    </head>

	<body>
	<?php include("header.php"); ?>
		<section class="main_c">

			<form id="list_choix_chat" method="post" >
				<div class="c_choix_lab">
					<label class="badge badge-pill badge-success choix_lab " for="numero" >Choisissez votre salle de chat</label>
					<select class="form-control no-focus-outline" name = "numero" id = "numero">
						<option value="salle_1">Salle 1</option>
	           			<option value="salle_2">Salle 2</option>
	           			<option value="salle_3">Salle 3</option>
					</select>
				</div>
			</form>
			<div class= chat_c>
				<div class =chat_send_c>
					<textarea class="chat_area form-control "type = "text" disabled  readonly  >Bienvenue sur le chat de Fortnite seeker </textarea>
					<form class = "form_chat_area_send" method = "post" >
						<input class="input_message form-control no-focus-outline" type="text" name="message" autocomplete="off" required />
						
							
						<input class="submit_btn btn"name='submit_btn' type="submit" value="Send"/input>

					</form>

					
				</div>
				
				<textarea class="chat_user_area  form-control "type = "text"disabled readonly >liste des utilisateurs </textarea>
			</section>
				
		</div>
		
		
    </body>
</html>