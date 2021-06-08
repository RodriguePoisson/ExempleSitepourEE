<?php  
include('log.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />

</head>

<body>
	<header class = "navbar navbar-expand-lg navbar-light bg-primary"id = "header">
		<nav class = c_nav>
			<u1 class="nav navbar-nav">
				<li ><a class="nav-link  lien-page " href="Acceuil.php" active>Acceuil</a></li>
				<li  ><a class="nav-link lien-page "  href="Recherche_joueur.php">Recherche joueur</a></li>
				<li ><a class="nav-link lien-page " href="Actualite.php">Actualité</a></li>
				<li ><a class="nav-link lien-page " href="Forum.php">Forum</a></li>
			</u1>
		</nav>
		<div class = c_log_search>
			<nav class="nav navbar-nav nav_co">
				<?php
				if($islog)
				{
					echo
					'<div class="dropdown show">
					<a class="link_profil dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<image src=\'css/profil_btn.png\'class=\'image_profil\'/>
					</a>

					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="profil.php">Afficher le profil</a>
					<a class="dropdown-item" href="#">Notificatoin</a>
					<a class="dropdown-item" href="deconnexion.php">Déconnexion</a>
					</div>
					</div>';
				} 
				else
				{
					echo'<a class="nav-link log-button" href ="Connexion.php">Connexion </a>';
				}
				?>
				
			</nav>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</header>
	<script type="text/javascript" src="script/header.js"></script>
</body>