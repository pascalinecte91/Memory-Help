```sh
Fonction avec retour de valeur.

function ZeFonction($arg1, $arg2)
{  ... ;
   ... ;
   return $reponse
}
..
$var = ZeFonction(1, 2) ;

Fonction avec argument par défaut sans retour de valeur.

function ZeFonction($arg1 = 1, $arg2 = 2)
{  global $a, $b ;
   ... ;
   ... ;
}
..
ZeFonction() ;
```