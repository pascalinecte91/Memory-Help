Méta taille de page
```sh
Navigateur réglé sur la largeur de l'écran :

<meta name="viewport" content="width=device-width">
Navigateur réglé sur la hauteur de l'écran :

<meta name="viewport" content="width=device-height">
Navigateur réglé sur une largeur de 600 pixels :

<meta name="viewport" content="width=640">
```
@média pour style
```sh
Style pour une page inférieure à 1000 pixels de large :

@media (max-width: 1000px)
{  p { ... }
   div { ... }
}

Style pour une page inférieure à 685 pixels (iPhone, iPod : paysage) :

@media handheld, 
only screen and (max-width: 685px),
only screen and (max-device-width: 685px)
{  p { ... }
   div { ... }
}
Style pour une page inférieure à 400 pixels (iPhone, iPod : portrait) :

@media handheld, 
only screen and (max-width: 400px),
only screen and (max-device-width: 400px)
{  p { ... }
   div { ... }
}
Style pour une impression :

@media print
{  p { ... }
   div { ... }
}
```