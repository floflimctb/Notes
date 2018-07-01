<?php 

/*

BASES :
	-*/ echo  "Bonjour" . '<br />' . $variable; /* Affiche un message ""
		-Concaténation par séparation entre points .
		-Possibilité d'intégrer du code html entre ''
	-*/ include("menu.php"); /* Inclusion du code menu.php
	-*/ phpinfo(); /* Affiche les infos sur php
	-*/	&variable = 17; /* Variables : Possilibités : 
		-int : nombres entiers
		-"string" ou 'string' : chaine de caracteres (\" pour afficher un guillement)
		-float : nombres decimaux
		-bool : booleens (true ou false)
		-NULL : rien
		-Calculs : */ + - / * % /*
		-*/ &variable++; /* Incrémentation : équivaut à */ $variable = $variable + 1; /*

CONDITIONS :
	-*/if (condition) { /*
		Symboles :
		-*/ == /* : est égal à
		-*/ > /* : est supérieur à
		-*/ < /* : est inférieur à
		-*/ >= /* : est supérieur ou egal à
		-*/ <= /* : est inférieur ou egal à
		-*/ != /* : est différent de 
		-*/ AND && /* : et
		-*/ OR || /* : ou
		-boleens : 
		true ou false, possibilite de ne marquer que if ($variable) si c'est vrai et if (! %variable) si c'est faux */
	}
	elseif (condition) {
		//Sinon si...
	}
	else {
		//sinon...
	}

	switch (variable) {
		case 'value':
			//Dans le cas où...
			break;
		default:
			//Defaut obligatoire
			break;
	}

	$majeur = ($age >= 18) ? true : false; /*Condition ternaire : Si c'est vrai, alors, la valeur indiquée après le point d'interrogation (ici, true) sera affectée à la variable $majeur. Sinon, c'est la valeur qui suit le symbole « deux-points » qui sera affectée à $majeur

BOUCLES :
	-*/ while (&variable <= 10) { } /* Boucle : tant que 
	-*/ for ($i=0; $i < ; $i++) { }  /* Boucle : for
	for (initialisation: valeur donnée au départ; condition: condition pour éxécuter la boucle; modification à chaque tour)

TABLEAUX :
	-Tableaux numérotés :
		-*/ $prenoms = array ('Francois', 'michel', 'nicole'); /* Tableau (array) numéroté (commence à la case 0, puis dans l'ordre)
		-Deuxieme façon de faire un tableau numéroté :
			-*/ $prenoms[0] = 'François';
				$prenoms[1] = 'Michel';
				$prenoms[2] = 'Nicole'; /*
		-Troisième façon de faire un tableau numéroté :
			-*/ $prenoms[] = 'François'; // Créera $prenoms[0]
				$prenoms[] = 'Michel'; // Créera $prenoms[1]
				$prenoms[] = 'Nicole'; /* Créera $prenoms[2]
		-Afficher la Case 1 du tableau numéroté prenom : Michel
			-*/ echo $prenoms[1]; /*
		-Afficher le contenu d'un tableau
			-*/ print_r(&prenoms); /*
	Tableaux associatifs : (Ressemble aux objets js)
		-*/ $coordonnees = array (
			    'prenom' => 'François', //prenom est associé à  François
			    'nom' => 'Dupont',
			    'adresse' => '3 Rue du Paradis',
			    'ville' => 'Marseille'); /*
		-*/ echo $coordonnees['ville']; /* Affiche la ville du tableau associe coordonnees : Marseille
	-Afficher le contenu d'un tableau : 
		-Première façon :
			-*/ foreach ($prenoms as $element) { echo $element . '<br />'; } /* Affiche $prenoms[0], $prenoms[1], etc
		-Pour afficher la clé des tableaux associés :
		 	-*/ foreach ($coordonnees as $cle => $element) {   echo '[' . $cle . '] vaut ' . $element . '<br />'; } /*
		-Deuxième façon :
			-*/ for ($numero = 0; $numero < 5; $numero++) {   echo $prenoms[$numero] . '<br />'; } /* Affichera $prenoms[0], $prenoms[1] etc
		-Affiche le contenu d'un tableau (pour debug) :
			-*/ print_r(&prenoms); /*

FONCTIONS :
	-Fonctions de bases :
		-*/ $longeur = strlen($phrase); /* Donne la longueur d'une chaîne de caractères (possibilité de bugs dans le décomptage)
		-*/ $variable = str_replace('b', 'p', 'bim bam boum'); /*Résultat final : pim pam poum : cherche les b les remplace par p dans la chaine bim bam boum
		-*/ $chaine = str_shuffle($chaine); /* Mélange les caractères d'une chaîne
		-*/ $chaine = strtolower($chaine); /* Met tous le caractères d'une chaîne en minuscule
		-*/ $chaine = strtoupper($chaine); /* Met tous le caractères d'une chaîne en majuscule
		-*/ $annee = date('Y'); /* Donne l'année avec Y ou bien le mois avec m, le jour avec d, l'heure avec H, la minute avec i
	-Ses propres fonctions :
		-La déterminer :
			-*/ function DireBonjour ($nom) { echo 'Bonjour ' . $nom . ' !<br />'; } /*
		-L'appeler :
			-*/ DireBonjour('Marie'); /*
		-Fonction avec paramètres :
			-*/ function VolumeCone ($rayon, $hauteur) {
   					$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   					return $volume; // indique la valeur à renvoyer, ici le volume 
   				} $volume = VolumeCone(3, 1); /*

ERREURS :
	-*/ Parse error: parse error in fichier.php on line 15 /*Instruction php mal formée : point virgule manquant, oubli de fermer un guillemet, oubli dans la concoctenation (point pour separer les éléments dans echo), accolade mal fermée
	-*/ Fatal Error: Call to undefined function: fonction_inconnue() in fichier.php on line 27 /* Fonction inconnue
	-*/ Warning: Wrong parameter count for fonction() in fichier.php on line 112 /* Oubli ou rajout de paramètres pour une fonction
	-*/ Cannot modify header information - headers already sent by ... /* Headers à mettre avant quoi que ce soit d'autre
	-*/ Fatal error: Maximum execution time exceeded in fichier.php on line 57 /* Boucle infinie

TRANSMETTRE LES DONNEES :
	-Par URL :
		-*/ echo $_GET['prenom'] . ' ' . $_GET['nom']; /* Affiche la variable mise en paramètre dans la balise a au préalable
		-*/if (isset($_GET['prenom']) AND isset($_GET['nom'])) /* Fonction isset() : teste si une variable existe
		-*/ $_GET['repeter'] = (int) $_GET['repeter']; /*Transtypage : lire de droite à gauche : tout ce qui est envoyé à repeter ressort forcément en int
	-Par formulaire :
		-Utiliser plutôt la méthode POST, permet de transmettre plus de données, et pas par URL
		-*/ echo 'Bonjour ' . $_POST['prenom']; /*
		-Attention à la faille XSS : (injection JS, HTML,... dans formulaires)
		-Pour liste déroulante :
			-*/ ?><select name="choix">
    				<option value="choix1">Choix 1</option>
    				<option value="choix2" selected="selected">Choix 2</option><!--Sélecté par défaut-->
				</select><?php /*
			-*/ if($_POST['choix'] == choix2) { echo 'Vous avez choisi le choix 2.'; } /*
		-Cases à multiples choix :
			-*/ ?> <input type="checkbox" name="case1" id="case" />Ma case à cocher
			<input type="checkbox" name="case2" id="case" checked="checked" />Une autre case à cocher<!--Chochée par défaut--><?php /*
			-*/ if(isset($_POST['case1'])) { echo 'Vous avez choisi le premier choix.'; } /* Et si on l'a checkée, la variable aura la valeur "on".
		-Boutons d'options :
			-*/ ?> <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> Oui
				<input type="radio" name="frites" value="non" id="non" /> Non <?php /*
			-*/ if($_POST['frites'] == 'oui') { echo 'Vous aimez les frites'; } /* Si c'est oui qui est cochée, la variable est égale à la value="oui"
		-Les champs cachés :
			-*/ ?> <input type="hidden" name="pseudo" value="Mateo21" /> <?php /*
			-ici : $_POST['pseudo'] = Mateo21
	-Traitement de fichiers :
		-Ajouter l'attribut */ ?><form enctype="multipart/form-data"></form><?php /* pour dire au navigateur qu'il y a un envoie de fichiers
		-*/ ?><input type="file" name="monfichier" /><?php /*
		-*/ $_FILES['monfichier']['name'] /* Contient le nom du fichier envoyé par le visiteur.
		-*/ $_FILES['monfichier']['type'] /* Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type seraimage/gif.
		-*/ $_FILES['monfichier']['size'] /* Indique la taille du fichier envoyé. Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
			-Attention : la taille de l'envoi est limitée par PHP. Par défaut, impossible d'uploader des fichiers de plus de 8 Mo.
		-*/ $_FILES['monfichier']['tmp_name'] /* Juste après l'envoi, le fichier est placé dans un répertoire temporaire sur le	serveur en attendant que votre script PHP décide si oui ou non il accepte de le stocker pour de bon. Cette variable contient l'emplacement temporaire du fichier (c'est PHP qui gère ça).
		-*/ $_FILES['monfichier']['error'] /* Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il
		y a eu un problème et si oui, lequel. La variable vaut 0 s'il n'y a pas eu d'erreur.
		-Test traitement fichier : 
			-Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
			-*/ if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {
		        // Testons si le fichier n'est pas trop gros
		        	if ($_FILES['monfichier']['size'] <= 1000000) {
		                // Testons si l'extension est autorisée
		                $infosfichier = pathinfo($_FILES['monfichier']['name']);
		                $extension_upload = $infosfichier['extension'];
		                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		                if (in_array($extension_upload, $extensions_autorisees)){
		                	// On peut valider le fichier et le stocker définitivement
	                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
	                        echo "L'envoi a bien été effectué !";
		                }
		        	}
				} /*
		-*/ move_uploaded_file() /*Fonction permettant d'accepter un fichier envoyé par formulaire
		-En pratique, il y aura aussi des problèmes par rapport aux accents dans les noms de fichiers, des noms de fichiers identiques,... La solution est de choisir nous-même le nom du fichier à stocker. 
		-Plus d'infos : https://openclassrooms.com/courses/1085676-upload-de-fichiers-par-formulaire

CONNARDS D'UTILISATEURS :
	-Vérifier -*/ isset() /*
	-Faille XSS (cross-site scripting) :
		-Empêcher l'injection HTML
			-*/ htmlspecialchars() /* Provoque l'affichage de la balise plutôt que les prendre en compte
			-*/ strip_tags() /* Cache les balises

VARIABLES SUPERGLOBALES : 
	-*/ $_SERVER /* Valeurs renvoyées par le serveur
		-*/ $_SERVER['REMOTE_ADDR'] /* Adresse IP du client qui a demandé à voir la page
	-*/ $_ENV /* Variables d'environnement, toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.
	-*/ $_SESSION /* Variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. Nous allons apprendre à nous en servir dans ce chapitre.
	-*/ $_COOKIE /* Valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
	-*/ $_GET /* Données envoyées en paramètres dans l'URL
	-*/ $_POST /* Informations qui viennent d'être envoyées par un formulaire
	-*/ $_FILES /* Liste des fichiers qui ont été envoyés via le formulaire précédent

SESSIONS :
	-*/ session_start(); /* Démarre le système de sessions : si le visiteur vient d'arriver sur le site, alors un ID de session (PHPSESSID) est généré. Appeler cette fonction au tout début de chacune des pages (avant balise doctype) et on peut alors utiliser des variables de session : */ $_SESSION['nom'] /*
	-*/ session_destroy(); /* Ferme la session du visiteur : cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement

COOKIES :
	setcookie('pseudo', 'M@teo21', time() + 365*24*3600); //Creation d'un cookie qui expirera dans un an de la date actuelle
	setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); //parametre non utilises : null puis parametre true : httponly permet de securiser contre les failles XSS
	 echo $_COOKIE['pseudo']; //Afficher un cookie

SQL
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); //Se connecter a sql
$bdd->query('SELECT * FROM jeux_video'); //Ecrire du sql 
while ($donnees = $reponses->fetch())
{
	echo '<p>' . %donnees['nom'] . '</p>';
}

?>