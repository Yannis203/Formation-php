<?php
// windows : \r\n , pour le retour a la ligne 
// fopen sert a ouvrir un fichier pour le lire , le modifier ou ecrire dedans 
// Modes d'ouvertures:
// | Mode   |

// | `"r"`  | lecture seule, le fichier doit exister                                       |
// | `"w"`  | écriture seule, crée le fichier si n’existe pas, vide le contenu si existant |
// | `"a"`  | écriture seule, ajoute à la fin du fichier, crée si inexistant               |
// | `"r+"` | lecture et écriture, doit exister                                            |
// | `"w+"` | lecture et écriture, crée si inexistant, écrase si existant                  |
// | `"a+"` | lecture et écriture, ajoute à la fin                                         |

// fclose sert a fermer le fichier ouvert avec fopen
// Dans la condition on veut dire si le fichier n'a pas pu etre ouvert return ...
// fgetc() sert à lire un fichier caractère par caractère.
// je l'ai utilise avec while pour que ca puisse parcourir tout et non seulement un caractere
// file : renvoie l'information du fichier du fichier sous forme de tableau 
echo "cours fichier php <hr> <br>";
// Exo 1 lecture du fichier :

$myfile = fopen ("infos.txt","r") ;  
if(!$myfile)  
    exit("Ouverture du fichier impossible");  
    
 while ($str = fgetc($myfile)) 
    echo  $str .'<br>';



if (!fclose($myfile))
    exit("echeecccccccc fermeture du fichier impossible");  
// Exo 2  lecture du fichier avec la fonction file :  
// $infos = file ("infos.txt");
// echo '<pre>';
// print_r($infos);
// echo '</pre>';

// Exo 3 Ecriture  
$myfile2 = fopen("infos.txt","ab+");
if(!$myfile2)
    exit("ouverture du fichier impossible");

fputs($myfile2," nouv information") .'<br>';

if(!fclose($myfile2))
    exit("fermeture du fichier impossible");





?>