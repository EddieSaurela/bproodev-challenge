<?php

class createurSession_start
{

    private function session_start($name, $email, $password)
    {
        if ($name === '' &&  $email === '' &&   $password = "") {
            $_SESSION['signup'] = true;
            $_SESSION['nom_createurChallenge'] = $name;
            $_SESSION['email_createurChallenge'] = $email;
            $_SESSION['mdp_createurChallenge'] = $password;
        } else {
            $_SESSION['signupSession_start'] = false;
        }
    }
}


class challengeurSession_start
{

    private function session_start($nom, $email, $password)
    {
        if ($nom === '' &&  $email === '' &&   $password = "") {
            $_SESSION['signup'] = true;
            $_SESSION['nom_challengeur'] = $nom;
            $_SESSION['email_challengeur'] = $email;
            $_SESSION['mdp_challengeur'] = $password;
        } else {
            $_SESSION['signupSession_start'] = false;
        }
    }
}
