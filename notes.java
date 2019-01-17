VARIABLES
	//Déclaration :
		byte entierPetit; //Nombre entier situé entre -128 et 127 (1 octet)
		short entierMoyen; //Nombre entier situé entre -32768 et 32767 (2 octet)
		int entierGrand; //Nombre entier situé entre -2*10^9 à 2*10^9 (4 octets)
		int nbre1 = 2, nbre2 = 3, nbre3 = 0; //Possibilité de déclarer à la chaîne
		long entierTresGrand = 9460700000000000L; //Nombre entier −9×10^18 à 9×10^18, pour les long, rajouter un L à la fin de la valeur
		float nombreDecimal = 3.141592653f; //Nombre à virgule (4 octets), mettre un point à le place de la virgule et mettre un f à la fin
		double nombreDecimalLong = 0.333333333333333333333333333333333333333333334d;//Nombre à virgule avec plus de nombre derrière la virgule (8 octets), mettre d
		char charactere = 'a'; //Charactère, entre apostrophes ''
		boolean question = true; //Booléen : true ou false, sans guillemets
		String phrase = "Titi et Grominet"; //Chaîne de charactères, mettre la majuscule à String (car nom de classe) variable de type objet, à mettre entre guillemets ""
		String str = new String(); //Deuxième façon de déclarer
		str = "Titi et Grominet"; 
		String string = "Titi et Grominet"; //Troisième façon
		String chaine = new String("Titi et Grominet"); //Quatrième façon
	//Opérateur
		+ - / * % //Faire avec même type de variable
	//Incrémentation
		nbre1 += 1;
		nbre1++;
		++nbre1;
		nbre1 *= 2;
		nbre1 /= 2;
	//Concaténation
		String phraseResultat = "Le résultat est = " + resultat; //Utiliser +
	//Conversions
		double nbre1 = 10, nbre2 = 3;
		int resultat = (int)(nbre1 / nbre2); //Le résultat de la division de deux variables double sera une variable int
		double j = 2.9999999;
		int k = (int)j; //k vaut 2
		int nbre1 = 3, nbre2 = 2;
		double resultat = nbre1 / nbre2; //Pas besoin de caster car un double peut contenir une int


FONCTIONS BASIQUES
	System.out.println("Le résultat est = " + resultat); //Affiche Affiche le contenu d'une variable dans la console
	System.out.print(maVariable); //Idem