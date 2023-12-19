<?php
include_once 'model/SmartbikeModel.php';
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <?php
    $smartbikeModel = new SmartbikeModel();
    $latestBike = $smartbikeModel->getBike();

    if ($latestBike) {
        echo '<h2>Dernier Vélo ajouté</h2>';
        echo '<img src="' . $latestBike[0]['photo_url'] . '" class="img-fluid" alt="Vélo">';

        if (isset($latestBike[0]['nom'])) {
            echo '<p><strong>Nom du vélo:</strong> ' . $latestBike[0]['nom'] . '</p>';
        }

        if (isset($latestBike[0]['description'])) {
            echo '<p><strong>Description:</strong> ' . $latestBike[0]['description'] . '</p>';
        }

        if (isset($latestBike[0]['prix'])) {
            echo '<p><strong>Prix:</strong> ' . $latestBike[0]['prix'] . ' €</p>';
        }

    } else {
        echo '<p>Aucun vélo disponible pour le moment.</p>';
    }

    ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
