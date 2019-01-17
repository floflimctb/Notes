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

TRY CATCH :
	-*/ try { /*Instructions*/ }
		catch () { /*Instructions*/ } /*
		-PHP essaie d'éxécuter les instruction qui se trouvent dans try, s'il n'y arrive pas, il éxécute le catch

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
		-*/ time(); /* Nombre de secondes qui s'écoulent depuis le 1 janvier 1970 (timestamp, augmente toutes les secondes), on peut lui ajouter des secondes pour indiquer une échéance
		-*/ die('erreur'); /* Arrête l'éxécution et affiche un message
		-*/ header(); /* Permet d'envoyer ce qu'on appelle des « en-têtes HTTP ». C'est le protocole qu'utilisent le serveur et le client pour échanger des pages web. 
			-*/ header('Location: minichat.php'); /* Ici, on utilise une des possibilités de HTTP qui commande une redirection via la commande Location
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
	-*/ session_start(); /* Démarre le système de sessions : si le visiteur vient d'arriver sur le site, alors un ID de session (PHPSESSID) est généré
		-Appeler cette fonction au tout début de chacune des pages (avant balise doctype)
		-On peut alors utiliser des variables de session : */ $_SESSION['nom'] /*
	-*/ session_destroy(); /* Ferme la session du visiteur
		-Automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement

COOKIES :
	-Fichiers que l'on fera sauvegarder à l'utilsateur sur son ordinateur pour les réuitiliser après
	-Un fichier à la fois
	-Comme pour les sessions à initiliser avant html
	-*/ setcookie('nom', 'valeur', date dexpiration); /* Creation d'un cookie :
		-*/ setcookie('pseudo', 'M@teo21', time() + 365*24*3600); /* Creation d'un cookie qui expirera dans un an de la date actuelle
		-On peut modifier les cookies en réecrivant un setcookie avec le même name mais la nouvelle value :
			-*/ setcookie('pseudo', 'floflim', time()); /* Le pseudo est passé de M@teo21 à floflim
	-*/ setcookie('pseudo', 'M@teo21', time() + 365*24*3600, null, null, false, true); /* Utilisation du httpOnly : rend le cookie inaccessibl en js, évite les failles XSS : Paramètres non utilisés : null (ignorer) puis; dernier paramètre, true, active httponly
	-*/ echo $_COOKIE['pseudo']; /* Afficher un cookie : floflim ici

LIRE ET ECRIRE DANS UN FICHIER :
	-Afin de garder certaines informations (comme un message dans un forum), PHP doit écrir certains fichier dans le disque dur :
		-Pour cela, on doit modifier le CHMOD (modifier les droits sous Linux) du fichier ou dossier
		-CHMOD :
			-Nombre à trois chiffres attribué à un fichier
				-1er chiffre : droits du propriétaires : 7 = tous les droits
				-2ème chiffre : droits du groupe d'utilisateurs
				-3ème chiffre : permissions publiques (tout le monde, même PHP),par défaut 5, donc à mettre à 7
			-Selon sa valeur, Linux autorisera ou non la modification du fichier
			-Or, Linux n'accepte pas les modifications venant de PHP, on doit donc modifier le CHMOD
			-Pour cela, on utilise les logiciels FTP (il faut être hébergé sur un serveur, clique droit sur le fichier et permissions)
			-Si on a pas modifié la valeur : on a l'erreur : */ Warning: fopen(compteur.txt): failed to open stream: Permission denied /*
	-Ouvrir et fermer un fichier :
		-1ère étape : Ouvrir le fichier :
			-*/ $monfichier = fopen('compteur.txt', 'r+'); /* On indique le fichier à ouvrir et comment l'ouvrir :
				-*/ 'r' /* Lecture seul, seulement lire le fichier
				-*/ 'r+' /* Lecture et écriture, assez souvent en pratique
				-*/ 'a' /* Ecriture seule; avantage : si le fichier n'existe pas, il est automatiquement créé
				-*/ 'a+' /* Lecture et écriture, si le fichier n'existe pas, il est créé Automatiquement
					-Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin.
		-2ème étape : lecture / modifications du fichier :
			-Lecture :
				-En général on met une information par ligne et on ne stoque pas beaucoup d'informations, sinon, on utilise une base de données
				-*/ fgetc($monfichier); /* Lire caractère par caractère, il faudrait faireune boucle, un peu lourd alors moins utilisée
				-*/ fgets($monfichier); /* Lire ligne par ligne (arrête la lecture à un saut de ligne), si plusieurs lignes, faire une boucle
				-*/ $ligne = fgets($monfichier); /* On lit la première ligne du fichier
			-Ecriture :
				-*/ fputs($monfichier, 'Texte à écrire'); /*
				-Attention à où l'on écrit le texte :
					-Quand on lit avec fgets un ligne, le curseur reste à le fin de la ligne, on écrirai donc à la suite
					-On utilise alors */ fseek($monfichier, 0); /* qui permet de déplacer le curseur, avec 0, on écrit au début de la ligne et on supprime donc les anciens caractère, ou remplace plutôt
		-3ème étape : Fermer le fichier :
			-*/ fclose($monfichier); /*
	-Exemple : script qui compte le nomre de vues d'une page :
		-*/ $monfichier = fopen('compteur.txt', 'r+');
			$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
			$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
			fseek($monfichier, 0); // On remet le curseur au début du fichier
			fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
			fclose($monfichier);
			echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>'; /*

