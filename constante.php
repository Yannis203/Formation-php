<?php
echo "cours sur les constantes en PHP <hr> <br> " ;
// 1. Définition d'une constante
// - Une constante est une valeur qui ne peut pas être modifiée une fois définie.
// - Elle est définie avec la fonction define().
// - Les constantes sont généralement écrites en majuscules par convention.
// 2. Syntaxe de la fonction define()
// define("NOM_CONSTANTE", "valeur_de_la_constante");
// 3. Exemple d'utilisation
// - Pour afficher une constante, on utilise son nom sans le signe dollar ($).
echo"exemple de déclaration de constante <br>"; 
define("NOM_CONSTANTE", "valeur_de_la_constante");
echo NOM_CONSTANTE ;
echo"<hr>";
// Exemple avec variables et constante 
echo "Exemple avec une variable et une constante <br>";
$config_pseudo_admin = "yannis";
define ("PSEUDO_ADMIN",$config_pseudo_admin);
echo PSEUDO_ADMIN;

?>