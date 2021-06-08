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
	<?php include("header.php"); ?>
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