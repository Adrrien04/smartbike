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

        header('Location: ?page=commander&success=true');
        exit();
    } catch (PDOException $e) {
        header('Location: ?page=commander&error=true');
        exit();
    }
}
?>
