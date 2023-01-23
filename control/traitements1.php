<?php

//require_once 'server_start.php';
require_once '../modele/model1.php';


class treat
{


    public $challenge_title = 'titre_challenge';
    public $challenge_timing = 'timing_challenge';
    public $challenge_level = 'niveau_challenge';
    public $challenge_image = 'insertion_imagechallenge';
    public $challenge_resource = 'insertion_resourcechallenge';
    public $challenge_description = 'description_challenge';



    public function traitement()
    {
        if (isset($_POST["submit"])) {
            $challenge_title = filter_input(INPUT_POST, 'titre_challenge', FILTER_SANITIZE_SPECIAL_CHARS);
            $challenge_timing = filter_input(INPUT_POST, 'timing_challenge', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $challenge_level = filter_input(INPUT_POST, 'niveau_challenge', FILTER_SANITIZE_NUMBER_FLOAT);
            $challenge_image = filter_input(INPUT_POST, 'insertion_imagechallenge', IMG_FILTER_SMOOTH);
            $challenge_resource = filter_input(INPUT_POST, 'insertion_resourcechallenge', FILE_USE_INCLUDE_PATH);
            $challenge_description = filter_input(INPUT_POST, 'description_challenge', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    public function cookies()
    {

        setcookie("titre_challenge", time() + 86400 * 30 * 12);
        setcookie("timing_challenge", time() + 86400 * 30 * 6);
        setcookie("niveau_challenge", time() + 86400 * 30 * 6);
        setcookie("insertion_imagechallenge", time() + 86400 * 30 * 6);
        setcookie("insertion_resourcechallenge", time() + 86400 * 30 * 6);
        setcookie("description_challenge", time() + 86400 * 30 * 6);
    }
}

class insertionBD1 extends treat
{

    public function insert()
    {
        if (isset($_POST["submit"])) {
            $challenge_title = $_POST["titre_challenge"];
            $challenge_timing = $_POST["timing_challenge"];
            $challenge_level = $_POST["niveau_challenge"];
            if ($_FILES["insertion_imagechallenge"]["error"] === 4) {
                echo
                "<script> alert ('image does not exists'); </script>";
            } else {
                $fileName1 = $_FILES["insertion_imagechallenge"]["name"];
                $fileSize1 = $_FILES["insertion_imagechallenge"]["size"];
                $tmpName1 = $_FILES["insertion_imagechallenge"]["tmp_name"];

                $validImageExtension1 = ['jpg', 'jpeg', 'pdf', 'docx', 'mp3', 'mp4', 'mov', 'avi'];
                $imageExtension1 = explode('.', $fileName1);
                $imageExtension1 = strtolower(end($imageExtension1));
                if (!in_array($imageExtension1, $validImageExtension1)) {
                    echo
                    "<script> alert ('Invalid iimage extension'); </script>";
                } else if ($fileSize1 > 50000000000) {
                    echo
                    "<script> alert ('Image size is too large'); </script>";
                } else {
                    $newImageName1 = uniqid();
                    $newImageName1 = '.' . $imageExtension1;

                    move_uploaded_file($tmpName1, 'mediasProjet/' . $newImageName1);
                }
            }


            if ($_FILES["insertion_resourcechallenge"]["error"] === 4) {
                echo
                "<script> alert ('image does not exists'); </script>";
            } else {
                $fileName = $_FILES["insertion_resourcechallenge"]["name"];
                $fileSize = $_FILES["insertion_resourcechallenge"]["size"];
                $tmpName = $_FILES["insertion_resourcechallenge"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'pdf', 'docx', 'mp3', 'mp4', 'mov', 'avi'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo
                    "<script> alert ('Invalid iimage extension'); </script>";
                } else if ($fileSize > 50000000) {
                    echo
                    "<script> alert ('Image size is too large'); </script>";
                } else {
                    $newImageName = uniqid();
                    $newImageName = '.' . $imageExtension;

                    move_uploaded_file($tmpName, 'mediasProjet/' . $newImageName);
                }
            }
            $challenge_description = $_POST["description_challenge"];
        }
    }
}


header('location: ../modele/model1.php');









/*session_start();
var_dump($_SESSION);
try {

    $dbco = new PDO("mysql:host=$serveur; dbname=$dbname", $user);

    $sql = "INSERT INTO challenge($challenge_title,$challenge_timing,$challenge_level,
    $challenge_image,$challenge_resource,$challenge_description )
        VALUES(?,?,?,?,?,?)";
    $statement = $dbco->prepare($sql);
    $statement->execute(array(
        $_POST['titre_challenge'], $_POST['timing_challenge'],
        $_POST['niveau_challenge'], $_POST['insertion_imagechallenge'], $_POST['insertion_resourcechallenge'], $_POST['description_challenge'],
    ));
    echo 'Vos informations ont bien ete prise en compte';
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}*/
