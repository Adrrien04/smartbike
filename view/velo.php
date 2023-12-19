<?php
include_once('model/bdd.php');
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Ajoutez un peu de style pour les grilles */
        .velo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .velo-card {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
        }

        .velo-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Nos Vélos</h1>

<?php
if (is_array($velos) && count($velos) > 0) {
    echo '<div class="velo-grid">';

    foreach ($velos as $velo) {
        $photo_url = isset($velo['photo_url']) ? $velo['photo_url'] : 'chemin/par/defaut.jpg';

        echo '<div class="velo-card">';
        echo '<img src="' . $photo_url . '" class="velo-image" alt="Vélo">';
        echo '<p>' . $velo['titre'] . '</p>';
        echo '<p>Description : ' . $velo['description'] . '</p>';
        echo '<p>Prix : ' . $velo['prix'] . ' €</p>';
        echo '<hr>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo '<p>Aucun vélo disponible pour le moment</p>';
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
