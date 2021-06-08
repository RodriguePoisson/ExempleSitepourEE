<?php
$date_naissance;
$pseudo;
$email;
$option =
[	
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_EMULATE_PREPARES => false
];
$PDO = new PDO('mysql:host=localhost;dbname=fortniteseeker;charset=utf8','root','', $option);
if(isset($_SESSION['id']))
{
	$request = $PDO->prepare('SELECT * FROM membre WHERE id=?');
	$request->bindValue(1,$_SESSION['id']);
	$request->execute();
	$resultat = $request->fetch();
	$pseudo=$resultat['pseudo'];
	$date_naissance=$resultat['date_naissance'];
	$email=$resultat['email'];
}


?>