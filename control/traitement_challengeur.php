<?php

require_once 'server_start.php';
require_once '../modele/modelChallengeur.php';

if (isset($_SESSION["id_challengeur"])) {
    header("location: ../pages/index.php");
}

$register = new registerer();
if (isset($_POST["validate"])) {
    $result = $register->registration(
        $_POST["nom_challengeur"],
        $_POST["prenom_challengeur"],
        $_POST["email_challengeur"],
        $_POST["mdp_challengeur"],
        $_POST["confirmpassword"]
    );

    if ($result == 1) {
        echo 'Enregistrement reussie';
    } elseif ($result == 10) {
        echo 'Nom ou Email existe deja';
    } elseif ($result == 100) {
        echo 'Le mot de passe de correspond pas';
    }
}
header("location: ../pages/index.php");
