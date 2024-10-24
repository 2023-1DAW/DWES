<?php
class TrianguloEquilatero extends Poligono
{
    private float $lado;
    private float $altura;
    public function __construct(float $lado, float $altura, string $color = 'sin color')
    {
        parent::__construct(3, $color);
        $this->lado = $lado;
        $this->altura = $altura;
    }

    public function __toString(): string {
        return parent::__toString() . " lado: {$this->lado} - altura: {$this->altura}";
    }

    public  function calcularArea(): float {
        return $this->lado * $this->altura / 2;
    }
    public  function calcularPerimetro(): float {
        return $this->lado * 3;
    }
}
