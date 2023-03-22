<?php

class Peliculas
{
    private $id;
    private $titulo;
    private $director;
    private $año;

    public function __construct($id,$titulo,$director,$año)
    {
        $this->$id = $id;
        $this->$titulo = $titulo;
        $this->$director = $director;
        $this->$año = $año;
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
