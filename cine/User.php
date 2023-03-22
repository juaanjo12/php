<?php

class User
{
    private $id;
    private $nombre;
    private $apell;
    private $email;
    private $pass;

    public function __construct($id,$nombre,$apell,$email,$pass)
    {
        $this->$id = $id;
        $this->$nombre = $nombre;
        $this->$apell = $apell;
        $this->$email = $email;
        $this->$pass = $pass;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __set($prop, $val)
    {
        return $this->$prop = $val;
    }

}

?>