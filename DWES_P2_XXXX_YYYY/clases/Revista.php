<?php
class Revista extends Publicacion
{
    private int $prestadas;

    public function __construct($isbn, $titulo, $numPaginas, $prestadas = 0){
        parent::__construct($isbn, $titulo, $numPaginas);
        $this->prestadas = $prestadas;
    }

    public function prestar(): int
    {
        $this->prestadas++;
        return $this->prestadas;
    }

    public function __toString()
    {
        return parent::__toString() . ". $this->prestadas prestadas.";
    }
}
