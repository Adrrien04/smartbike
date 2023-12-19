<?php

include('model/bdd.php');

class VeloController {
    public function afficherVelo() {
        $velos = $this->getVelosFromDatabase();
        include('view/velo.php');
    }

    public function afficherProduit($veloId) {
        $velo = $this->getVeloById($veloId);

        if ($velo) {
            include('view/velo.php');
        } else {
            echo 'Vélo non trouvé';
        }
}


    PUBLIC function getVeloById($veloId) {
        try {
            $bdd = Bdd::connexion();
            $stmt = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
            $stmt->execute([$veloId]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération du vélo : " . $e->getMessage();
            return false;
        }
    }
    PUBLIC function getVelosFromDatabase() {
        try {
            $bdd = Bdd::connexion();
            $query = $bdd->query("SELECT * FROM articles");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des vélos : " . $e->getMessage();
            return false;
        }
    }
}

?>
