<?php
echo "Gestion d'erreur en PHP <hr> <br>";
// Note :
// error_reporting(); error_reporting() est une fonction PHP qui sert à indiquer à PHP quels types d’erreurs il doit afficher ou ignorer.
// >error_reporting(0) :

// Désactive totalement le rapport d'erreurs
// Aucune erreur ne sera générée par PHP
// Les erreurs existent toujours mais ne sont pas reportées
// >error_reporting(1) ou E_ERROR :

// Affiche uniquement les erreurs fatales
// N'affiche pas les avertissements (warnings) ni les notices
// Les erreurs qui empêchent l'exécution du script
// ini_set('display_errors')
// >ini_set('display_errors', 0) :

// Désactive l'affichage des erreurs dans le navigateur
// Les erreurs sont toujours enregistrées dans les logs si configuré
// Recommandé en production pour la sécurité
// ini_set>('display_errors', 1) :

// Active l'affichage des erreurs dans le navigateur
// Affiche les erreurs selon le niveau défini par error_reporting
// Utile en développement pour le debugging
// Utilisation typique
// set_error_handler() : Permet de définir une fonction personnalisée pour gérer les erreurs.


// function error_handler(int $errno,string $errmsg, string $errfile, int $errline ,array $errdatas)


error_reporting(1);
ini_get('display_errors', 1);

$my_error_handler = function (int $errno,string $errmsg , string $errfile,  int $errline)
{
    switch($errno){

        case E_WARNING:
            echo $errmsg;
            break;

          
        default:
            echo "Erreur non reconnue ...";
            break;
    }
};
set_error_handler($my_error_handler)

?>