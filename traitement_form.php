<?php  
include('log.php');
if($islog==false)
{
	$b_pseudo = false;
	$b_date = false;
	$b_email = false;
	$b_password = false;
	$b_password_confirmation =  false;


	$pseudo;
	$date;
	$email;
	$password;
	$password_confirmation;

	$pseudo_utilise=false;
	$email_utilise=false;

	$option =
	[	
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_EMULATE_PREPARES => false
	];
	$PDO = new PDO('mysql:host=localhost;dbname=fortniteseeker;charset=utf8','root','', $option);
	$request_inscription= $PDO -> prepare('INSERT INTO membre (pseudo,date_naissance,email,password)VALUES(?,?,?,?)');

	$request_verify_pseudo = $PDO -> prepare('SELECT * FROM membre WHERE pseudo=?');

	$request_verify_email = $PDO -> prepare('SELECT * FROM membre WHERE email=?');

	function verify($arg,$request)
	{
		$request->bindValue(1,$arg);
		$request->execute();
		$result = $request->rowCount();
		

		
		if(($result==0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function inscription($pseudo,$date,$email,$password,$request)
	{
		$password= password_hash($password, PASSWORD_DEFAULT);
		


		$request->bindValue(1,$pseudo);
		$request->bindValue(2,$date);
		$request->bindValue(3,$email);
		$request->bindValue(4,$password);
		$request ->execute();
	}

	if(isset($_POST['submit-btn']))
	{

		if(isset($_POST['pseudo']))
		{
			$pseudo = $_POST['pseudo'];

			if(preg_match('#^[a-zA-Z0-9]*$#', $pseudo)AND strlen($_POST['pseudo'])>=4 AND strlen($pseudo)<=12)
			{ 
				$b_pseudo=true;
			} 
			else 
			{ 
				$b_pseudo=false;
			}
		}
		if(isset($_POST['date-naissance']))
		{

			$dateActuel = date("d-m-Y");
			$anneCourante= preg_split('/-/', $dateActuel)[2];

			$date = $_POST['date-naissance'];
			
			if (preg_match( '#^(\d{2}/){2}\d{4}$#' , $date))
			{
				
				$date_array = preg_split('/\//', $date);
				$jour = $date_array[0];
				
				$mois = $date_array[1];
				
				$annee = $date_array[2];
				
				if(1900<=(int)$annee && (int)$annee<(int)$anneCourante&&checkdate($mois, $jour, $annee)==true)
				{
					$b_date=true;
					$date = $annee . '-' . $mois . '-' . $jour;
				}
				else
				{
					$b_date=false;
				}
				
			}
			else
			{
				$b_date=false;
			}
			
		}

		if(isset($_POST['user-mail']))
		{
			
			$email = $_POST['user-mail'];
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$b_email =true;
			}
			else
			{
				$b_email =false;
			}
		}
		if(isset($_POST['password']))
		{
			$password=$_POST['password'];
			if(preg_match('#^(?=.*[A-Z])(?=.*[0-9]).{6,20}$#', $password))
			{
				$b_password=true;
			}
			else
			{
				$b_password=false;
			}
		}

		if(isset($_POST['password-confirmation']))
		{
			$password_confirmation=$_POST['password-confirmation'];
			if(preg_match('#^(?=.*[A-Z])(?=.*[0-9]).{6,20}$#', $password_confirmation)&&$_POST['password']==$password_confirmation)
			{
				$b_password_confirmation=true;
			}
			else
			{
				$b_password_confirmation=false;
			}
		}

		if($b_pseudo&&$b_date&&$b_email&&$b_password&&$b_password_confirmation)
		{
			
			if(verify($email,$request_verify_email)&&verify($pseudo,$request_verify_pseudo))
			{
				
				

				$pseudo_utilise=false;
				$email_utilise=false;
				inscription($pseudo,$date,$email,$password,$request_inscription);
				header('Location: http://localhost/FortniteSeekCopie6/Connexion.php');
				exit;
			}
			else
			{
				
				echo '<script>alert(\'votre pseudo ou email est déjà utilisé\');</script>';
				$pseudo_utilise=true;
				$email_utilise=true;
			}
			
			
			
		}

	}
}
else
{
	header('Location: http://localhost/FortniteSeekCopie6/Acceuil.php');
				exit;
}
?>


