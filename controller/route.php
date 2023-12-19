<?php

include_once 'controller/VeloController.php';
$pdo = Bdd::connexion();

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

$veloController = new VeloController();

if ($page == 'accueil') {
    include 'view/accueil.php';
}
elseif ($page == 'contact') {
    include 'view/contact.php';
}
elseif ($page == 'velo') {
    $veloController->afficherVelo();
}
elseif ($page == 'commander') {
    $velos = $veloController->getVelosFromDatabase();
    include 'view/commander.php';
}
elseif ($page == 'traitement_commande') {
    include 'view/traitement_commande.php';
}
elseif ($page == 'produit') {
    if (isset($_GET['velo'])) {
        $veloId = $_GET['velo'];
        $veloController->afficherProduit($veloId);
    } else {
        echo 'ID du vélo manquant';
    }
} else {
    echo 'page introuvable';
}
?>
