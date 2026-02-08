<!-- Programmation modulaire -->
<?php
// Include:Inclut un fichier, même si ce n’est pas vital.
// Si le fichier est introuvable, PHP affiche juste un warning (avertissement), mais continue d’exécuter le reste.
// Exemple : utiliser avec le fichier modresult.php dans lequel il y a une fonction hello().--------------------
// include 'modresult.php';
// echo "je suis le fichier index.php(exemple avec include)<br>" ;
// hello();
// -------------------------------------------
// Required : Même chose que include, mais plus strict.
// Si le fichier n’est pas trouvé, PHP arrête tout le script. c'est obligatoire.
// Donc pour les fichiers essentiels (connexion base, sécurité, etc.), on préfère require.
// Exemple :

require 'modhaut.php';


echo '<P>Je suis le fichier index.php </p>';



require 'modbas.php';



?>