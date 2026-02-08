<?php
require 'db-config.php';


/* INTRODUCTION PDO
    Se met souvent dauns un bloc try/catch pour gérer les exceptions avec le type PDOException.

    - new PDO : Crée une nouvelle instance de la classe PDO, qui représente une connexion à la base de données.
        Comme paramètres, on a :
            - $DB_DSN : Le DSN (Data Source Name) qui contient les informations nécessaires pour se connecter à la base de données.
            - $DB_USER : Le nom d'utilisateur pour se connecter à la base de données.
            - $DB_PASS : Le mot de passe pour se connecter à la base de données.
*/


/*  INTERROGER BASE DE DONNEES 
    Lors de la création de notre instance PDO, on peut avoir des options comme : 
        - PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' : pour définir l'encodage des caractères
        - PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION : pour lever une exception en cas d'erreur
        - PDO::ATTR_PERSISTENT => true : pour utiliser une connexion persistante (optionnel)

    - Avec l'bojet $PDO, on peut :
        - query() : Une methode pour exécuter une requête SQL
        - setFetchMode() : Une méthode pour définir le mode de récupération des données
            - FETCH_ASSOC : Récupère les données sous forme de tableau associatif
            - FETCH_NUM : Récupère les données sous forme de tableau numérique
            - FETCH_BOTH : Récupère les données sous forme de tableau associatif et numérique
            - FETCH_OBJ : Récupère les données sous forme d'objet
        - closeCursor() : Une méthode pour fermer le curseur de la requête (a utiliser surtout pour du SELECT)

        - fetch() : Une méthode pour récupérer une ligne de résultat (ne retourne qu'une ligne)
        - fetchAll() : Une méthode pour récupérer toutes les lignes de résultat (retourne un tableau de résultats)

*/

  
    try
    {
        $options =
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        $PDO = new PDO( $DB_DSN,$DB_USER, $DB_PASS,$options);

        $sql = 'SELECT * FROM etudiants';

        $results = $PDO->query($sql);
        

        // Ess avec echo 
        

        // while($data = $results->fetch(PDO::FETCH_ASSOC))
        // {
        //    echo '<p>'. $data['noms']. '/'. $data['lieuNaiss'] .'<p>' ;
             
        // }
        $list_clients = $results->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($list_clients as $client)
        {
            echo '<p>'. $client['noms']. '/'. $client['genre'] .'<p>' ;
        }
      
        $results->closeCursor();

    }
    catch(PDOException)
    {
        echo 'ERREUR : '.$p->getMessage();
    }
?>