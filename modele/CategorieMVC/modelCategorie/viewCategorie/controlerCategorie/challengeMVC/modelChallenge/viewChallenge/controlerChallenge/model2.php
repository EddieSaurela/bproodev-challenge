<?php
include '../control/traitements2.php';

class insertionBD2 extends  traitement2{
    if (isset($_POST["submit"])) {
        $category_title = $_POST["noms_categorie"];
        $cat_describtion = $_POST["description_categorie"];
       
    }
        try {

            $dbco = new PDO("mysql:host=$host; dbname=$dbname", $user);
            $sql = "INSERT INTO categorie($category_title,$cat_describtion)
        VALUES(?,?)";
        }
    $statement=new $statement;
        $statement = $dbco->prepare($this-> dbconnect());
    $statement->execute(array(
        $_POST['noms_categorie'], $_POST['description_categorie']));

    echo "<script> alert ('Image successfuly added'); 
    document.location.href= '../pages/listes_des_challenges.php';
    </script>";;

catch(PDOException . '$e')
{
    echo "Erreur : " . $e->getMessage();
}
}
