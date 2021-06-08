<?php
session_start();
include('log.php');
if($islog)
{
	header('Location: http://localhost/FortniteSeekCopie6/Acceuil.php');
	$_SESSION = array();
	session_destroy();

	setcookie('ec', '');
	setcookie('pwhr', '');
}
else
{
	header('Location: http://localhost/FortniteSeekCopie6/Acceuil.php');	exit;
}
?>