PHPMYADMIN :
	-Pour se connecter : mettre root en pseudo et rien en mot de passe
	-Pour l'id d'une table
		-Mettre l'index en primary, c'est la clé primaire, celle qui sert d'ID
		-Cocher A_I : auto incrémentation

LIRE DES DONNEES :
	-Pour se connecter à MySQL avec POD, il faut connaître :
		-Le nom de l'hôte : adresse de l'ordinateur sur laquelle MySQL est installé (localhost si sur même ordinateur)
		-La base : nom de la base de donnée
		-Le login : pour WAMP, root
		-Le mot de passe : pour WAMP, rien
	-*/ $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); /* Se connecter à la base de donnees en local (A faire qu'une seule fois en debut de page), dernier parametre pour afficher des erreurs plus claires
	-*/ $bdd = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t'); /* Se connecter à MySQL avec un site en ligne
	-Attention aux erreurs, PHP risque d'afficher le mot de passe, utiliser :
		-*/ try { $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); }
			catch (Exception $e) { die('Erreur : ' . $e->getMessage()); } /* Si il y a une erreur on arrête l'éxécution et on affiche une erreur
	-*/ $reponses = $bdd->query('SELECT * FROM jeux_video'); /* Faire une requete SQL : ici, selectionne tout dans jeux_video et le met dans la var $reponses
	-*/ while ($donnees = $reponses->fetch()) { echo '<p>' . $donnees['nom'] . '</p>'; } /* Affiche tout le contenu de la table jeux_video
		-*/ $donnees = $reponses->fetch(); /* Renvoie false dans $donnees une fois que toutes les entrees ont ete passees en revue
	-*/ $reponse->closeCursor(); /* Provoque la fermeture du curseur d'analyse des resultats, a utiliser a chaque fin de requete
	-Pour eviter injection SQL, les requetes preparees :
		-1/ on prepare la requete sans sa partie variable : */ $req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ?'); /*
			-Au lieu d'executer la requete avec query(), on appelle ici prepare()
		-2/ on execute la requete en appelant execute : */ $req->execute(array($_GET['possesseur'])); /*
		-Avec marqueur nominatif : 
			-*/ $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
				$req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max'])); /*
				Les marqueurs nominatifs :posseusseur et :prixmax commencent par des deux-points

