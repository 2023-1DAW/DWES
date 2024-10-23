<?php

/*class Punto
{
    private int $coordX;
    private int $coordY;

    public function __construct(int $coordX, int $coordY)
    {
        $this->coordX = $coordX;
        $this->coordY = $coordY;
    }

    public function __tostring()
    {
        return $this->coordX . ", " . $this->coordY;
    }
}*/

class Punto
{
    private int $otro;
    public function __construct(
        private int $coordX,
        private int $coordY,
        private String $color = "sin color"
    ) {}

    public function __tostring()
    {
        return $this->coordX . ", " . $this->coordY . " De color " . $this->color;
    }

    public function getOtro()
    {
        return $this->otro;
    }

    public function setOtro($otro)
    {
        $this->otro = $otro;
    }
}
