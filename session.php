<?php
/* 
    
Définition : une session permet de stocker des données côté serveur pour un visiteur entre plusieurs pages (ex. : utilisateur connecté, panier).
Comment ça marche (simple) : PHP crée un identifiant de session (un petit code) envoyé au navigateur dans un cookie. À chaque requête suivante, le navigateur renvoie cet identifiant : PHP retrouve alors les données associées côté serveur.


les sessions permettent d'enregistrer des informations en cours pendant une certaine durée 

    session_name() modifie le nom d'une session
    session_write_close supprime complètement la session
    session_status()    ->0(ou PHP_SESSION_DISABLED)
                        ->1(PHP_SESSION_NONE)
                        ->2(PHP_SESSION_ACTIVE)
*/
/*PHPSESSID */
/*session_start();/*Démmarage de la session */
/*$_SESSION['username']='eurekaeale';

unset($_SESSION['username']);/*supprime la session */
/*session_destroy();/*Fermeture de la session */

// session_id()
// session_start()
// session_regenerate_id(true)
// session_unset()
// sessiondestroy()
if(!session_id())
{
    session_start();
    session_regenerate_id(true);

}

// session_start();          

    $_SESSION['username']= 'user';
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Session en php</h1>
    <p>Bonjour<?= htmlspecialchars( $_SESSION ['username'])
 ?></p>

</body>
</html>