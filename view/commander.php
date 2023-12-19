<?php
include_once('model/bdd.php');
$veloController = new VeloController();
$velos = $veloController->getVelosFromDatabase();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Commander</title>
</head>
<body>

<div class="container mt-5">
    <?php
    $success = isset($_GET['success']) ? $_GET['success'] : false;
    $error = isset($_GET['error']) ? $_GET['error'] : false;

    if ($success) {
        echo '<div class="alert alert-success" role="alert">Commande envoyée avec succès!</div>';
    } elseif ($error) {
        echo '<div class="alert alert-danger" role="alert">Erreur lors de l\'envoi de la commande.</div>';
    }
    ?>

    <h1 class="mb-4">Commander</h1>

    <form action="?page=traitement_commande" method="post">
        <div class="form-group">
            <label for="velo">Sélectionnez un vélo :</label>
            <select class="form-control" name="titre" id="velo" required>
                <?php foreach ($velos as $velo) : ?>
                    <option value="<?php echo $velo['titre']; ?>"><?php echo $velo['titre']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea class="form-control" name="message" id="message" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
