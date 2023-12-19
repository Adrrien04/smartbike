<?php
include_once('model/bdd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $titre = $_POST['titre'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $stmt = $pdo->prepare('INSERT INTO commandes (titre, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$titre, $nom, $prenom, $email, $message]);

        // Redirection avec succès
        header('Location: ?page=commander&success=true');
        exit();
    } catch (PDOException $e) {
        // En cas d'échec, redirigez avec erreur
        header('Location: ?page=commander&error=true');
        exit();
    }
}
?>
