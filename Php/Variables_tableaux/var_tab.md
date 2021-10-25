```sh
Global et Static
Une variable dont la valeur sera modifiable et gardé à chaque appel de fonction.

static $count = 0;
static $connect = null;
Des variables disponibles partout.

global $a, $b;
```

Constantes

```sh
define('UNECONSTANTE', 10) ;
echo UNECONSTANTE ;
```

Affectation de variables

```sh
$VariableNumerique = 128 ;
$VariableAlphab1 = 'Oh le beau texte' ;
$VariableAlphab2 = "Oh le beau texte avec un retour chariot. \n" ;
$VariableAlphab3 = 'Oh le beau texte concaténé avec un retour chariot.' . "\n" ;
$VariableAlphab4 = "Oh le beau texte avec une variable $LaVariable et des \"guillemets échappés\"." ;
$VariableAlphab4 = 'Oh le beau texte avec une variable ' . $LaVariable . ' concaténée.' ;
$VariableBool = false ;
$VariableFloat = 3.141592 ;
```

Transtypage de variables

```sh
Les types possibles sont (int), (float), (string), (bool).

$VariableNumerique = (int)$VariableAlpha ;
```

Opérations simple

```sh
//  Attribution
$i = 5 ;
//  Ajout de 1
$i += 1;
//  Ajout de 1
$i++ ;
//  Concaténation de chaine
$var .= $texte ;
```

Gestion de tableaux

```sh
Déclaration de tableau.

$LeTablo = array() ;
$AutreTablo = array(1, 2, 'trois', false, 45.3) ;
Ajouter des valeurs à partir de 0 (compris).

$LeTablo = array() ;
$LeTablo[] = 'valeur 1' ;
$LeTablo[] = 'valeur 2' ;
$LeTablo[3] = 3 ;
$LeTablo[] = 'valeur 4' ;
Tableau associatif.

$LeTablo = array() ;
$LeTablo['cle'] = 'valeur' ;
$LeTablo['nom'] = 'Gotlib' ;
$LeTablo['prenom'] = 'Marcel' ;
$LeMemeTablo = array('cle' => 'valeur', 'nom' => 'Gotlib', 'prenom' => 'Marcel');
Nombre d'éléments d'un Tableau.

$LeNb = count($Tablo) ;
Recherche d'une clé.

$LeNo = array_search('Marcel', $LeTablo) ;
Existence d'une clé.

if (array_key_exists('prenom'))
{  echo 'trouvé !' ;
}
Vérification d'appartenance.

if (in_array('Marcel', $LeTablo))
{  echo 'trouvé !' ;
}
Tri d'un tableau

// Tri en ordre croissant
sort($tablo) ;

// Tri en ordre décroissant
rsort($tablo) ;
Supprimer une valeur

unset($tablo['prenom']) ;
```

Les variables super-globales

```sh
Variables superglobales (de type tableau).

Superglobale	Description
$_GET[...]	Variables récupérées dans l'URL.
$_POST[...]	Variables postées par un formulaire.
$_FILES[...]	Liste et caractéristique d'un fichier transmis.
$_SERVER[...]	Informations sur la requete en cours.
$_ENV[...]	Informations sur l'environnement.
```

Fonctions d'affichage

```sh
Ecriture de base.

echo 'en Html, vieux php : ' . htmlentities($variabl, ENT_COMPAT ,'ISO-8859-1') ;
echo 'en Html : ' . htmlentities($variabl, ENT_COMPAT | ENT_HTML401 ,'ISO-8859-15') ;
echo 'en Xhtml : ' . htmlentities($variabl, ENT_COMPAT | ENT_XHTML ,'UTF-8') ;
echo "un texte très beau : $variabl" ;
Debugage.

echo "une variable : $variabl" ;
print_r($ZeTablo) ;
var_dump($ZeObjet) ;
Affichage formaté.

// affiche : PHP 05, PHP 5.10,  PHP 101
printf('PHP %2d, PHP %.2f, PHP %b',   5.1,  5.1,  5.1) ;
```
