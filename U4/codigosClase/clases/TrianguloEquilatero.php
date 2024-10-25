<?php
final class TrianguloEquilatero extends Poligono
{
    private float $lado;
    private float $altura;

    public static int $id;

    public function __construct(float $lado, float $altura, string $color = 'sin color')
    {
        parent::__construct(3, $color);
        $this->lado = $lado;
        $this->altura = $altura;
    }

    public function __toString(): string {
        return parent::__toString() . " lado: {$this->lado} - altura: {$this->altura}";
    }

    public function calcularArea(): float {
        return $this->lado * $this->altura / 2;
    }
    public  function calcularPerimetro(): float {
        return $this->lado * 3;
    }

    //No puedo sobrescribir un método final
    /*public function cambiarColor($nuevoColor)
    {
        parent::cambiarColor("Triangulo");
    }*/

    public static function calcularAreaTriangulo($base, $altura){
        return $base * $altura / 2;
    }

    /* Desde contextos estáticos no podemos llamar a contextos no estáticos
    public static function otro($a){
        return $a * $this->lado;
    }
*/

}
