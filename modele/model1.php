<?php

include '../control/traitements1.php';


class connection
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "challengesbproo";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    }
}

class insert extends connection
{

    public function register1()
    {
        try {
            $insert = new insert;
            $query = "INSERT INTO challenge(titre_challenge,timing_challenge,niveau_challenge,insertion_imagechallenge,
            insertion_resourcechallenge,description_challenge) 
            VALUES(?,?,?,?,?,?)";
            mysqli_query($this->conn, $query);
            return 1;
            /*mysqli_query($this->conn, $query);
            $statement->execute(array(
                $_POST['titre_challenge'], $_POST['timing_challenge'],
                $_POST['niveau_challenge'], $_POST['insertion_imagechallenge'], $_POST['insertion_resourcechallenge'], $_POST['description_challenge'],
            ));
            echo "<script> alert ('Image successfuly added'); 
            document.location.href= '../pages/listes_des_challenges.php';
            </script>";;*/
        } catch (PDOException  $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
