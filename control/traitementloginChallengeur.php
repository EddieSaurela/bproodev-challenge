<?php
require_once 'classes.php';

if (isset($_SESSION["id_challengeur"])) {
    header("location: ../pages/index.php");
}

$login = new loginer();

if (isset($_POST['validate'])) {
    $result = $login->logInto($_POST["nom_challengeur"], $_POST["mdp_challengeur"]);

    if ($result == 1) {
        $_SESSION["logInto"] = true;
        $_SESSION["id_challengeur"] = $login->idUser();
        header("location: ../pages/index.php");
    } elseif ($result == 10) {
        echo 'Mot de passe incorect';
    } elseif ($rersult == 100) {
        echo 'Utilisateur non enregistrer dans la base de donnees';
    }
}
header("location: ../pages/index.php");
