<?php
$islog=false;
$isSuperUser=false;
$isModo=false;
$isMembre=false;
$id;

if((isset($_SESSION['id']))&&(isset($_SESSION['pseudo'])))
{
	if ($_SESSION['pseudo'] =='AdminFande69')
	{
		$islog=true;
		$isMembre=true;
		$isModo=true;
		$isSuperUser=true;
		$id = $_SESSION['id'];
	}
	else
	{
		$islog=true;
		$isMembre=true;
		$id = $_SESSION['id'];
	}



}
if((isset($_COOKIE['ec'])&&(isset($_COOKIE['pwhr']))))
{
	$option =
	[	
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	];
	$PDO = new PDO('mysql:host=localhost;dbname=fortniteseeker;charset=utf8','root','', $option);
	$request = $PDO->prepare('SELECT id,password,pseudo FROM membre WHERE id=?');
	$request->bindValue(1,$_COOKIE['ec']);
	$request->execute();
	$resultat = $request->fetch();
	if($_COOKIE['pwhr']==$resultat['password'])
		{
			$_SESSION['id']=$resultat['id'];
			$islog=true;
	 		$isMembre=true;
	 		if($resultat['pseudo']=='AdminFande69')
	 		{
	 			$modo = true;
	 			$isSuperUser=true;
	 		}
		}
}

?>