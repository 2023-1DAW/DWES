<?php
class Persona
{
    //Atributos
    private String $nombre;
    private int $edad;
    private bool $conduce;

    //Constructor
    //Requisito de la clase: si solo conozco el nombre y la edad, el boolean conducir será false
    // Otro requisito: si no conozco la edad en el momento de crear el objeto, será -1.
    public function __construct(String $nombre, int $edad = -1, bool $conduce = false)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->conduce = $conduce;
    }

    //Getters y setters
    public function  getNombre(): String
    {
        return $this->nombre;
    }
    public function setNombre(String $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getConduce()
    {
        return $this->conduce;
    }

    public function setConduce($conduce)
    {
        $this->conduce = $conduce;
    }

    //Métodos
    public function esMayorDeEdad(): bool
    {
        /*if ($this->edad >= 18) {
            return true;
        }
        return false;*/
        return $this->edad >= 18;
    }


    public function aprenderAConducir($tiempo): bool
    {
        if ($this->conduce) {
            echo "Ya sabía conducir.";
            return false;
        } else {
            echo "He aprendido a conducir en $tiempo meses.";
            $this->conduce = true;
            return true;
        }
    }



    //Función que se llama info y DEVUELVE (no imprime) un String con la información del objeto
    //Por ejemplo: "Alberto tiene 29 años y sí sabe conducir"
    //Por ejemplo: "Julia tiene 40 años y no sabe conducir"
    public function info(): string
    {
        $ret = $this->nombre . " tiene " . $this->edad . " años y ";
        if ($this->conduce) {
            $ret .= "sí";
        } else {
            $ret .= "no";
        }
        $ret .= " sabe conducir";
        return $ret;
    }
}

$p1 = new Persona("Alberto", 29, true);
//$p = new Persona();   //Al hacer un constructor con parámetros, ya no puedo utilizar el vacío.
/*$p->setNombre("Juan");
$p->setEdad(22);
$p->setConduce(false);*/
echo $p1->getNombre() . " -- Edad: " .  $p1->getEdad();
$p2 = new Persona("Julia", 40);
echo $p2->getNombre() . " -- Edad: " .  $p2->getEdad();
$p3 = new Persona("Luz");
echo $p3->getNombre() . " -- Edad: " .  $p3->getEdad();

$p4 = new Persona("Lucia", 19, false);
echo $p4->info();
