<?php
class Libro extends Publicacion
{
    private String $autoria;
    private int $numEjemplares;

    public function __construct($isbn, $titulo, $numPaginas, $autoria, $numEjemplares = 1){
        parent::__construct($isbn, $titulo, $numPaginas);
        $this->autoria = $autoria;
        $this->numEjemplares = $numEjemplares;
    }

    public function prestar(): int
    {
        if ($this->numEjemplares > 0) {
            $this->numEjemplares--;
            return $this->numEjemplares;
        }
        return -1;
    }

    public function __toString()
    {
        return parent::__toString() . "$this->autoria. $this->numEjemplares ejemplares.";
    }

    /**
     * Get the value of autoria
     */ 
    public function getAutoria()
    {
        return $this->autoria;
    }

    /**
     * Get the value of numEjemplares
     */ 
    public function getNumEjemplares()
    {
        return $this->numEjemplares;
    }
}