ECRIRE DES DONNEES :
	-Au lieu d'utiliser */ query(); /* on utilisera */ exec(); /*
		-*/ $bdd->exec('INSERT INTO jeux_video(nom, possesseur) VALUES(\'Battlefield 1942\', \'Patrick\')'); /*
		-Mais fonctionnement indentique pour les requetes preparees :
			-*/ $req = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(:nom, :possesseur)');
				$req->execute(array(
					'nom' => $nom,
					'possesseur' => $possesseur,)); /*
	-Quand on appelle exec(), cela renvoie le nombre d'entrees modifiees :
		-*/ $nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
			echo $nb_modifs . ' entrées ont été modifiées !'; /*


SQL :
	BASES :
		-*/ -- /* Commentaire en SQL
		-Voc SGBD : Systèmes de Gestion de Bases de Données
		-Bases langage SQL :
			-*/ SELECT id, auteur, message, datemsg FROM livreor ORDER BY datemsg DESC  /*
		-Image armoire :
			-L'armoire, c'est la base dans le langage SQL, le gros meuble dans lequel les secrétaires ont l'habitude de classer les informations
			-Il y a plusieurs tiroirs, un tiroir, en SQL, c'est ce qu'on appelle une table
				-Chaque tiroir contient des données différentes, par exemple, on peut imaginer un tiroir qui contient les pseudonymes et infos sur vos visiteurs, un autre qui contient les messages postés sur votre forum…
			-Mais que contient une table ? C'est là que sont enregistrées les données, sous la forme d'un tableau. Dans ce tableau, les colonnes sont appelées des champs, et les lignes sont appelées des entrées.
				-Exemple de tables :
					-news : stocke toutes les news qui sont affichées à l'accueil
					-livre_or : stocke tous les messages postés sur le livre d'or
					-forum : stocke tous les messages postés sur le forum
					-newsletter : stocke les adresses e-mail de tous les visiteurs inscrits à la newsletter
	LIRE DES DONNEES :
		-Le premier mot de SQL indique le type d'orientation qui doit etre effectue
			-*/ SELECT nom, possesseur /* On indique apres select quels champs on veut utiliser */ * /* pour prendre tous les champs "prendre tout ce qu'il y a..."
		-*/ FROM  jeux_video/* "...dans..." fait la liaison entre le nom des champs et le nom de la table
		-*/ WHERE possesseur='Patrick' /* Liste uniquement les jeux appartenant a Patrick
			-*/ SELECT * FROM jeux_video WHERE possesseur='Patrick' /* « Sélectionner tous les champs de la table jeux_video lorsque le champ possesseur est égal à Patrick »
		-*/ AND /* ou bien */ OR /* Pour combiner les conditions, exemple :
			-*/ SELECT * FROM jeux_video WHERE possesseur='Patrick' AND prix < 20 OR prix > 150 /*
		-*/ ORDER BY prix/* Ordonner les resultats, rajouter */ DESC /* pour ordre decroissant, possibilite de classer alphabetiquement pour champs textuels
			-*/ SELECT * FROM jeux_video ORDER BY prix /* « Sélectionner tous les champs de jeux_video et ordonner les résultats par prix croissants »
		-*/ LIMIT 0, 20 /* Limite les resultats :
			-Premier chiffre (0) : a quelle entree on commence a lire la table, ici, la premiere entree
				-Attention : ne correspond pas a champ ID : Correspond au terme du resultat
			-Second chiffre (20) : Le nombre d'entrees que l'on doit selectionner
		-*/ SELECT nom, possesseur, console, prix FROM jeux_video WHERE console='Xbox' OR console='PS2' ORDER BY prix DESC LIMIT 0,10 /* "Selectionner les champs nom, possesseur, console, prix dans jeux_video lorsque le champ console est egal a Xbos ou PS2 et ordonner les resultats par prix decroissants et limite les resultats du premier resultat jusqu'au 10eme"
		-Il faut utiliser dans l'ordre : WHERE puis ORDER BY puis LIMIT
	ECRIRE DES DONNEES :
		-*/ INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES('Battlefield 1942', 'Patrick', 'PC', 45, 50, '2nde guerre mondiale') /* Ajouter un element a la BDD
		-*/ UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE ID = 51 /* Modifier un element de la BDD (au lieu de l'id on peut selectionner le nom ou autre champ, ce qui permettra notamment de changer plusieurs entrees a la fois)
		-*/ DELETE FROM jeux_video WHERE nom='Battlefield 1942' /* Supprimer une entree
	FONCTIONS :
		-Fonctions scalaires :
			-Agissent sur chaque entrée (une a une)
			-*/ UPPER() /* : Convertit le texte d'un champ en majuscules
				-*/ SELECT UPPER(nom) AS nom_maj, possesseur, console, prix FROM jeux_video /* UPPER est utilisée sur le champ nom : on récupère tous les noms des jeux en majuscules via un champ virtuel (allias) appelé nom_maj, on peut quand meme recupere les autres champs sans appliquer la fonction
			-*/ LOWER () /* : convertit le texte d'un champ en minuscules
			-*/ LENGTH() /* : Donne la longueur d'un champ
			-*/ ROUND() /* : Arrondit un nombre decimal
				-*/ SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video /* : en parametre, le champ et le nombre de chiffre apres la virgule pour arrondir (25,86999 = 25,87)
		-Fonctions d'agrégat :
			-Des calculs sont faits sur l'ensemble de la table pour retourner UNE valeur
			-*/ AVG() /* : Calculer la moyenne
				-*/ SELECT AVG(prix) AS prix_moyen FROM jeux_video /* : Syntaxe identique que pour les fonctions scalaires
				-Contrairement aux fonctions scalaires, NE PAS recuperer d'autres champs en meme temps
				-Pour l'afficher, comme d'habitude : 
					-*/ $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');
					while ($donnees = $reponse->fetch()) { echo $donnees['prix_moyen']; }
					$reponse->closeCursor(); /*
				-Mais privilegier sans boucle car une seule valeur a renvoyer :
					-*/ $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');
					$donnees = $reponse->fetch();
					echo $donnees['prix_moyen'];
					$reponse->closeCursor(); /*
			-*/ SUM() /* : Additionner les valeurs
			-*/ MAX() /* : Retourner la valeur maximale
			-*/ MIN() /* : Retourner la valeur minimale
			-*/ COUNT() /* : Compter le nombre d'entrees
				-*/ SELECT COUNT(*) AS nbjeux FROM jeux_video /* On lui donne * en entree pour compter le nombre total de jeux
				-*/ SELECT COUNT(*) AS nbjeux FROM jeux_video WHERE possesseur='Florent' /* Ou un peut utiliser un where pour savoir plus precisement le nombre de jeu possedes par Florent
				-S'il y a des NULL dans la table :
					-Il faut indiquer en parametre le nom du champ a analyser :
						-*/ SELECT COUNT(nbre_joueurs_max) AS nbjeux FROM jeux_video /* Certain jeux n'ont pas de nombre de joueurs maximum definis, du coup, ici, seuls les entrees avec un nombre de joueur maximum defini seront comptees
				-Lorsqu'il y a des valeurs identiques (par exemple, en possesseur, plusieurs Florent) et que l'on veut compter seulement les Florent :
					-On utilise */ DISTINCT /* :
						-*/ SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video /* Comptera le nombre de possesseurs sans compter 2 fois un meme possesseur
			-*/ GROUP BY /* : 
				-A utiliser en meme temps qu'une fonction d'agregat
				-*/ SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console /* Prix moyen des jeux pour chaque console
			-*/ HAVING /* : 
				-Idem, ne s'utilise que sur le resultat d'une fonction d'agregat
				-Equivalent de */ WHERE /* mais agit sur les donnees une fois regroupees
				-*/ SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10 /* 
	DATES :
		-Types de dates que peut MySQL:
			-DATE : stocke une date au format AAAA-MM-JJ
			-TIME : stocke un moment au format HH:MM:SS
			-DATETIME : stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS
			-TIMESTAMP : stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00h00min00s
			-YEAR : stocke une année, soit au format AA, soit au format AAAA
		-Nommer le champ date_creation ou date_modification mais PAS date
		-champs de type dates = chaînes de caractères : ""
		-*/ SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22' /* Renvoie les messages postés le 02/04/2010 à 15h28m22s
		-*/ SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 15:28:22' /* Renvoie tous les messages postés après cette date
		-*/ SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00' /* Renvoie tous les messages postés entre le 02/04/2010 et le 18/04/2010
		-ou bien avec syntaxe */ BETWEEN /* : (aussi possible pour les nombres)
			-*/ SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00' AND '2010-04-18 00:00:00' /*
		-*/ INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', '2010-04-02 16:32:22') /*
		-Les fonctions utiles pour les dates :
			-*/ NOW() /* : obtenir la date et l'heure actuelles donc en DATETIME
				-*/ INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW()) /*
				-*/ CURDATE(), CURTIME() /* donnent la date (DATE), et l'heure (TIME) actuelle respectivement
			-*/ DAY(), MONTH(), YEAR(), HOUR(), MINUTE(), SECOND() /* : extraire le jour, le mois, l'année, l'heure, la minute, la seconde
				-*/ SELECT pseudo, message, DAY(date) AS jour FROM minichat /* Recupère le pseudo, le masseg et le numéro du jour où il a été posté
			-*/ DATE_FORMAT() /* : recupérer la date sous un format choisi
				-*/ SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat /* Récupère les dates avec un champ nommé date sous la forme 11/03/2010 15h47min49s
				-*/ %d, %m, %Y, %H, %i, %s /* sont remplacés par le jour, le mois, etc; les autres symboles sont affichés tels quels
			-*/ DATE_ADD(), DATE_SUB() /* : ajouter ou soustraire des dates
				-*/ SELECT pseudo, minichat, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat /* le champ date_expiration correspond à la date + 15j où a été posté le message
				-*/ INTERVAL /* ne doit pas être changé
				-*/ DAY /* peut être remplacé par */ MONTH, YEAR, HOUR, MINUTE, SECOND /*
	JOINTURES DE TABLES :
		-Deux types de jointures :
			-Jointure interne : Sélectionne que les données qui ont une correspondance entre les 2 tables 
				-2 possibilités :
					-*/ WHERE /* à connaître mais obsolète, à choisir, ne pas utiliser
						-*/ SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire
							FROM proprietaires AS p, jeux_video AS j
							WHERE j.ID_proprietaire = p.ID /*
						-On marque nom_de_la_table.nom_du_champ pour ne pas se mélanger les pinceaux entre les champs de chaque tabes, pour ne pas générer de colonne ambiguë
						-*/ AS /* est en fait facultatif, on peut donc écrire :
							-*/ SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
								FROM proprietaires p, jeux_video j
								WHERE j.ID_proprietaire = p.ID /*
					-*/ JOIN /* plus efficace et plus lisible
						-*/ SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
							FROM proprietaires p
							INNER JOIN jeux_video j
							ON j.ID_proprietaire = p.ID /* On récupère les données depuis une table principale, proprietaires, et on fait une jointure interne (INNER JOIN) avec une autre table, jeux_videos; et on fait la liaison entre les champs avec ON
							-Il faut utiliser */ WHERE, ORDER BY, LIMIT /* après la jointure
			-Jointure externe : Sélectionne toutes les données, même si certaines n'ont pas de correspondance dans l'autre table
				-Deux écritures possibles :
					-*/ LEFT JOIN /* : Récupérer toute la table de gauche
						-*/ SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
							FROM proprietaires p
							LEFT JOIN jeux_video j
							ON j.ID_proprietaire = p.ID /* Ici, proprietaires est appelée la table de gauche et jeux_videos, la table de droite. On récupère la table de gauche, donc, proprietaires même si ses derniers n'ont pas d'équivalence dans la table jeux_videos 
						-Si une personne ne possède aucun jeu, la colonne du jeu sera vide (NULL)
					-*/ RIGHT JOIN /* : Récupérer toute la table de droite
						-*/ SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
							FROM proprietaires p
							RIGHT JOIN jeux_video j
							ON j.ID_proprietaire = p.ID /* On récupèrera donc tous les jeux vidéos même si ils n'ont pas de propriétaires associés
						-Un jeu vidéo peut ne pas avoir de propriétaire si :
							-ID_proprietaire contient une valeurs qui n'a pas d'équivalent 	dans la table propriétaire
							-soit le champ ID_proprietaire vaut NULL, c'est à dire que la personne ne possède pas le jeu


ERREURS :
	-*/ Parse error: parse error in fichier.php on line 15 /*Instruction php mal formée : point virgule manquant, oubli de fermer un guillemet, oubli dans la concoctenation (point pour separer les éléments dans echo), accolade mal fermée
	-*/ Fatal Error: Call to undefined function: fonction_inconnue() in fichier.php on line 27 /* Fonction inconnue
	-*/ Warning: Wrong parameter count for fonction() in fichier.php on line 112 /* Oubli ou rajout de paramètres pour une fonction
	-*/ Cannot modify header information - headers already sent by ... /* Headers à mettre avant quoi que ce soit d'autre
	-*/ Fatal error: Maximum execution time exceeded in fichier.php on line 57 /* Boucle infinie
	-*/ Warning: fopen(compteur.txt): failed to open stream: Permission denied /* Pas la permission CHMOD
	-*/ Fatal error: Call to a member function fetch() on a non-object /* Erreur dans la requete SQL : afficher plus de details : */ $reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo())); /*

CONNARDS D'UTILISATEURS :
	-Toujours vérifier */ isset() /*
	-Pour formulaires :
		-Faille XSS (cross-site scripting) :
			-Empêche l'injection HTML
				-*/ htmlspecialchars() /* Provoque l'affichage de la balise plutôt que les prendre en compte
				-*/ strip_tags() /* Cache les balises
	-Pour cookies :
		-Utiliser httpOnly : 
			-*/ setcookie('name', 'value', time() + 2, null, null, false, true); /*
	-Pour BDD :
		-Injection SQL :
			-Utiliser requetes preparees, voir LIRE DES DONNEES

*/

?>