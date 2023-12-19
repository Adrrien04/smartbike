<?php

$url = "https://world.openfoodfacts.org/api/v0/product/" . $_POST['codebar'] . ".json";
$data = file_get_contents($url);
$objet = json_decode($data);