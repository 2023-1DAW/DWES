<?php
abstract class Equipo
{
    private string $id;
    private bool $averiado;

    function __construct($id, $averiado)
    {
        $this->id = $id;
        $this->averiado = $averiado;
    }

    function __toString()
    {
        $ret = $this->id;
        if ($this->averiado) {
            $ret .= " sí ";
        } else {
            $ret .= " no ";
        }
        $ret .= "está averiado";
        return $ret;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAveriado()
    {
        return $this->averiado;
    }

    function averiar()
    {
        $this->averiado = true;
    }
    function reparar()
    {
        $this->averiado = false;
    }
}
