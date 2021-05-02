<?php


class DB

{
    public $host;
    public $username;
    public $password;
    public $charset;
    public $dsn;
    public $db;
    public $con;




    //default constructor
    function __construct()
    {
        $this->db = "id16494971_store";
        $this->host = "localhost";
        $this->username = "id16494971_storedb";
        $this->password = "DBpass!12345";
        $this->charset = "utf8mb4";
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $this->con = new PDO($this->dsn, $this->username, $this->password);
    }

    //check connectivity
    function check_Con()
    {
        try {
            $this->con = new PDO($this->dsn, $this->username, $this->password);
            
               } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }

    }
}