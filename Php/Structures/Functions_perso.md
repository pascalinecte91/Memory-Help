Le remplacement de htmlentities.
```sh
L'encodage par défaut passe en UTF-8 à partir de la 5.4, pour éviter d'être géné par ce changement, j'externalise la fonction pour éviter les surprises.

// * * * Util Reception * * * * * * * * * * * * * * * * * * * * * * * * *
function affhtml($var)
{  // * * php 5.2 * *
   // return htmlentities($var, ENT_COMPAT, 'ISO-8859-15') ;
   // * * html 4 * *
   // return htmlentities($var, ENT_COMPAT | ENT_HTML401, 'ISO-8859-15') ;
   // * * xhtml * *
   return htmlentities($var, ENT_COMPAT | ENT_XHTML ,'UTF-8') ;
}
```
La réception des champs.
```sh
Pour récupérer le POST, sinon le GET, sinon la valeur par défaut. Prise en compte des magic quotes.

// * * * Util Reception * * * * * * * * * * * * * * * * * * * * * * * * *
function getGETPOST($trDef, $trGet, $trPost)
{  if ($trPost != '' and isset($_POST[$trPost]))
   {  return (get_magic_quotes_gpc()===1) ? stripslashes($_POST[$trPost]) : $_POST[$trPost] ; 
   }
   if ($trGet != '' and isset($_GET[$trGet]))
   {  return (get_magic_quotes_gpc()===1) ? stripslashes($_GET[$trGet]) : $_GET[$trGet] ; 
   }
   return $trDef ;
}
```
Des fonctions d'affichage.
```sh
Présentation des dates.

Fonctions diverses 
function date2SQL($TrDate) // -- Conversion en format SQL
{  if (substr($TrDate,4,1) == '-' and substr($TrDate,7,1) == '-')
   {  return $TrDate ; }
   if (substr($TrDate,2,1) == '/' and substr($TrDate,5,1) == '/')
   {  return substr($TrDate,6,4).'-'.substr($TrDate,3,2).'-'.substr($TrDate,0,2) ; }
   if (substr($TrDate,2,1) == '.' and substr($TrDate,5,1) == '.')
   {  return substr($TrDate,6,4).'-'.substr($TrDate,3,2).'-'.substr($TrDate,0,2) ; }
   return $TrDate ;
}

function date2AFF($TrDate) // -- Conversion en format Français
{  if (substr($TrDate,2,1) == '/' and substr($TrDate,5,1) == '/')
   {  return $TrDate ; }
   if (substr($TrDate,2,1) == '.' and substr($TrDate,5,1) == '.')
   {  return substr($TrDate,0,2).'/'.substr($TrDate,3,2).'/'.substr($TrDate,6,4) ; }
   if (substr($TrDate,4,1) == '-' and substr($TrDate,7,1) == '-')
   {  return substr($TrDate,8,2).'/'.substr($TrDate,5,2).'/'.substr($TrDate,0,4) ; }
   return $TrDate ;
}

function date2LONG($TrDate) // -- Conversion en format long
{  $recmois = array('01' => 'janvier', '02' => 'février', '03' => 'mars', '04' => 'avril', '05' => 'mai', '06' => 'juin', '07' => 'juillet', '08' => 'août', '09' => 'septembre', 10 => 'octobre', '11' => 'novembre', '12' => 'décembre') ;
   if (substr($TrDate,2,1) == '/' and substr($TrDate,5,1) == '/')
   {  return substr($TrDate,0,2).' '.$recmois[substr($TrDate,3,2)].' '.substr($TrDate,6,4) ; }
   if (substr($TrDate,2,1) == '.' and substr($TrDate,5,1) == '.')
   {  return substr($TrDate,0,2).' '.$recmois[substr($TrDate,3,2)].' '.substr($TrDate,6,4) ; }
   if (substr($TrDate,4,1) == '-' and substr($TrDate,7,1) == '-')
   {  return substr($TrDate,8,2).' '.$recmois[substr($TrDate,5,2)].' '.substr($TrDate,0,4) ; }
   return $TrDate ;
}

function ts2AFF($TrDate, $TrPrf) // -- Conversion timestamp en affichage clair
{  $dt = date2AFF($TrDate) ;
   $dj = date('d/m/Y', time()) ;
   $dh = date('d/m/Y', (time() - 86400) ) ;
   $dd = date('d/m/Y', (time() + 86400) ) ;
   if     ($dj == $dt)   { $dt = "aujourd'hui" ; }
   elseif ($dj == $dh)   { $dt = "hier" ; }
   elseif ($dj == $dd)   { $dt = "demain" ; }
   elseif ($TrPrf != '') { $dt = $TrPrf.' '.$dt ; }
   $hr = 0 + ( substr($TrDate,11,2) ) ;
   $hr = $hr.'h'.substr($TrDate,14,2) ;
   return $dt.' à '.$hr ;
}
```
Des fonctions de connexion, déconnexion et rollback.
```sh
Présentation des dates.

Partie Gestion SQL 

La connexion de base à faire une fois
On récupère la variable $link

function SQLconnex()
{  $link     = mysql_connect(BaseHost(), Baselogin(), Basepass()) or die('Erreur de connexion '.mysql_error()) ;
   mysql_set_charset('latin1',$link) ;   selon la version de PHP
 mysql_set_charset('utf8',$link) ;  Pour de l'UTF-8
   mysql_select_db(Basebase()) or die('Erreur de selection '.mysql_error());
   return $link ; 
}


Pb donc ROLLBACK + DIE (dans le cas ou on a démarrer une transaction)

function SQLrollback($link, $mess)
{  $sql =  "   ROLLBACK " ;
   mysql_query($sql, $link) or die('Erreur SQL !'.mysql_error() . ' / ' . $mess) ;
   die($mess) ;
}
```