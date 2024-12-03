<?php
class Oveja extends Animal
{
    private string $especie;
    private bool $enferma;

    function __construct($id, $peso, $especie, $enferma)
    {
        parent::__construct($id, $peso);
        $this->especie = $especie;
        $this->enferma = $enferma;
    }

    function __toString()
    {
        $ret = parent::__toString() . " - $this->especie - ";
        if ($this->enferma) {
            $ret .= "sí está enferma";
        } else {
            $ret .= "no está enferma";
        }
        return $ret;
    }

    /**
     * Get the value of especie
     */ 
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set the value of especie
     *
     * @return  self
     */ 
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get the value of enferma
     */ 
    public function getEnferma()
    {
        return $this->enferma;
    }

    /**
     * Set the value of enferma
     *
     * @return  self
     */ 
    public function setEnferma($enferma)
    {
        $this->enferma = $enferma;

        return $this;
    }
}
