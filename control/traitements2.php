<?php

require_once 'server_start.php';
require_once '../modele/modelPage2.php';

if (isset($_POST['validate'])) {
    include "../modele/modelPage2.php";

    $nom = $_POST['nom_categorie'];
    $describe = $_POST['description_categorie'];

    $object = new saver();
    $object->saving($nom,  $describe);
}



header("location: ../pages/index.php");
