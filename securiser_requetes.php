<?php

    require 'db-config.php';
// NOTE ***************************************************

/*
       Sécuriser les requêtes SQL avec PDO :
         - quote() : Échappe les caractères spéciaux dans une chaîne.

         - prepare(<sql>) : Prépare une requête SQL avec des paramètres (? ou ':nom_parametre').
         - execute() : Exécute la requête préparée.
          - bindValue(<param>, <value>, <type>) : Lie une valeur à un paramètre (copie la valeur).
        - <type> : Spécifie le type de la valeur (PDO::PARAM_INT, PDO::PARAM_STR, etc.).
        - bindParam(<param>, <value>) : Lie une variable à un paramètre (prend la valeur au moment de l'exécution).

        - Option PDO::ATTR_EMULATE_PREPARES => false : Désactive l'émulation, utilise les vraies requêtes préparées du serveur.
*/







    try {
        $options =
        [
             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_EMULATE_PREPARES => false

        ];

        $PDO = new PDO($DB_DSN, $DB_USER , $DB_PASS , $options);

        $request = $PDO->prepare('SELECT * FROM etudiants WHERE noms = ?');

        $request->bindValue(1,"Lusambo Daniel");

        $request->execute();



        echo '<pre>';
        print_r($request->fetchAll(PDO::FETCH_ASSOC));
        echo '</pre>';



    }

    catch(PDOException $pe)
    {
        echo 'ERRUR:'.$pe->getMessage();
    }



?>