<?php

class Conexion extends PDO
{

    protected $dsn = "mysql:host=127.0.0.1;dbname=cine;charset=utf8mb4";
    protected $username = "root";
    protected $password = "";

    public function __construct()
    {
        parent::__construct($this->dsn, $this->username, $this->password);
    }

}