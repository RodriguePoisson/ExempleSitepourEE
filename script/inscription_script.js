
var formulaire = document.querySelector(".form-inscription");
var pseudo = document.querySelector(".pseudo");
var date = document.querySelector(".date");
var email = document.querySelector(".email");
var password = document.querySelector(".password");
var password_confirmation = document.querySelector(".confirm-password");
var submit_btn = document.querySelector(".submit-btn");

var b_pseudo = false;
var b_date = false;
var b_email = false;
var b_password = false;
var b_confirm_password = false;

var password_value ="";
var password_confrimation_value ="";


	


function form_est_correcte()
{
	if(b_pseudo&&b_date&&b_email&&b_password&&b_confirm_password)
	{
		submit_btn.disabled=false;
	}
	else
	{
		submit_btn.disabled=true;
	}
}


pseudo.addEventListener("blur", function(e)
{
	var c_erreur = document.querySelector(".erreur_pseudo");
	c_erreur.style.color = 'red';
	var c_pseudo = document.querySelector(".c_input_pseudo");
	var c_pseudo_value = e.srcElement.value;
	var regex_caractere= /^\w*$/;
	var regex_longueur = /^.{4,12}$/;



	if(regex_caractere.test(c_pseudo_value))
	{
		if(regex_longueur.test(c_pseudo_value))
		{
			b_pseudo=true;
			form_est_correcte();
			c_erreur.innerHTML ="";
		}
		else
		{
			b_pseudo=false;
			form_est_correcte();
			c_erreur.innerHTML = "Entre 4 et 12 caracères";
			
		}
	}
	else
	{
		b_pseudo=false;
		form_est_correcte();
		c_erreur.innerHTML = "Pas de caracères spéciaux ni d'espace";
		
	}

	
	
	
	
	
});


date.addEventListener("blur", function(e)
{

	var c_erreur = document.querySelector(".erreur_date");
	c_erreur.style.color = 'red';
	var c_date = document.querySelector(".c_input_date");
	var c_date_value = e.srcElement.value;
	var date_temp = c_date_value.split('/');
	var dateActuel = new Date(Date.now());
	var anneeActuel = parseInt(dateActuel.getFullYear());
	var regex = /^\d{2}\/\d{2}\/\d{4}$/; 
	var annee = date_temp[2];


	if(regex.test(c_date_value))
	{

		if(parseInt(annee)<anneeActuel&&parseInt(annee)>=1900)
		{
			if(isDate(c_date_value))
			{
				b_date=true;
				form_est_correcte();
				c_erreur.innerHTML="";
			}
			else
			{
				b_date=false;
				form_est_correcte();
				c_erreur.innerHTML="Votre date n'existe pas";
			}
		}
		else
		{
			b_date=false;
			form_est_correcte();
			c_erreur.innerHTML="Votre date doit être comprise entre 1900 et "+String(anneeActuel-1);
		}
	} 
	else
	{
		b_date=false;
		form_est_correcte();
		c_erreur.innerHTML="Mauvais format de date: jj/mm/aaaa";
	}




});

email.addEventListener("blur",function(e)
{
	var c_erreur = document.querySelector(".erreur_email")
	c_erreur.style.color = 'red';
	var c_email = document.querySelector(".c_input_email");
	var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
	if(!regex.test(e.srcElement.value))
	{
		
		c_erreur.innerHTML="Votre email est invalide";
		b_email=false;
		form_est_correcte();
	}
	else
	{
		c_erreur.innerHTML="";
		b_email=true;
		form_est_correcte();
	}
	
});

password_confirmation.addEventListener("blur",function(e)
{
	same_password(password_value,e.srcElement.value);
	if (password_value == e.srcElement.value)
	{
		b_confirm_password=true;
		form_est_correcte();
	}
	else
	{
		b_confirm_password=false;
		form_est_correcte();
	}
});



password.addEventListener('blur',function(e)
{
	same_password()
	var c_erreur = document.querySelector('.erreur_password');
	c_erreur.style.color = 'red';
	var regex = /^(?=.*[A-Z])(?=.*[0-9]).{6,20}$/
	if(regex.test(e.srcElement.value))
	{
		password_value = e.srcElement.value;
		b_password=true;
		form_est_correcte();
		c_erreur.innerHTML='';
	}
	else
	{
		b_password=false;
		form_est_correcte();
		c_erreur.innerHTML='Au moins 1 majuscule 1 chiffre entre 8 et 20 caractères';
	}
});


function isDate(d) 
{
	

	// On sépare la date en 3 variables pour vérification, parseInt() converti du texte en entier
	j = parseInt(d.split("/")[0], 10); // jour
	m = parseInt(d.split("/")[1], 10); // mois
	a = parseInt(d.split("/")[2], 10); // année

	// Si l'année n'est composée que de 2 chiffres on complète automatiquement
	if (a < 1000) 
	{
		if (a < 89)	a+=2000; // Si a < 89 alors on ajoute 2000 sinon on ajoute 1900
		else a+=1900;
	}

	// Définition du dernier jour de février
	// Année bissextile si annnée divisible par 4 et que ce n'est pas un siècle, ou bien si divisible par 400
	if (a%4 == 0 && a%100 !=0 || a%400 == 0) fev = 29;
	else fev = 28;

	// Nombre de jours pour chaque mois
	nbJours = new Array(31,fev,31,30,31,30,31,31,30,31,30,31);

	// Enfin, retourne vrai si le jour est bien entre 1 et le bon nombre de jours, idem pour les mois, sinon retourn faux
	return ( m >= 1 && m <=12 && j >= 1 && j <= nbJours[m-1] );
}

function same_password(password_value,password_confirmation_value)
{
	var c_erreur = document.querySelector(".erreur_confirm_password");
	c_erreur.style.color = 'red';
	
	if(password_value == password_confirmation_value)
	{
		
		c_erreur.innerHTML = '';
		
		password_confrimation_value = password_confrimation_value;		

	}
	else
	{
		
		c_erreur.innerHTML = 'Mot de passe différent'
		
	}

}




