<?php
require_once '../modele/createurMVC/createurModel.php';
include '../pages/index.php';

if (isset($_SESSION["id_createurchallenge"])) {
    header("location: ../pages/index.php");
}

$login = new login();

if (isset($_POST['validate'])) {
    $result = $login->logInto($_POST["nom_createurChallenge"], $_POST["mdp_createurChallenge"]);

    if ($result == 1) {
        $_SESSION["logInto"] = true;
        $_SESSION["id_createurchallenge"] = $login->idUser();
        header("location: ../pages/index.php");
    } elseif ($result == 10) {
        echo 'Mot de passe incorect';
    } elseif ($rersult == 100) {
        echo 'Utilisateur non enregistrer dans la base de donnees';
    }
}
header("location: SITE_ROOT../pages/index.php");
