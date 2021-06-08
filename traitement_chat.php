<?php
include('log.php');

$option =
	[	
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	];
	$PDO = new PDO('mysql:host=localhost;dbname=fortniteseeker;charset=utf8','root','', $option);
	$request_insertion_message=$PDO->prepare('INSERT INTO chat(pseudo,message,date)VALUES(?,?,NOW())');

	$request_pseudo=$PDO->prepare('SELECT pseudo from membre WHERE id=?');
	


if(isset($_POST['submit_btn']))
{

	if(isset($_POST['message']))
	{
		$request_pseudo->bindValue(1,$_SESSION['id']);
		$request_pseudo->execute();
		$resultat=$request_pseudo->fetch();
		$request_insertion_message->bindValue(1,$resultat['pseudo']);
		$request_insertion_message->bindValue(2,$_POST['message']);
		$request_insertion_message->execute();
	}
}

?>