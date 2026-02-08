<?php
// print_r permet d'afficher le contenu d'un tableau de manière lisible
// <pre> permet de formater l'affichage en mode préformaté
//Il est souvent utilisé en duo avec print_r() pour rendre le résultat plus lisible.

// 👉 En effet, print_r() affiche les retours à la ligne, mais le HTML les ignore.
// Donc, si tu veux garder la mise en forme, tu entoures ton affichage avec des balises <pre> (comme "préformaté")
$tab_intengers =[
    'ages'=> 24,
    1=>11,
    2=>74,
    3=>86,
    4=>98,
    'date' =>date ('Y-m-d')



];
echo '<pre>';
print_r($tab_intengers);
echo '</pre>';
// ici on affivhe un élément du tableau
$tab_pop_ville =
[
    'paris' =>244444,
    'Kinshasa' => 553535,
    'lagos' => 35353,
    'New york' => 46464646,

];
// c'est le nombre d'habitants qui s'affiche 
echo $tab_pop_ville['paris'];

// foreach permet de parcoourir un tableau de maniere simplifie 
//syntaxe : foreach($tableau as $valeur){ //code à exécuter }
// ou foreach($tableau as $cle => $valeur){ //code à exécuter }
 echo "  <hr> <br> Partie avec Foreach: ";
foreach ($tab_pop_ville as $data)
    echo '<p>'.$data.'</p>';

// Fonction usuelles pour les tableaux :
// > array_push(): ajoute un ou plusieurs éléments à la fin d'un tableau.
// > array_pop(): supprime et retourne le dernier élément d'un tableau.
// > array_shift(): supprime et retourne le premier élément d'un tableau.




?>