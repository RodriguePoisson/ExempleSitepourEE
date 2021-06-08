<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/profil-style.css" />
	<title>tezr</title>
</head>
<body>
	<?php
	include('header.php'); 
	include('infoProfil.php');
	if(!isset($_SESSION['id']))
	{
		header('Location:http://localhost/FortniteSeekCopie6/Acceuil.php');
	}
	?>

	<div class='c_m'>
		<div class='c_w'>
			<div class=c_h>
				<div class= 'c_info'>
					<div class='c_info_w'>
						<table class='table_info  table-dark'>
							<tbody class='tbody_info'>
								<tr class='ligne'>
									
									<td class='colonne col-lab'>
										<?php echo'Pseudo' ?>
									</td>
									
									
									<td class='colonne val_pseudo'>
										<?php echo $pseudo ?>

									</td>
									<td><button type="button" class="btn btn-outline-info btn_edit_pseudo">Modifier</button>
									</td>
									
								</tr>
								<tr class='ligne'>
									<td class='colonne col-lab '>
										<?php echo 'Email' ?>
									</td>

									<td class='colonne val_email'>
										<?php echo $email ?>
									</td>
									<td><button type="button" class="btn btn-outline-info btn_edit_email">Modifier</button>
									</td>

								</tr>
								<tr class='ligne'>
									<td class='colonne col-lab'>
										<?php echo 'Date de naissance' ?>
									</td>
									<td class='colonne val_date_naissance'>
										<?php echo $date_naissance ?>
									</td>
									<td><button type="button" class="btn btn-outline-info btn_edit_email_date_naissance">Modifier</button>
									</td>

								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>

		</div>
	</div>

<script type="text/javascript" src="script/profil.js"></script>
</body>
</html>