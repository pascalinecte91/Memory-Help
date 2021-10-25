Coins arrondis
```sh
Coin arrondi sur tout un bloc.

div.page 
{  border-radius:         8px ;
   -webkit-border-radius: 8px ;
   -moz-border-radius:    8px ;
   -khtml-border-radius:  8px ;
}
Coin arrondi sur la partie haute d'un bloc.

div.haut
{  border-radius:         8px 8px 0 0 ;
   -moz-border-radius:    8px 8px 0 0 ;
   -webkit-border-top-left-radius:  8px ;
   -webkit-border-top-right-radius: 8px ;
   -khtml-border-radius:  8px 8px 0 0 ;
}
```
Ombrage
```sh
Ombrage décalé vers le bas et la droite, diffus de 6px d'une couleur grise.

div 
{  box-shadow:         3px 3px 6px #444 ;
   -moz-box-shadow:    3px 3px 6px #444 ;
   -webkit-box-shadow: 3px 3px 6px #444 ;
   -khtml-box-shadow:  3px 3px 6px #444 ;
}
Ombrage peu décalé sur un tableau.

table 
{  box-shadow: 1px 1px 7px #666 ;
   -moz-box-shadow: 1px 1px 7px #666 ;
   -webkit-box-shadow: 1px 1px 7px #666 ;
   -khtml-box-shadow: 1px 1px 7px #666 ;
}
CSS2 : Ombrage de texte décalé vers le bas et la droite, diffus de 3px d'une couleur grise.

h2, h3 
{  text-shadow:  2px 2px 3px #999;
}
```
Rotation
```sh
Rotation d'un bloc.

a:hover img 
{  transform-origin: 50% 50%;
   transform: scale(1.00) rotate(-5deg) ;
   -moz-transform-origin: 50% 50%;
   -moz-transform: scale(1.00) rotate(-5deg) ;
   -webkit-transform-origin: 50% 50%;
   -webkit-transform: scale(1.00) rotate(-5deg) ;
} 
```