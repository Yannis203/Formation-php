<?php
   
   setcookie("pseudo", "yan", time() + 3600);

if(isset($_COOKIE["pseudo"])) {
    echo "Bienvenue, " . $_COOKIE["pseudo"];
} else {
    echo "Bonjour visiteur !";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les cookies en php</h1> 
    <p>Langue de l'utilisateur : <?= htmlspecialchars($_COOKIE['pseudo']) ?></p>
</body>
</html>  


<!-- 
setcookie

-->