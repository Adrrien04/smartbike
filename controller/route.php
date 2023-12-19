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
elseif($page == 'getContact') {
    include('view/getContact.php');
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
elseif ($page == 'velo') {
    if (isset($_GET['velo'])) {
        $veloId = $_GET['velo'];
        $veloController = new VeloController();
        $veloController->afficherDetailsVelo($veloId);
    } else {
        echo 'ID du vélo manquant';
    }
} else {
    echo 'page introuvable';
}
?>
