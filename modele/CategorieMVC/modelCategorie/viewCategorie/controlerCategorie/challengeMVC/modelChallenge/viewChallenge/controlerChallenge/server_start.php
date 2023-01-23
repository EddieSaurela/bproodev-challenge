<?php

class basedeDonees
{
    private $host = 'localhost';
    private $dbname = 'challengesbproodev';
    private $user = 'root';
    private $mdp = '';

    protected function dbconnect()
    {
        $dbprefixe = 'mysql:host=localhost' . $this->host . ';dbname=challengesbproodev' . $this->dbname;
        $pdo = new PDO($dbprefixe, $this->user, $this->mdp);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
