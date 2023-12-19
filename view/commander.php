<?php
include_once('model/bdd.php');
$veloController = new VeloController(); // Assurez-vous d'instancier le contrôleur
$velos = $veloController->getVelosFromDatabase();
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<h1>Commander</h1>

<form action="?page=traitement_commande" method="post">
    <label for="velo">Sélectionnez un vélo :</label>
    <select name="velo" id="velo">
        <?php
        foreach ($velos as $velo) {
            echo '<option value="' . $velo['id'] . '">' . $velo['titre'] . '</option>';
        }
        ?>
    </select>

    <input type="hidden" name="titre" value="<?php echo $velo['titre']; ?>">

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" required>

    <label for="message">Message :</label>
    <textarea name="message" id="message" required></textarea>

    <input type="submit" value="Envoyer">
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
