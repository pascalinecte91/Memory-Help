
Test de présence
```sh
Existence d'un fichier.

if (file_exists($ZeFich)) { ... }
Vérifie s'il s'agit d'un fichier.

if (is_file($ZeFich)) { ... }
Vérifie s'il s'agit d'un répertoire.

if (is_dir($ZeFich)) { ... }
```
Lecture de fichier
```sh
Lecture binaire.

if (!$ZeFich = fopen($AdressFich, "r"))
{  echo "Impossible d'ouvrir le fichier ($filename)";
   exit;
}
$lecture = fread($ZeFich,  filesize($filename)) ;
if ($lecture === FALSE)
{  echo "Impossible de lire le fichier ($AdressFich)";
   exit;
}
fclose($ZeFich) ;
```
Ecriture de fichier
```sh
Ecriture binaire.

if (!$ZeFich = fopen($AdressFich, "w"))
{  echo "Impossible d'ouvrir le fichier ($filename)";
   exit;
}
if (fwrite($ZeFich, $ZeText) === false)
{  echo "Impossible d'écrire dans le fichier ($AdressFich)";
   exit;
}
fclose($ZeFich) ;
```
Lecture de fichier dans un tableau
```sh
Lecture en Tableau.

$lines = array();
$lines = file($AdressFich);
```
Création de Repertoire
```sh
Création d'un repertoire avec des droits "700".

mkdir($ZeCheminRepert, 0700);
```
Saut de ligne PHP
```sh
$ZeSautDeLigne = PHP_EOL ;
```
Lecture d'un répertoire
```sh
Lecture d'un répertoire de fichiers dans un tableau

$repert = array();
$d = dir("./");
while (false !== ($entry = $d->read()))
{  $suff1 = substr($entry, 0, 1) ;
   $suff4 = substr($entry, strlen($entry) -4, 1) ;
   $suff5 = substr($entry, strlen($entry) -5, 1) ;
   if ( ($suff1 !== ".") and (($suff4 == ".") or ($suff5 == ".") ) 
   {  $repert[] = $entry ;
   }
}
$d->close();
```
Option d'ouverture de fichier
```sh
Modes de lecture de la fonction fopen.

mode	Description

'r'	Ouvre en lecture seule, et place le pointeur de fichier au début du fichier.

'r+'	Ouvre en lecture et écriture, et place le pointeur de fichier au début du fichier.

'w'	Ouvre en écriture seule ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.

'w+'	Ouvre en lecture et écriture ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.

'a'	Ouvre en écriture seule ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer.

'a+'	Ouvre en lecture et écriture ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer.

'x'	Crée et ouvre le fichier en lecture seule ; place le pointeur de fichier au début du fichier. Si le fichier existe déjà, fopen() va échouer, en retournant FALSE et en générant une erreur de niveau E_WARNING. Si le fichier n'existe pas, fopen() tente de le créer. Ce mode est l'équivalent des options O_EXCL|O_CREAT pour l'appel système open(2) sous-jacent. Cette option est supportée à partir de PHP 4.3.2 et fonctionne uniquement avec des fichiers locaux.

'x+'	Crée et ouvre le fichier pour lecture et écriture; le comportement est le même que pour 'x'.

'c'	Ouvre le fichier pour écriture seulement. Si le fichier n'existe pas, il sera crée, s'il existe, il n'est pas tronqué (contrairement à 'w') et l'appel à la fonction n'échoue pas (comme dans le cas de 'x'). Le pointeur du fichier est positionné au début. Ce mode peut être utile pour obtenir un verrou (voyez flock()) avant de tenter de modifier le fichier, utiliser 'w' pourrait tronquer le fichier avant d'obtenir le verrou (vous pouvez toujours tronquer grâce à ftruncate()).

'c+'	Ouvre le fichier pour lecture et écriture, le comportement est le même que pour le mode 'c'.
Ajouter 'b' au mode pour forcer une lecture en mode binaire.
```