<?php

namespace Model;

abstract class Connect {

    const HOST = "localhost";
    const DB = "mcd_cinema";
    const USER = "root";
    const PASS = "";

    public static function seConnecter(){
        try {
            $pdo = new \PDO(
                "mysql:host=".self::HOST.";dbname=".self::DB.";charset=utf8", self::USER, self::PASS
            );
            var_dump($pdo); // Affiche les détails de la connexion PDO
            return $pdo;
        } catch(\PDOException $ex) {
            return $ex->getMessage();
        }
    }
}