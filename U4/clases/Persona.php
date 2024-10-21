<?php
class Persona
{
    //Atributos
    private String $nombre;
    private int $edad;
    private bool $conduce;

    //Constructores

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
}

$p = new Persona();
$p->setNombre("Juan");
$p->setEdad(22);
$p->setConduce(false);
echo $p->getNombre() . " -- Edad: " .  $p->getEdad();