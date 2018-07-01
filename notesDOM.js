/*

BASES :
	-La variable */  document  /* correspond à l'élément */ <html> /*
	-Types de noeuds :
		-*/ document.ELEMENT_NODE /* noeud élément : balise html
		-*/ document.TEXT_NODE /* noeud textuel
		-*/ document.body.nodeType /* Type de noeud de l'élément body
		-Exemple :
			-*/ if (document.body.nodeType === document.ELEMENT_NODE) {
    				console.log("Body est un noeud élément");
				} else {
    				console.log("Body est un noeud textuel");} /* Si le noeud body est un noeud élément,...
    	-Propriété */ childNodes /* :
			-Similaire à un tableau
			-Contient les enfants d'un noeud
			-Compte aussi les espaces, retours à la ligne comme des noeuds textuels
    		-*/ console.log(document.body.childNodes[0]); /* Accès au premier enfant du noeud body
    		-*/ for (var i = 0; i < document.body.childNodes.length; i++) {
    				console.log(document.body.childNodes[i]);} /*
		-Propriété */ parentNodes /* :
			-*/ document.body.childNodes[1]h1.parentNode /* noeud parent de h1 : body

SELECTION :
	-*/ childNodes /* un peu compliqué
	-Sélection par balise :
		-*/ var titreElts = document.getElementsByTagName("h2"); /* Liste de tous les h2
		-Elts : abbréviation d'éléments, convention pour indiquer que le contenu est du DOM
		-Elt pour un seul élément
	-Sélection par classe :
		-*/ document.getElementsByClassName("merveilles") /*
	-Sélection par indentifiant :
		-*/ document.getElementById("nouvelles") /*
	-Sélection par sélecteur CSS :
		-*/ document.querySelectorAll("#contenu p") /* 
		-*/ document.querySelector("p") /* Renvoie le premier élément correspondant au sélecteur CSS

Propriétés de contenu :
	-*/ innerHTML /* :
		-Récupere tout le contenu HTML d'un élément DOM :
		-*/ document.getElementById("contenu").innerHTML /*
	-*/ textContent /* :
		-Renvoie tout le contenu contextuel sans le balisage HTML :
		-*/ document.getElementById("contenu").textContent /*
	-*/ getAttribute /* :
		-Renvoie la valeur de l'attribut
		-*/ document.querySelector("a").getAttribute("href") /* renvoie l'adresse du lien
		-Les attributs */ id, href, value /* sont directement accessibles :
			-*/ document.querySeletor("ul").id /*
	-*/ hasAttribute /* :
		-Vérifie la présence d'attributs
		-*/document.getElementById("form").hasAttribute("target") /* true ou false
	-*/ classList /* :
		-Récupère la liste des classes d'un élément
		-Comme un tableau
		-*/ document.getElementById("antiques").classList /* 
		-Méthode */ contains /* :
			-Vérifie la présence d'une classe
			-*/ document.getElementById("antiques").classList.contains /* true ou false

Modification de contenu :
	-Modifier un contenu existant :
		-Contenu HTML :
			-*/ elt.innerHTML += '<li id="c">C</li>'; /* Ajoute un élément de liste à la fin de la liste
			-innerHTML est souvent employé pour vider un élément de son contenu :
			-*/ elt.innerHTML += ""; /*
			-Utiliser innerHTML plutôt pour petites modifs
		-Contenu textuel :
			-*/ elt.textContent += " de programmation"; /* Ajoute " de programmation" à la fin du titre
		-Attributs :
			-*/ elt.setAttribute(nom, valeur); /* Créer un nouvel attribut pour l'elt, on renseigne le nom et la valeur 
			-*/ id, href, value /* sont directement modifiables :
			-*/ elt.id = "titre"; /*
		-Classes :
			-*/ elt.classList.remove("debut"); /*
			-*/ elt.classList.add("titre"); /*
	-Ajouter un nouvel élément :
		-Trois étapes :
		1. Créer l'élément :
			-*/ var newElt = document.createElement("li"); /* li sous forme d'objet
		2. Définition des informations de l'élément :
			-*/ newElt.textContent = "Python"; /*
		3.Insertion du nouvel élément dans le DOM :
			-*/ document.getElementById("languages").appendChild(newElt); /*
	-Création d'un noeud textuel :
		-*/ document.createTextNode("Ruby"); /* 
		-Au lieu d'utiliser textContent comme précédemment, on utilise createTextNode pour créer un noeud fils texte
	-Ajout d'un noeud avant un autre noeud :
		-*/ elt.insertBefore(newElt, cible); /* Créer un nouveau noeud newElt avant le noeud cible
	-Choix de la position exacte du nouveau noeud :
		-*/ elt.insertAdjacentHTML(position, caracteres); /* Insert un nouvel élément (caractères) à une position qui peut être :
			-beforebegin : avant l'élément existant lui-même
			-afterbegin : juste à l'intérieur de l'élément existant, avant son premier enfant
			-beforeend : juste à l'intérieur de l'élément existant, après sont dernier enfant
			-afterend : après l'élément existant lui-même
	-Remplacer ou supprimer un noeud :
		-Remplacer un noeud existant :
			-*/ elt.replaceChild(newElt, eltToReplace); /*
		-Supprimer un noeud existant :
			-*/ elt.removeChild(eltToRemove); /*

STYLE :
	-Modifier le style d'un élément :
		-Propiété */ .style /* : Objet correponsdant aux attributs style
			-*/ elt.style.color = "red"; /* Modifie la couleur de l'elt
			-Propriété CSS composée : (exemple font-family)
				-Supprimer les tirets et utiliser camelCase :
				-font-family => fontFamily
				-*/ elt.style.fontFamily = "Arial"; /*
			-Limites de .style :
				-Elle accède seulement à l'attribut style de l'élément, n'accède pas à déclarations sur une feuille de style externe
		-Fonction */ getComputedStyle /* : 
			-*/ getComputedStyle(elt); /* Renvoit un objet constituant les propriétés css de l'élément	

*/