<?php
class Circunferencia
{

    //Atributos
    private float $radio;

    //Constructor
    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    //Getters y setters

    //Métodos
    public function calcularPerimetro(): float
    {
        return 2 * pi() * $this->radio;
    }

    public function calcularArea(): float
    {
        return pi() * $this->radio ** 2;
    }
    public function info(): String
    {
        return "Radio = " . $this->radio . " - Perímetro = " . $this->calcularPerimetro()
            . " - Área = " . $this->calcularArea();
    }

    public function __tostring(): String
    {
        return "Radio = " . $this->radio . " - Perímetro = " . $this->calcularPerimetro()
            . " - Área = " . $this->calcularArea();
    }
}
