<?php

include_once '../Projet-bproodev/bd/loginSession_start.php.php';
require '../Projet-bproodev/bd/traitement_createur.php';


class loginValidator extends challengeurLoginInfo
{
    private $name;
    private $password;


    public function __construct($name = null, $password = null)
    {
        $this->nom_challengeur =$name;

        $this->mdp_challengeur = $password;
    }

    private function emptyspaceLogin()
    {
        if (empty($this->nom_challengeur) || empty($this->mdp_challengeur)) {
            return 'incorrect';
        } else {
            return 'welcome';
        }
    }

    private function nameCheck()
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $this->nom_createurChallenge)) {
            return 'Error';
        } else {
            return 'Match';
        }
    }

    private function passwordMatch()
    {
        if ($this->mdp_createurChallenge !== $this->mdp_createurChallenge) {
            return false;
        } else {
            return true;
        }
    }

    public function validateLogin()
    {
        if (!$this->emptyspaceLogin()) {
            header("location:http://localhost/Projet-Proodev/Authentification-project?error=invalidEmail");
            die();
        }
        if (!$this->emptyspaceLogin()) {
            header("location:http://localhost/Projet-Proodev/Authentification-project?error=invalidEmail");
            die();
        }
        if (!$this->emptyspaceLogin()) {
            header("location:http://localhost/Projet-Proodev/Authentification-project?error=invalidEmail");
            die();
        }
        if (!$this->emptyspaceLogin()) {
            header("location:http://localhost/Projet-Proodev/Authentification-project?error=invalidEmail");
            die();
        }
    }
}
