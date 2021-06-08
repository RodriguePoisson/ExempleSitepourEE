var CheminComplet = document.location.href;
var CheminRepertoire  = CheminComplet.substring( 0 ,CheminComplet.lastIndexOf( "/" ) );
var NomDuFichier     = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );
var page = document.querySelectorAll(".lien-page");
var lien_profil=document.querySelector('.link_profil');
var dropdown_menue = document.querySelector('.dropdown-menu');
var est_affiche = false;

for (var i =0;i<page.length;i++)
{
	
	if(page[i].href==CheminComplet)
	{
		
		page[i].classList.add("active");
	}
}

lien_profil.addEventListener('click', function()
{
	if(!est_affiche)
	{
		dropdown_menue.style.display='inline';
		est_affiche=true;
	}
	else
	{
		dropdown_menue.style.display='none';
		est_affiche=false;

	}
});

