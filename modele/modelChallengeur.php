<?php
require_once '../control/classes.php';
/*class connected
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

class registerer extends connected
{
    public function registration($nom, $prenom, $email, $password, $confirmpassword)
    {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM challengeur WHERE nom_challengeur= '$nom' OR email_challengeur= '$email' ");
        if (mysqli_num_rows($duplicate) > 0) {
            return 10;
            // Le nom ou le mail entrer a deja ete inserer.
        } else {
            if ($password == $confirmpassword) {
                $query = "INSERT INTO challengeur VALUES('', '$nom', '$prenom', '$email','$password')";
                mysqli_query($this->conn, $query);
                return 1;
                //registration successful
            } else {
                return 100;
                //password does not match
            }
        }
    }

    public function __destruct()
    {
        echo "The class register has been destroyed";
    }
}




class Selector extends connected
{
    public function selectUserById($id)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM challengeur WHERE id_challengeur=$id");
        return mysqli_fetch_assoc($result);
    }
}

class loginer extends connected
{
    public $id;
    public function logInto($nom, $password)
    {
        $result = mysqli_query($this->conn, "SELECT * FROM challengeur WHERE nom_challengeur='$nom' OR mdp_challengeur='$password'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if ($password == $row["mdp_challengeur"]) {
                $this->id = $row["id-challengeur"];
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
