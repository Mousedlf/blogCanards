<?php

namespace Database;

class PDOMySQL
{

    /**
    utilité: connexion a la DB
     **/
    public static function getPdo():\PDO
    {

        $adresseServeurMySQL = "localhost";
        $nomDeDatabase = "ducks";
        $username = "donald";
        $password = "QfmKv68VjUULaib";

        $pdo = new \PDO("mysql:host=$adresseServeurMySQL;dbname=$nomDeDatabase",
            $username,
            $password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]
        );

        return $pdo;
    }









}