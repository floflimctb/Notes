<?php 

//Code php a inserer dans code html

echo  "Bonjour" . $variable; /*Affiche un message "", separer differents types avec des points, possibilite d'integrer du code html entre ''*/
include("menu.php"); //inclusion du code menu.php
phpinfo(); //Affiche les infos sur php
&variable = 17; /*Variable : possilibites : int (nombres entiers), "string" ou 'string' (chaine de caracteres, \" pour afficher un guillement), float (nombres decimaux), bool (booleens : true ou false), NULL (rien)
Calculs : + - / * %
&variable++; Incrementation : $variable = $variable + 1;*/


````CONDITIONS````

if (condition) {
	/*Condition if else : si...
	Symboles :
	== est egal a
	> est superieur a
	< est inferieur a
	>= est superieur ou egal a
	<= est inferieur ou egal a
	!= est different de 
	AND && et
	OR || ou
	-boleens : 
	true ou false, possibilite de ne marquer que if ($variable) si c'est vrai et  if (! %variable) si c'est faux*/
}
elseif (condition) {
	//Sinon si...
}
else {
	//sinon...
}

switch (variable) {
	case 'value':
		//Dans le cas ou...
		break;
	
	default:
		//Defaut obligatoire
		break;
}

$majeur = ($age >= 18) ? true : false; //Condition ternaire : Si c'est vrai, alors, la valeur indiquée après le point d'interrogation (ici, true) sera affectée à la variable $majeur. Sinon, c'est la valeur qui suit le symbole « deux-points » qui sera affectée à $majeur.


````BOUCLES````

while (&variable <= 10) 
{
	/*Boucle : tant que*/
}

for ($i=0; $i < ; $i++) { 
	/*Boucle : for
	for (initialisation: valeur donnee au depart; condition: condition pour executer la boucle; incrementation: ajoute 1 a chaque boucle)*/
}


````TABLEAUX````

$prenoms = array ('Francois', 'michel', 'nicole'); /*Tableau (array) numerote (commence a la case 0, puis dans l'ordre)*/
//Deuxieme facon de faire un tableau numerote:
$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';
//Troisieme facon de faire un tableau numerote :
$prenoms[] = 'François'; // Créera $prenoms[0]
$prenoms[] = 'Michel'; // Créera $prenoms[1]
$prenoms[] = 'Nicole'; // Créera $prenoms[2]
//Affiche Case 1 du tableau numerote prenom = Michel
echo $prenoms[1]; 
//Affiche le contenu d'un tableau
print_r(&prenoms);

