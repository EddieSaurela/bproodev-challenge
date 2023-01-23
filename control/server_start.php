<?php

session_start();

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


class connected
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

class databaseConnect
{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "challengesbproo";

    public function connecteur()
    {
        $con = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        return $con;
    }
}
