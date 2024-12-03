<?php

function conectar()
{
    return new mysqli("127.0.0.1", "root", "Sandia4you", "refugio");
}

function crearTablas()
{
    $c = conectar();
    $sql = "CREATE table if not exists ovejas 
        (id varchar(50),
        peso decimal(5,2),
        especie varchar(50),
        enferma boolean)";
    $c->query($sql);
    $sql = "CREATE table if not exists vacas 
        (id varchar(50),
        peso decimal(5,2))";
    $c->query($sql);
}

function guardarOveja($o){
    $c = conectar();
    crearTablas();
    $sql = "INSERT into ovejas (id, peso, especie, enferma)
        values (?, ?, ?, ?)";
    $c->prepare($sql);
}
