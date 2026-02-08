<?php
echo "cours sur les conditions en PHP <hr> <br> " ;
// Opérateurs de comparaison :
//  == (égal à )
// === (identique à : en valeur et en , type)
// != (différent de)
// !== (pas identique à : en valeur et en type)
// > (plus grand que)
// < (plus petit que)
// >= (plus grand ou égal à)
// <= (plus petit ou égal à)
echo"Exemples conditions : <br>";
$age = 10;
if ($age < 18){
    echo " Tu es mineur <br>";
}
else if ($age == 18){
    echo "Tu as exactement 18 ans  <br>";
}
else {
    echo"Tu es majeur <br>";
}
echo"<hr>";
// Utilisation des switch case
echo"Utilisation des switch case <br>";
// Est utilisé quand on a plusieurs conditions à tester
$jours = 5;
switch ($jours){
    case 1:
        echo "Lundi";
        break;
    case 2:
        echo "Mardi" ;
        break;
    case 3:
        echo "Mercredi";
        break;
    case 4 :
        echo "jeudi";
        break;
    case 5:
        echo "vendredi";
        break;
    default:
        echo "Week-end";
        break;

}


?>