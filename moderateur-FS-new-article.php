<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Actualité</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/moderateur-FS-new-article.css" />
</head>
<body>
	<header class = "navbar navbar-expand-lg navbar-light bg-primary"id = "header">
		<nav class = c_nav>
			<u1 class="nav navbar-nav">
				<li  ><a class="nav-link" href="Fortnite_Seeker_Acceuil.php" active>Acceuil</a></li>
				<li  ><a class="nav-link"  href="Fortnite_Seeker_Recherche_joueur.php">Recherche joueur</a></li>
				<li  ><a class="nav-link active" href="Fortnite_Seeker_Actualité.php">Actualité</a></li>
				<li ><a class="nav-link" href="Fortnite_Seeker_Forum.php">Forum</a></li>
			</u1>
		</nav>
		<div class = c_log_search>
			<nav class="nav navbar-nav">
				<a class="nav-link log-button" href ="Fortnite_Seeker_Connexion.php">Connexion </a>
			</nav>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</header>
	<div class ="container form-c">
		<form class="form-article" method="post" >
			<div class ="c_titre_article">
				<input class="form-control form-titre" name="titre" type="text" placeholder="Titre"required/>
			</div>
			
			<div class="c_contenu-article">	
				<label for="contenue"></label>
				<textarea class="form-control form-contenue" name="contenue"  required></textarea>
			</div>
			
			<div class ="c_upload_image">
				<label for="image">Image</label>
				<input class=" form-image" name="image" type="file" required/>
				<input type="submit" class="btn btn-outline-success submit-btn">
			</div>
		</form>
		
	</div>
<script type="text/javascript"src="script/moderateur-FS-new-article.js"></script>
</body>
</html>