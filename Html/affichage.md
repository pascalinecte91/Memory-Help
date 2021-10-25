Mise en gras, en italique
```sh
Mise en gras d'un texte

<strong>Texte mis en gras</strong>
Mise en italique d'un texte
```sh
<em>Texte mis en gras</em>
```
Saut de ligne ou trait
```sh
Saut de ligne

<br />
Trait de séparation
<hr />
```
Lien
```sh
Lien simple vers une adresse internet

<a href="http://mfay.free.fr">Exemple de lien</a>
Lien simple vers une identification sur la page

<a href="#idobjet">Exemple de lien sur un attribut id</a>
Attribut target, déconseillé en XHTML

<a href="#idobjet" target="_blank">Lien sur une nouvelle fenetre</a>
<a href="#idobjet" target="_top">Lien sur la même fenetre</a>
<a href="#idobjet" target="_self">Lien sur le même frame</a>
```
Image
```sh
Image simple

<img src="adresseimage.jpg" alt="commentaire sur l'image" />
Image avec zone clickable

<map id="ZoneImage">
   <area shape="rect" coords="10,10,30,30" href="http://www.google.fr" title="info-bulle">
</map>
<img src="adresseimage.jpg" usemap="#ZoneImage" alt="commentaire sur l'image" />
```
Indice ou exposant

```sh
Mise en indice

<sub>Texte mis en indice</sub>
Mise en exposant

<sup>Texte mis en exposant</sup>
Code informatique
Saisie clavier

<kbd>Texte mis en indice</kbd>
```
code informatique
```sh

<code>Texte mis en exposant</code>
sortie de code informatique

<samp>Texte mis en exposant</samp>
variable informatique

<var>Texte mis en exposant</var>
```
Sigle, citation et abbréviation
```sh
Abbréviation

<abbr title="Explication détaillée" lang="fr">abbrev.</abbr>
Acronyme

<acronym title="Explication détaillée" lang="fr">Accronyme.</acronym>
Citation

<cite lang="fr">Vindiou la belle église.</cite>
Citation courte

<q>To be or not to be.</q>
Définition de terme

<dfn>Ceci</dfn> est un terme que l'on décrit ici.
```
Insertion ou suppression
```sh
Texte supprimé

<del>Texte supprimé</del>

Texte inséré

<ins>Texte inséré</ins>
```
Formatage indéfini
```sh
Balise span

<span id="idobj" class="classobj">Texte présenté selon l'id ou la classe</span>
```