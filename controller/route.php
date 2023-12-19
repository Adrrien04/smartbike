<?php

include_once 'controller/VeloController.php';  // Assurez-vous que le chemin est correct

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if ($page == 'accueil') {
    include('view/accueil.php');
} elseif ($page == 'contact') {
    include('view/contact.php');
} elseif ($page == 'velo') {
    $veloController = new VeloController();
    $veloController->afficherVelo();
} elseif ($page == 'commander') {
    include('view/commander.php');
} elseif ($page == 'produit') {
    // Vérifiez si l'ID du vélo est défini dans l'URL
    if (isset($_GET['velo'])) {
        $veloId = $_GET['velo'];
        $veloController = new VeloController();
        $veloController->afficherProduit($veloId);
    } else {
        echo 'ID du vélo manquant';
    }
} else {
    echo 'page introuvable';
}

?>
