<?php
include_once('model/bdd.php');
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<h1>Nos Vélos</h1>

<?php
if (is_array($velos) && count($velos) > 0) {
    foreach ($velos as $velo) {
        $photo_url = isset($velo['photo_url']) ? $velo['photo_url'] : 'chemin/par/defaut.jpg';

        echo '<p>Image : <img src="' . $photo_url . '" class="img-fluid" alt="Vélo"></p>';
        echo '<p>Nom du vélo : ' . $velo['titre'] . '</p>';
        echo '<p>Description : ' . $velo['description'] . '</p>';
        echo '<p>Prix : ' . $velo['prix'] . ' €</p>';
        echo '<hr>';
    }
} else {
    echo '<p>Aucun vélo disponible pour le moment.</p>';
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
