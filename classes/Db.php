<?php

//Données de connexion à la base de donnée, à changer pour votre environnement.
define("DB_DSN", "mysql:dbname=panier;host=localhost");
define("DB_USER", "root");
define("DB_PASS", "");

class DB {
    private static $instance;

    //Empêche l'utilisation du constructeur depuis l'extérieur de la classe
    private function __construct() {}
    //Empêche l'utilisation de __clone depuis l'extérieur de la classe
    private function __clone() {}

    /**
     * @return PDO
     * Retourne une instance de PDO connectée à la base de donnée.
     */
    public static function getInstance(  ) {
        if(!self::$instance){ // Si l'instance n'éxiste pas encore, on l'a créé.
            self::$instance = new PDO(DB_DSN, DB_USER, DB_PASS);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}