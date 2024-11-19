<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/DWES1EVALXXXYYY/clases/Animal.php";
class Ave extends Animal
{
    private bool $vuela;
    function __construct($especie, $peso, $vuela)
    {
        parent::__construct($especie, $peso);
        $this->vuela = $vuela;
    }

    function __toString()
    {
        $ret = parent::__toString();
        if ($this->vuela) {
            $ret .= " Sí vuela.";
        } else {
            $ret .= " No vuela.";
        }
        //Lo mismo de antes:
        //$ret .= $this->vuela ? " Sí vuela." : " No vuela";
        return $ret;
    }
}
