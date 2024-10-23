<?php
//require_once "./Animal.php";
class Leon extends Animal
{
    private bool $melena;
    //Constructor?
    public function __construct($alimentacion, $patas, $melena)
    {
        //Inicializar los atributos de la superclase
        parent::__construct($alimentacion, $patas);
        $this->melena = $melena;
    }

    //__toString?
    public function __toString(): string
    {
        $ret = "Leon " . parent::__toString();
        if ($this->melena) {
            $ret .= ". Sí";
        } else {
            $ret .= ". No";
        }
        $ret .= " tiene melena";
        return $ret;
    }

    public function rugir()
    {
        return "grrrrr";
    }
}

class LeonV2 extends AnimalV2
{
    public function __construct(
        $alimentacion,
        $patas,
        private bool $melena
    ) {
        parent::__construct($alimentacion, $patas);
    }
}

//Objetos para probar:
/*$a1 = new Animal("carnivoro", 3);
echo "<p>$a1</p>";
$a2 = new Animal("hervíboro");
echo "<p>$a2</p>";

$l1 = new Leon("carn", 4, true);
echo "<p>$l1</p>";
*/