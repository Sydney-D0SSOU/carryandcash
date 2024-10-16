<?php
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'carrycash';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    $bdd = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD
    );
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo ('connexion réussi') ;
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
    echo ('connexion échoué') ;

}
?>