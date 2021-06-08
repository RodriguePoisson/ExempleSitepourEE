<?php
include('log.php');
if ($islog==false)
{
	$option =
	[	
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	];
	$PDO = new PDO('mysql:host=localhost;dbname=fortniteseeker;charset=utf8','root','', $option);


	if(isset($_POST['password'])&&(isset($_POST['email']))&& (isset($_POST['submit_btn'])))
	{
		$request = $PDO->prepare('SELECT id,password,pseudo FROM membre WHERE email=?');
		$request->bindValue(1,$_POST['email'],PDO::PARAM_STR);
		$request->execute();
		$resultat = $request->fetch();
		$password_given = $_POST['password'];
		$password = $resultat['password'];

		if(password_verify($password_given,$password))
		{
			session_start();
			$_SESSION['id']=$resultat['id'];
			$_SESSION['pseudo']=$resultat['pseudo'];
			if(isset($_POST['souvenir']))
			{
				setcookie('ec',$resultat['id'],time()+365*24*360,null,null,false,true);
				setcookie('pwhr',$password,time()+365*24*3600,null,null,false,true);
				
				
			}
			header('Location: http://localhost/FortniteSeekCopie6/Acceuil.php');
				exit;



		}
		else
		{
			echo '<script>alert(\'Mauvais mot de passe ou email\');</script>';;
		}
	}
}
else
{
	header('Location: http://localhost/FortniteSeekCopie6/Acceuil.php');	exit;
}




?>