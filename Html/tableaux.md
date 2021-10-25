Légende de tableau
```sh
La légende est en première position du tableau.

<table>
<caption>Légende du tableau</caption>
...
</table> 
```
Bloc général pour le tableau
```sh
La balise "table" définit un tableau.

<table>
<tr><th>titre 1</th><th>titre 2</th></tr>
<tr><td>Ligne 1 Case 1</td><td>Ligne 1 Case 2</td></tr>
<tr><td>Ligne 2 Case 1</td><td>Ligne 2 Case 2</td></tr>
</table> 
```
Organisation du Tableau
```sh
Dans l'ordre : THEAD (lignes d'entête) -> TFOOT (pied de tableau) -> TBODY (corp du tableau).

La balise "TR" encadre les lignes du tableau.
La balise "TH" décrit une case de titre.
La balise "TD" décrit une case de données.

La balise "COLGROUP" permet d'appliquer un formatage à un ensemble de colonnes du tableau.

La balise "COL" permet d'appliquer un formatage à une colonne du tableau.

<table>

<colgroup class="colg">
   <col class="col1" />
   <col class="col2" />
</colgroup>

<thead><tr><th>titre 1</th><th>titre 2</th></tr></thead>

<tfoot><tr><td>total : 0</td><td>total : 0</td></tr></tfoot>

<tbody>
  <tr><td>Ligne 1 Case 1</td><td>Ligne 1 Case 2</td></tr>
  <tr><td>Ligne 2 Case 1</td><td>Ligne 2 Case 2</td></tr>
</tbody>

</table> 
```
Fusion de cases
```sh
Pour regrouper des cases d'une ligne :

<td colspan="3">...</td>
Pour regrouper des cases d'une colonne :

<td rowspan="3">...</td>
```