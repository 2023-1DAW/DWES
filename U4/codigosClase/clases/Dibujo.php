<?php
interface Dibujo
{
    //Atributos: constantes y públicas
    public const MAX_TAM = 100;

    //Métodos: públicos y abstractos
    public function dibujar(): string;
}
