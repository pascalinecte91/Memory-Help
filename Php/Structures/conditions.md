
Les condition IF .. ELSE de base.
```
if (condition)
{  ... ;
   ... ;
}

if (condition)
{  ... ;
   ... ;
}
else
{  ... ;
   ... ;
}
if (condition)
{  ... ;
   ... ;
}
elseif (condition)
{  ... ;
   ... ;
}
else
{  ... ;
   ... ;
}
```
Les cas de valeurs de variable.
```sh
switch ($variable)
{  case valeur1 :
   {  ... ;  
      break ;
   }
   case valeur2 :
   {  ... ;
      break ;
   }
   default :
   {  ... ;
      break ;
   }
}

Les ternaires : Il s'agit d'une condition en une ligne.

$reponse = ($age >= 18) ? 'Que oui' : 'Que non' ;
```
Les Boucles
```sh
Boucle While.

$i = 0;
while ($i <= 10)
{  ... ;
   ... ;
}

Boucle de 1 à 10.

for ($i = 1; $i <= 10; $i++)
{  ... ;
   ... ;
}

Boucle sur un tableau.

foreach ($UnTableau as $Element)
{  ... ;
   ... ;
}

Boucle sur un tableau de clés et valeurs.

foreach ($UnTableau as $cle => $Element)
{  ... ;
   ... ;
}
```