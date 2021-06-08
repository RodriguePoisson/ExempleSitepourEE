var titre = document.querySelector(".form-titre");
var contenue = document.querySelector(".form-contenue");
var image = document.querySelector(".form-image");
var form_article = document.querySelector(".form-article");
var article = document.createElement("section");



form_article.addEventListener("submit",function()
{
	add_article();
});

function add_article(titre,contenue,image)
{
	article.innerHTML()="JE SUIS LE PARAGRAPHE"
	document.querySelector("form-c").appendChild(article);
}


