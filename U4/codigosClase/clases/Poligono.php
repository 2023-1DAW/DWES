<?php
abstract class Poligono
{
    private int $numLados;
    private string $color;

    public function __construct(int $numLados, string $color = "sin color")
    {
        $this->numLados = $numLados;
        $this->color = $color;
    }

    function __toString(): string
    {
        return $this->numLados . " de color " . $this->color;
    }

    public abstract function calcularArea(): float;
    public abstract function calcularPerimetro(): float;

    public final function cambiarColor($nuevoColor)
    {
        $this->color = $nuevoColor;
    }
}
