/*JAVASCRIPT

Types de valeurs : 
    -Nombres (entiers ou réels)
    -Chaînes :
        -Délimitée par des */ "" /* ou */ '' /* mais plutôt */ "" /*
        -Pour inclure des caractères spéciaux : */ \ /* (exemple : */ \n /*, retour à la ligne)
        -Concaténation : utiliser + */ "bon" + "jour" /* donne */ "bonjour" /*
    -Booléenne :
        -Vrai
        -Faux
    -Affichage d'une valeur :
        -*/ console.log("Bonjour !"); /*
        -*/ console.log(9 + 4); /*

Commentaires :
    -// pour une ligne
    -/**/ /*pour plusieurs lignes

Variables : 
    -Propriétés :
        -Nom : A, b, 0 (pas en première position), certains caractères (ex : §_)
        -Valeur : Donnée mémorisée
        -Type : rôle et opérations applicables (pas comme en C ou Java, typage statique, Javascript ne demande pas de définir le type de variable : typage dynamique)
    -Déclarer une variable :
        -*/ var a; /* 
    -Afficher une variable : 
        -*/ console.log(a); /*
        -*/ console.log("Valeur de f : " + f); /*
    -Affecter une valeur à une variable : 
        -*/ a = 3.14; /* = : opérateur d'affectation
        -*/ var a = 3.14; /* Déclaration et affectation en même temps
    -Incrémentation : 
        -*/ a += 3; /* Incrémente a de 3
        -*/ a++; /* Incrémente a de 1
    -*/ var g = "cinq" * 2; /* Valeur : NaN : Not a Number
    -Conversion explicite : 
        -*/ h = Number("5"); /* Convertit une chaîne en nombre
        -*/ h = String("cinq"); /* Convertit un nombre en chaîne
    -*/ var prenom = prompt("Entrez votre prénom :"); /* Ouvre une boîte de dialogue pour demander le prénom de l'utilisateur (toujours de type chaîne, donc a convertir si besoin */ var nb = Number(prompt("Entrez un nombre : ")); /*)
    -*/ alert("Bonjour, " + prenom); /* Ouvre la boîte de diaolgue affichant le message
        
Conditions : 
    -*/ === /* Egal à
    -*/ !== /* Différent de
    -*/ < /* Inféieur à
    -*/ <= /* Inférieur ou égal à
    -*/ > /* Supérieur à 
    -*/ >= /* Supérieur ou égal à
    -*/ && /* et
    -*/ || /* ou
    -*/ ! /* non : inverse la valeur d'une condition
    -if/else :
        -*/ if (condition) {
            //Instrucions si condition vraie
        } /*
            -*/ if ((nombre >= 0) && (nombre <= 100)) {} /*
        -*/ else if (condition) {} /* Possibilité d'en mettre plusieurs
        -Accolades pas obligatoires si instruction unique
        -*/ else {
            //Instructions si condition fausse
        } /*
    -switch :
        -*/ switch (expression) {
                case valeur1:
                    // instructions exécutées quand expression vaut valeur1
                    break;
                default:
                    // instructions exécutées quand aucune des valeurs ne correspond
                } /*
        
Boucles :
    -while :
        -*/while (condition) {
            // instructions exécutées tant que la condition est vérifiée
        }/* Faire attention aux boucles infinies
    -for :
        -*/ for (initialisation; condition; étape) {
            // instruction executées tant que la condition est vérifiée
        } /* Faire attention de pas modifier le compteur dans la boucle
    

Chaines de caracteres :
    -Caracteres speciaux : 
        -Utiliser */ \ /*
        -*/ \n /* Saut de ligne
        -*/ \0 /* Caractere NUL
        -*/ \'' /* Apostrophe (Ne mettre qu'un)
        -*/ \"" /* Guillemet (Ne mettre qu'un)
        -*/ \\ /* Antislash
        -*/ \r /* Retour chariot
        -*/ \v /* Tabulation verticale
        -*/ \t /* Tabulation
        -*/ \b /* Retour arriere
        -*/ \f /* Saut de page (form feed)
        -*/ \uXXX /* Point de code Unicode
        -*/ \xXX /* Caractere Latin-1
    -longueur d'une chaine :
        -*/ "ABC".lenght /* = 3
    -Cassure : 
        -*/ "Bora-Bora".toLowerCase(); /* Conversion en minuscules bora-bora
        -*/ "Bora-Bora".toUpperCase(); /* Conversion en majuscules BORA-BORA
    -Attention, lorsqu'on compare des chaines, c'est sensible a la casse :
        -*/ "Bora-Bora" === "bora-bora" /* = false
    -Accéder à un caractère à partir de son indice :
        -*/ "Bora-Bora".charAt(0) /* B
        -*/ "Bora-Bora"[1] /* o
        -*/ "Bora-Bora"[longueurSport - 1] /* a
    Parcourir une chaine caractere par caractere :
        -*/ for (var i = 0; i < "odile".length; i++) { console.log("odile"[i]); } /* 
    
Fonctions :
    -Déclaration :
        -*/ function maFonction() {/*Instructions*/} /*
    -Appel :
        -*/ maFonction(); /*
    -Instructions de fonctions :
        -*/ return valeurRetour; /* Retourne la valeur valeurRetour
    -Fonction paramètrique :
        -Déclaration :
            -*/ function maFonction(param1, param2, ...) {/* Instructions pouvant utiliser param1, param2, ...*/} /* 
        -Appel : 
            -*/ maFonction(arg1, arg2, ...); /* param1 reçoit la valeur de arg1, param2 la valeur de arg2, ...
    -Fonctions prédéfinies :
        -*/ prompt(); /* Affiche une boîte de dialogue pour demander à l'utilisateur de saisir une vcaleur
        -*/ alert(); /* Affiche une boîte de dialogue afficant un message
        -*/ Math.min(19, 9); /* 9, détermine le minimum parmis les arguments donnés
        -*/ Math.random(); /* Choisis un nombre aléatoire entre 0 et 1

    
-Objets :
    -Declaration :
        -*/ var stylo = {
                type: "bille",
                couleur: "bleu",
                marque: "Bic" }; /*
        -Possibilite de rajouter de nouvelles proprietes a postiori :
            -*/ stylo.prix = 2.5; /*
    -Constructeur : 
        -*/ function MonObjet() {
                // Initialisation de l'objet
            }
            // Instanciation d'un objet à partir du constructeur
            var monObj = new MonObjet(); /*
    -Acceder aux valeurs d'un objet:
        -Utiliser la notation pointee :
            -*/ stylo.type /* "bille"
        -Autre possibilite moins utilisee :
            -*/ stylo['type'] /*
    -*/ var perso = {
            nom: "Aurora",
            sante: 150,
            force: 25,

            // Renvoie la description du personnage
            decrire: function () { //Propriete de perso qui est une fonction qui renvoie la description du personnage sous forme textuelle
                var description = this.nom + " a " + this.sante + " points de vie et " +
                    this.force + " en force"; //this : l'objet sur lequel la methode a ete appele
                return description;
            } //Cette propriete est appele methode
        }; /*
    -Prototype :
        -*/ var unObjet = {a: 2 };
            // Crée unAutreObjet avec unObjet comme prototype
            var unAutreObjet = Object.create(unObjet); /*


-*/  /*

        
Vocabulaire :
    -Indentation : tabulation (tab)
    -Concaténation : utiliser le + dans console.log
    -Incrémentation : rajout d'une valeur à une variable
    -Type dynamique : language ne demandant pas de définir le type de variable
    -Type statique : language demandant le type de variable
    -Notation pointee : fait d'ajouter des points comme */ .lenght /*
    -Methodes : 
        -de type */ .toUpperCase() /*
        -Propriete dont la valeur est une fonction
    -Constructeur : Fonction qui cree un objet, l'initialise
    -Instanciation : Creation d'un objet a partir d'un constructeur
    -Prototype : Modele d'objet
    -Reference : lien vers un autre objet
    -Delegation/heritage : un objet délègue une partie de son fonctionnement à son prototype
        
*/