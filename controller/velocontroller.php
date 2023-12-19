<?php

include('model/bdd.php');

class VeloController {
    public function afficherVelo() {
        // Logique pour récupérer les vélos depuis la base de données
        $velos = $this->getVelosFromDatabase();

        // Inclure la vue correspondante
        include('view/velo.php');
    }

    private function getVelosFromDatabase() {
        try {
            // Connexion à la base de données (assurez-vous d'avoir la classe Bdd correctement définie)
            $bdd = Bdd::connexion();

            // Requête SQL pour récupérer tous les vélos
            $query = $bdd->query("SELECT * FROM articles");

            // Récupération des résultats sous forme de tableau associatif
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Gérer l'erreur ici (par exemple, log, affichage, etc.)
            echo "Erreur lors de la récupération des vélos : " . $e->getMessage();
            return false;
        }
    }
}

?>
