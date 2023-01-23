<?php
require_once 'server_start.php';
require_once '../modele/createurMVC/createurModel.php';


if (isset($_SESSION["id_createurchallenge"])) {
    header("location: ../pages/index.php");
}

$register = new register();
if (isset($_POST["validate"])) {
    $result = $register->registration(
        $_POST["nom_createurChallenge"],
        $_POST["prenom_createurChallenge"],
        $_POST["email_createurChallenge"],
        $_POST["tel_createurChallenge"],
        $_POST["mdp_createurChallenge"],
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