//Tableau associatif 
$coordonnees = array (
    'prenom' => 'François', //prenom est associe a Francois
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');
//Affiche la ville du tableau associe coordonnees : Marseille
echo $coordonnees['ville']; 

//Affiche le contenu d'un tableau : premiere facon
foreach($prenoms as $element)
{
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
//Pour affier la cle des tableaux associes
foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}
//Affiche le contenu d'un tableau : deuxieme facon
for ($numero = 0; $numero < 5; $numero++)
{
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
//Affiche le contenu d'un tableau (pour debug)
print_r(&prenoms);

FONCTIONS
$longeur = strlen($phrase); //Donne la longueur d'une chaîne de caractères (possibilité de bugs dans le décomptage)
$variable = str_replace('b', 'p', 'bim bam boum'); /*Résultat final : pim pam poum : cherche les b les remplace par p dans la chaine bim bam boum*/
$chaine = str_shuffle($chaine); //Mélange les caractères d'une chaîne
$chaine = strtolower($chaine); //Mets tous le caractères d'une chaîne en minuscule
$chaine = strtoupper($chaine); //Mets tous le caractères d'une chaîne en majuscule
$annee = date('Y'); //Donne l'année avec Y ou bien le mois avec m, le jour avec d, l'heure avec H, la minute avec i

function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël'); //Création et utilisation de la fonction DireBonjour

function VolumeCone($rayon, $hauteur)
{
   $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
   return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;

ERREURS :
Parse error: parse error in fichier.php on line 15 //Instruction php mal formée : point virgule manquant, oubli de fermer un guillemet, oubli dans la concoctenation (point pour separer les éléments dans echo), accolade mal fermée
Fatal Error: Call to undefined function: fonction_inconnue() in fichier.php on line 27 //Fonction inconnue
Warning: Wrong parameter count for fonction() in fichier.php on line 112 //Oubli ou rajout de paramètres pour une fonction
Cannot modify header information - headers already sent by ... //Headers à mettre avant quoi que ce soit d'autre
Fatal error: Maximum execution time exceeded in fichier.php on line 57 //Boucle infinie

echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !'; //affiche la variable mise en parametre dans la balise a au prealable
if (isset($_GET['prenom']) AND isset($_GET['nom'])) //Fonction isset() teste si une variable existe
$_GET['repeter'] = (int) $_GET['repeter']; //Transtypage : lire de droite à gauche : tout ce qui est envoyé à repeter ressort forcément en int
echo htmlspecialchars($_POST['prenom']); //Fonction htmlspecialchars : provoque l'affichage de la balise plutot que de l'affichage et empêche l'injection html
echo strip_tags($_POST['prenom']); //Idem mais au lieu d'afficher les balises il cache le code html tenté d'envoyer
move_uploaded_file //FOnction permettant d'accepter un fichier envoyé par formulaire

/*Traitement de fichier : 
$_FILES['monfichier']['name']
Contient le nom du fichier envoyé par le visiteur.
$_FILES['monfichier']['type']
Indique le type du fichier envoyé. Si c'est une image gif par exemple, le type seraimage/gif.
$_FILES['monfichier']['size']
Indique la taille du fichier envoyé. Attention : cette taille est en octets. Il faut environ 1 000 octets pour faire 1 Ko, et 1 000 000 d'octets pour faire 1 Mo.
Attention : la taille de l'envoi est limitée par PHP. Par défaut, impossible d'uploader des fichiers de plus de 8 Mo.
$_FILES['monfichier']['tmp_name']
Juste après l'envoi, le fichier est placé dans un répertoire temporaire sur le
serveur en attendant que votre script
PHP décide si oui ou non il accepte de
le stocker pour de bon. Cette variable
contient l'emplacement temporaire du
fichier (c'est PHP qui gère ça).
$_FILES['monfichier']['error']
Contient un code d'erreur permettant de savoir si l'envoi s'est bien effectué ou s'il
y a eu un problème et si oui, lequel. La
variable vaut 0 s'il n'y a pas eu d'erreur.*/

//Test traitement fichier : 
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                	// On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
}

/*VARIABLES SUPERGLOBALES : 
$_SERVER : ce sont des valeurs renvoyées par le serveur. Elles sont nombreuses et quelques-unes d'entre elles peuvent nous être d'une grande utilité. Je vous propose de retenir au moins$_SERVER['REMOTE_ADDR']. Elle nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.
$_ENV : ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.
$_SESSION : on y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur. Nous allons apprendre à nous en servir dans ce chapitre.
$_COOKIE : contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom par exemple.
$_GET : vous la connaissez, elle contient les données envoyées en paramètres dans l'URL.
$_POST : de même, c'est une variable que vous connaissez et qui contient les informations qui viennent d'être envoyées par un formulaire.
$_FILES : elle contient la liste des fichiers qui ont été envoyés via le formulaire précédent.*/

 session_start();  //Démarre le système de sessions. Si le visiteur vient d'arriver sur le site, alors un numéro de session est généré pour lui. Vous devez appeler cette fonction au tout début de chacune des pages où vous avez besoin des variables de session.
 session_destroy();  //Ferme la session du visiteur. Cette fonction est automatiquement appelée lorsque le visiteur ne charge plus de page de votre site pendant plusieurs minutes (c'est le timeout), mais vous pouvez aussi créer une page « Déconnexion » si le visiteur souhaite se déconnecter manuellement.

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