<?php
//require_once '/xampp/htdocs/ProjetBproodev/modele/classesM.php';
//var_dump(is_file('../classesM.php')) . "\n";

/*class connection
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
}*/


class register extends connection
{
    public function registration($nom, $prenom, $email, $tel, $password, $confirmpassword)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM createur_challenge WHERE nom_createurChallenge= '$nom' OR email_createurChallenge= '$email' ");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            // Le nom ou le mail entrer a deja ete inserer.
        } else {
            if ($password == $confirmpassword) {
                $query = "INSERT INTO createur_challenge VALUES('', '$nom', '$prenom', '$email', '$tel', '$password')";
                mysqli_query($this->conn, $query);
                return 1;
                //registration successful
            } else {
                return 100;
                //password does not match
            }
        }
    }
}

class Select extends connection
{
    public function selectUserById($id)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM createur_challenge WHERE id_createurchallenge=$id");
        return mysqli_fetch_assoc($result);
    }
}


class login extends connection
{
    public $id;
    public function logInto($nom, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM createur_challenge WHERE nom_createurChallenge='$nom' OR mdp_createurChallenge='$password'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["mdp_createurChallenge"]) {
                $this->id = $row["id-createurchallenge"];
                return 1;
                // login successful
            } else {
                return 10;
                //Wrong password
            }
        } else {
            return 100;
            //User not registered
        }
    }
    public function idUser()
    {
        return $this->id;
    }
}
