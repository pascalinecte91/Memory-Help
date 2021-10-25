Gestion des sessions
```sh
Ouverture de la session (Début de document obligatoire).

session_start() ;
Fermeture de la session (Début de document obligatoire).

session_start() ;
session_destroy() ;
Ecriture d'une variable de session.

$_SESSION['AutorisationAcces'] = 'OK' ;
Lecture d'une variable de session.

if ($_SESSION['AutorisationAcces'] != 'OK')
{  header('Location: SaisirMotPass.php') ;
}
```
Gestion des cookies
```sh
Ecriture d'une variable de cookie pour 90 jours.

setcookie('MaVariableCOOKIE', $Var_a_Sauver, time()+60*60*24*90) ;
Lecture d'une variable de session.

if (isset($_COOKIE['MaVariableCOOKIE']))
{  $var_a_recuperer = $_COOKIE['MaVariableCOOKIE'] ; 