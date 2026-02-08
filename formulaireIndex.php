<!-- Diff entre methode Get et Post :
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Saisie d'information</h1>
    <form method="post" action="formulaireResult.php">
        <p><label for="iduser">utilisateur:</label> <input type="text" id="iduser" name="user" > </p>

        <p> <label for="idchoice">choix:</label> <input type="radio"  name="choice" id="idchoice" value="oui" >oui </p>

        <input type="radio" name="choice" id="idchoice" value="non" >Non</p>

        <p><input type="submit" name="valid_form" value="valider" ></p>



    </form>
</body>
</html>