<p><a href="formulaireIndex.php">&laquo;Retour au formulaire</a></p>
<pre>
<?php
// Variables superglobales : $_Get
//                           $_Post
// URL en get -> http://localhost/projets/cours_php/formulaireResult
//  htmlspecialchars sert à protéger ton site contre les attaques XSS (Cross-Site Scripting).
// Concrètement, ça convertit certains caractères spéciaux en entités HTML pour que le navigateur ne les interprète pas comme du code HTML ou JavaScript.
// // 
// isset():verifie qu'une variable existe et est non nulle
// empty(): verifie qu'une variable est vide
// is_null():verifie qu'une variable est nulle (la variable doit exister)
// isset() + empty() 
// True -> chaine vide 
        // FALSE 

// Exemple avec htmlspecialchars
// echo htmlspecialchars( $_GET['user']);
// Exemple d'utilisation avec isset , empty et is_null 
$nom=$_POST[ 'user'];
if (isset($nom))
    echo "oui";
else
    echo "nonnn";
 

?>
</pre>