```sh
API mysql - En cours d'abandon


Ce type d'accès est sur le point d'être abandonné de PHP, mais certain provider n'accepte que lui.

Connexion MySQL + Database MySQL.

$link = mysql_connect($Base, $User, $Password) or die('Erreur de connexion '.mysql_error()) ;

mysql_set_charset('latin1',$link);  // -- selon version Php - MySQL
// mysql_set_charset('utf8',$link) ;

mysql_select_db($Database) or die('Erreur de selection '.mysql_error()) ;
```
Déconnexion MySQL.
```sh
mysql_close($link) ;
```
Boucle de lecture.
```sh
$sql    = '  SELECT  ZeRubr' ; 
$sql   .= '    FROM  TestPost' ;
$sql   .= "   WHERE  variab = '" . mysql_real_escape_string($NoPost, $link) . "'" ;
$sql   .= '   ORDER  BY 1 ' ;
$sql   .= '   LIMIT  0,10 ' ;

$result = mysql_query($sql, $link) or die('Select - Erreur SQL ! '.mysql_error()) ;

$nbligne = mysql_num_rows($result);

while ($row = mysql_fetch_assoc($result))
{  echo htmlentities($row['ZeRubr']).'<br />'  ; 
}
```
Simple lecture.
```sh
$sql    = 'SELECT ZeRubr FROM TestPost' ;

$result = mysql_query($sql, $link) or die('Select - Erreur SQL ! '.mysql_error()) ;
if ($row = mysql_fetch_assoc($result))
{  echo htmlentities($row['ZeRubr'], ENT_COMPAT ,'ISO-8859-1')).'<br />'  ; 
}
```
Insertion données.
```sh
$sql =  'INSERT INTO TestPost VALUES (' ;
$sql .=  mysql_real_escape_string($NewNoPost, $link) . ", "
$sql .=  "'" . mysql_real_escape_string($NewPosteur, $link) . "', " ;
$sql .= 'current_date, ' ;
$sql .= " '" . mysql_real_escape_string($NewTitre, $link) . "', " ;
$sql .= " '" . nl2br(mysql_real_escape_string($NewContenu, $link)) . "' " ;
$sql .= ")" ;
$result = mysql_query($sql) or die('Insert - Erreur SQL ! '.mysql_error()) ;
```
Mise à jour de données.
```sh
$sql = 'UPDATE TestPost SET ' ;
$sql .= "       POSTEUR  = '" . mysql_real_escape_string($NewPosteur, $link) . "' " ;
$sql .= "     , DATEPOST = current_date " ;
$sql .= "     , TITRE    = '" . mysql_real_escape_string($NewTitre, $link) . "' " ;
$sql .= "     , CONTENU  = '" . nl2br(mysql_real_escape_string($NewContenu, $link)) . "' " ;
$sql .= " WHERE NOPOST   = "  . mysql_real_escape_string($NoPost, $link) ;
$result = mysql_query($sql) or die('Update - Erreur SQL ! '.mysql_error()) ;
```
Suppression de données.
```sh
$sql =  '  DELETE FROM TestPost ' ;
$sql .= "  WHERE  NOPOST = " . mysql_real_escape_string($NoPost, $link) ;
$result = mysql_query($sql) or die('Delete - Erreur SQL ! '.mysql_error()) ;
```
Isolation session de COMMIT.
```sh
$sql =  "   START TRANSACTION " ;
     mysql_query($sql, $link) or die('START : - Erreur SQL !'.mysql_error()) ;
```
Commit.
```sh
$sql =  "   COMMIT " ;  
     mysql_query($sql, $link) or die('COMMIT - Erreur SQL ! '.mysql_error()) ;
```
Rollback.
```sh
$sql =  "   ROLLBACK " ;  
     mysql_query($sql, $link) or die('ROLLBACK - Erreur SQL ! '.mysql_error()) ;
```