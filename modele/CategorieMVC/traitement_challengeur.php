<?php

include 'signupSession_start.php';


class collectChallengeur extends challengeurSession_start
{

    public $nom;
    public $prenom;
    public $email;
    public $password;

    public function __construct(
        $nom,
        $prenom,
        $email,
        $password
    ) {
        $this->$nom;
        $this->$prenom;
        $this->$email;
        $this->$password;


        function traitementChallengeur($nom, $prenom, $email, $password)
        {
            if (isset($_POST["validate"])) {
                if (!isset($_POST['nom_challengeur']) || empty($_POST['nom_challengeur'])) {
                    echo ('Il faut un nom pour soumettre le formulaire.');
                    return;
                }
                if (!isset($_POST['prenom_challengeur']) || empty($_POST['prenom_challengeur'])) {
                    echo ('Il faut un prenom pour soumettre le formulaire.');
                    return;
                }
                if (!isset($_POST['email_challengeur']) || empty($_POST['email_challengeur'])) {
                    echo ('Il faut un email pour soumettre le formulaire.');
                    return;
                }
                if (!isset($_POST['mdp_challengeur']) || empty($_POST['mdp_challengeur'])) {
                    echo ('Ce mot de passe est incorect.');
                    return;
                }

                $nom = $_POST['nom_challengeur'];
                $prenom = $_POST['prenom_challengeur'];
                $email = $_POST['email_challengeur'];
                $password = $_POST['mdp_challengeur'];
            }
        }
    }
}



var_dump($nom . '<br> ' . $prenom . '<br>' . $email);
//header('location:../modele/challengeurModel.php');
?>
<html>

</html>