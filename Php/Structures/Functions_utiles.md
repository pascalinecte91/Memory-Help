```
- Calcul de longueur
$LongueurTexte = strlen($var) ;

- Remplacement de texte
$var = str_replace('old', 'new', $var) ;

- Mélange des lettres
$var = str_shuffle($var) ;

- Mise en minuscule
$var = strtolower($var) ;

- Mise en majuscule
$var = strtoupper($var) ;

- prend 5 caractères à partir de la première pos.
$var = substr($var, 0, 5) ;

- Recherche la position d'un texte.
$pos = strpos($var, "<br />") ;

- Retrait des blancs
$var = trim($var) ;
$var = ltrim($var) ;
$var = rtrim($var) ;

- Ajout de caractères d'échapement
$var = addSlashes($var) ;

- Retrait de caractères d'échapement
$var = stripSlashes($var) ;

Retrait des balises html et php
$var = strip_tags($var) ;

Affichage de variable
echo 'en Html, vieux php : ' . htmlentities($variabl, ENT_COMPAT ,'ISO-8859-1') ;
echo 'en Html : ' . htmlentities($variabl, ENT_COMPAT | ENT_HTML401 ,'ISO-8859-15') ;
echo 'en Xhtml : ' . htmlentities($variabl, ENT_COMPAT | ENT_XHTML ,'UTF-8') ;

- conversion des caractère spéciaux html
$var = htmlspecialchars($var, ENT_COMPAT ,'ISO-8859-1') ;
$var = htmlspecialchars($var, ENT_COMPAT | ENT_HTML401 ,'ISO-8859-15') ;
$var = htmlspecialchars($var, ENT_COMPAT | ENT_XHTML ,'UTF-8') ;

- Ajout d'un saut de ligne html à chaque nouvelle ligne
$var = nl2br($var) ;

- Découpage/regroupement d'une chaine en tableau
$tab = explode($separateur, $var [, $limite]) ;
$var = implode($separateur, $tab)

- - Ajout d'un saut de ligne html à chaque nouvelle ligne
$var = nl2br($var) ;

- Encodage d'un mot de passe : md5
$var = md5($PassWord) ;

- Présentation d'un décimal
$var = number_format($nb, 2, ',', '')
```
