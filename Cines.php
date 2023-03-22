<?php
class Cines
{
    private $id;
    private $nombre;
    private $direccion;
    private $localidad;

    public function __construct($id,$nombre,$direccion,$localidad)
    {
        $this->$id = $id;
        $this->$nombre = $nombre;
        $this->$direccion = $direccion;
        $this->$localidad = $localidad;
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