display
```sh

display : Mode d'affichage (ou non) d'un bloc ou d'un élément.
display: none;
display: block;
display: inline;
```
width et height
```sh
width : Largeur d'un block. height : Hauteur d'un block.
width: 0;
width: 400px;
width: 50em;
width: 60%;
min-width: 100px;
max-width: 100px;
height: 0;
height: 60%;
min-height: 100px;
max-height: 100px;
```
position
```sh
position : Position d'un block.
position: static ;  /* par défaut */
position: absolute ;
position: fixed ;
position: relative ;
```
top, right, left, bottom
```sh
Top, Right, Left, Bottom : Pour placer un bloc (hors static). par rapport à un ou deux bords.
top: 5px ;
right: 10em ;
bottom: 0 ;
left: 10% ;
```
float
```sh
float : Pour laisser flotter un bloc à droite ou à gauche.
float: none ;
float: left ;
float: right ;
```
clear
```sh
clear : Pour obliger un bloc à se placer derriere un flottant.
clear: none ;
clear: left ;
clear: right ;
clear: both ;
```
overflow-x, overflow-y
```sh
overflow-x, overflow-y : Pour gérer le dépassement du contenu d'un objet en horizontal ou vertical.
overflow-x: auto ;
overflow-x: visible ;
overflow-y: hidden ;
overflow-y: scroll ;
```
z-index
```sh
z-index : hors static, permet de gérer l'empilement des blocs.
z-index: auto ;
z-index: 10 ;
z-index: 999 ;
```