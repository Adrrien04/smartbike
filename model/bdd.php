<?php

class Bdd {
    public static function connexion() {
        try {
            $dsn = 'mysql:host=localhost;dbname=smartbike';
            $user = 'root';
            $pass = '';

            $bdd = new PDO($dsn, $user, $pass);

            return $bdd;
        } catch (PDOException $e) {

            echo "Erreur de connexion à la base de données : " . $e->getMessage();
            return null;
        }
    }
}

$bdd = Bdd::connexion();


if ($bdd) {
    echo "Connexion réussie!";
} else {
    echo "Erreur lors de la connexion à la base de données.";
}
