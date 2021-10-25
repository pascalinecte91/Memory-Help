Formulaire
```sh
Formulaire minimaliste

<form id="forml">
...
</form>
Formulaire de type POST avec une zone de regroupement.

<form name="form1" id="forml" action="xxx.php" method="post">
<fieldset><legend>Serie de champ :</legend>
...
</fieldset>
</form>
Attention, un <form> ne peut contenir que des tag de type BLOC !
```
Champ d'édition
```sh
Champ d'édition

<label for="ch1">Libellé bouton 1 : </label>
   <input name="ch1" id="ch1" type="text" value="par defaut" maxlength="20" size="20" />
Champ de mot de passe

<label for="ch2">Libellé bouton 1 : </label>
   <input name="ch2" id="ch2" type="password" value="" maxlength="20" size="20" />
```
Boite à cocher
```sh
Bouton coché

<input name="pt1" id="pt1" type="checkbox" checked="checked" />
   <label for="pt1">Libellé bouton 1 : </label>

Bouton décoché

<input name="pt2" id="pt2" type="checkbox" />
   <label for="pt2">Libellé bouton 2 : </label>
   ```

Bouton radio
```sh
Trois boutons avec le deuxième coché.

<input name="rd1" id="rd1-1" value="1" type="radio" />
   <label for="rd1-1">Libellé bouton 1 : </label>
<input name="rd1" id="rd1-2" value="2" type="radio" checked="checked" />
   <label for="rd1-2">Libellé bouton 2 : </label>
<input name="rd1" id="rd1-3" value="3" type="radio" />
   <label for="rd1-3">Libellé bouton 3 : </label>
```
Champ fichier
```sh
<label for="Fich">Fichier à charger : </label>
   <input name="Fich" id="Fich" type="file"/>
```
Liste déroulante
```sh
<select name="liste" id="liste">
   <option value="T1">Test 1</option>
   <option value="T2" selected="selected">Test 2</option>
   <option value="T3">Test 3</option>
</select>
```
Champ multiligne
```sh
<label for="Chp1">Gros champ : </label>
<textarea id="Chp1" cols="20" rows="4">
...
...
</textarea>
```
Bouton
```sh
Bouton envoi du formulaire.

<label for="ev1">Envoi : </label>
   <input name="ev1" id="ev1" type="submit" value="Envoi" />
Bouton simple.

<label for="bt1">Bouton : </label>
   <input name="bt1" id="bt1" type="button" value="Click" />
Bouton Reset des valeurs.

<label for="rs1">Reset : </label>
   <input name="rs1" id="rs1" type="reset" value="Reset" />
   ```