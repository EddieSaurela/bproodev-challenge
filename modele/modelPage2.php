<?php

require_once '../control/server_start.php';
require_once '../control/traitements2.php';

class saver extends databaseConnect
{
    public function saving()
    {
        $conn = $this->connecteur();
        mysqli_query($conn, "INSERT INTO categorie (nom_categorie, description_categorie) VALUES( '?', '?')") or  die(mysqli_error($conn));
        echo '<script> alert(successful registration) </script>';
    }
}
