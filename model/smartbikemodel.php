<?php
include_once('bdd.php');

class SmartbikeModel {
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function getBike()
    {
        try {
            $query = $this->bdd->prepare("SELECT * FROM articles");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Gérer l'erreur ici (par exemple, log, affichage, etc.)
            echo "Erreur lors de la récupération des articles : " . $e->getMessage();
            return false;
        }
    }

    public function getBikeById($id)
    {
        try {
            $query = $this->bdd->prepare("SELECT * FROM articles WHERE id = :id");
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {

            echo "Erreur lors de la récupération de l'article : " . $e->getMessage();
            return false;
        }
    }
}
