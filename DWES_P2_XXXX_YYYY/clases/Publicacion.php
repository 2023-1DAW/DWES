<?php
abstract class Publicacion{

    private String $isbn;
    private String $titulo;
    private int $numPaginas;

    public function __construct($isbn, $titulo, $numPaginas){
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->numPaginas = $numPaginas;
    }

    public abstract function prestar(): int;

    public function __toString()
    {
        return "$this->isbn - $this->titulo ($this->numPaginas)";
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Get the value of numPaginas
     */ 
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }
}