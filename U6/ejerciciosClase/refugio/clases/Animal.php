<?php
abstract class Animal{
    private string $id;
    private float $peso;

    function __construct($id, $peso){
        $this->$id = $id;
        $this->$peso = $peso;
    }

    function __toString()
    {
        return "$this->id - $this->peso";
    }
}