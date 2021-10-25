Type d'accès conseillé.
```sh
Connexion MySQL + Database MySQL.

$link = mysqli_connect($Base, $User, $Password, $Database) ;
if (mysqli_connect_errno($link)) { die('Erreur de connexion : '. mysqli_connect_error() ) ; }

if (!mysqli_set_charset($link, "latin1")) { die('Erreur de Pagecode : '. mysqli_connect_error() ) ; }
// if (!mysqli_set_charset($link, "utf8")) { die('Erreur de Pagecode : '. mysqli_connect_error() ) ; }
Déconnexion MySQL.

mysqli_close($link) ;
```
Boucle de lecture.
```sh
$sql    = '  SELECT  ZeRubr' ; 
$sql   .= '    FROM  TestPost' ;
$sql   .= "   WHERE  variab = '" . mysqli_real_escape_string($link, $NoPost) . "'" ;
$sql   .= '   ORDER  BY 1 ' ;
$sql   .= '   LIMIT  0,10 ' ;

$result = mysqli_query($link, $sql) or die('Select - Erreur SQL ! '.mysqli_connect_error() ) ;

$nbligne = mysqli_num_rows($result) ;

while ($row = mysqli_fetch_assoc($result))
{  echo htmlentities($row['ZeRubr']), ENT_COMPAT ,'ISO-8859-1')).'<br />'  ;
}

mysqli_free_result($result);
```
Simple lecture.
```sh
$sql    = 'SELECT ZeRubr FROM TestPost' ;

$result = mysqli_query($link, $sql) or die('Select - Erreur SQL ! '.mysqli_connect_error() ) ;
if ($row = mysqli_fetch_assoc($result))
{  echo htmlentities($row['ZeRubr'], ENT_COMPAT ,'ISO-8859-1')).'<br />'  ; 
}

mysqli_free_result($result);
```
Insertion données.
```sh
$sql =  'INSERT INTO TestPost VALUES (' ;
$sql .=  mysqli_real_escape_string($link, $NewNoPost) . ", "
$sql .=  "'" . mysqli_real_escape_string($link, $NewPosteur) . "', " ;
$sql .= 'current_date, ' ;
$sql .= " '" . mysqli_real_escape_string($link, $NewTitre) . "', " ;
$sql .= " '" . nl2br(mysqli_real_escape_string($link, $NewContenu)) . "' " ;
$sql .= ")" ;
$result = mysqli_query($link, $sql) or die('Insert - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);
```
Mise à jour de données.
```sh
$sql = 'UPDATE TestPost SET ' ;
$sql .= "       POSTEUR  = '" . mysqli_real_escape_string($link, $NewPosteur) . "' " ;
$sql .= "     , DATEPOST = current_date " ;
$sql .= "     , TITRE    = '" . mysqli_real_escape_string($link, $NewTitre) . "' " ;
$sql .= "     , CONTENU  = '" . nl2br(mysqli_real_escape_string($link, $NewContenu)) . "' " ;
$sql .= " WHERE NOPOST   = "  . mysqli_real_escape_string($link, $NoPost) ;
$result = mysqli_query($link, $sql) or die('Update - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);
```
Suppression de données.
```sh
$sql =  '  DELETE FROM TestPost ' ;
$sql .= "  WHERE  NOPOST = " . mysqli_real_escape_string($link) ;
$result = mysqli_query($link, $sql) or die('Delete - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);
```
Isolation session de COMMIT.
```sh
$sql =  "   START TRANSACTION " ;
$result = mysqli_query($link, $sql) or die('Start - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);

ou

mysqli_begin_transaction($link) ;
```
Commit.
```sh
$sql =  "   COMMIT " ;  
$result = mysqli_query($link, $sql) or die('Commit - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);
ou

mysqli_commit(link) ;
```
Rollback.
```sh
$sql =  "   ROLLBACK " ;  
$result = mysqli_query($link, $sql) or die('Rollback - Erreur SQL ! '.mysqli_connect_error() ) ;
mysqli_free_result($result);

ou

mysqli_rollback(link) ;
```