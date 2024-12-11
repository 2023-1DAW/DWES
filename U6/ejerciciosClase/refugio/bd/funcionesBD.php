<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/U6/ejerciciosClase/refugio/clases/Vaca.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/U6/ejerciciosClase/refugio/clases/Oveja.php";

function conectar()
{
    return new mysqli("127.0.0.1", "root", "Sandia4you", "refugio");
}

function crearTablas()
{
    $c = conectar();
    $sql = "CREATE table if not exists ovejas 
        (id varchar(50),
        peso decimal(10,2),
        especie varchar(50),
        enferma boolean)";
    $c->query($sql);
    $sql = "CREATE table if not exists vacas 
        (id varchar(50),
        peso decimal(5,2))";
    $c->query($sql);
    $c->close();
}

function guardarOveja($o)
{
    $c = conectar();
    crearTablas();
    $sql = "INSERT into ovejas (id, peso, especie, enferma)
        values (?, ?, ?, ?)";
    $ps = $c->prepare($sql);
    $ps->bind_param("sdsi", $id, $peso, $especie, $enferma);
    $id = $o->getId();
    $especie = $o->getEspecie();
    $enferma = $o->getEnferma();
    $peso = $o->getPeso();
    $ps->execute();
    $c->close();
}

function guardarVaca($v)
{
    $c = conectar();
    crearTablas();
    $sql = "INSERT into vacas (id, peso)
        values (?, ?)";
    $ps = $c->prepare($sql);
    $ps->bind_param("sd", $id, $peso);
    $id = $v->getId();
    $peso = $v->getPeso();
    $ps->execute();
    $c->close();
}

function leerVacas()
{
    $c = conectar();
    $sql = "SELECT * FROM vacas";
    $r = $c->query($sql);
    $c->close();
    return $r;
}

function leerOvejas()
{
    $c = conectar();
    $sql = "SELECT * FROM ovejas";
    $r = $c->query($sql);
    $c->close();
    return $r;
}

function eliminarOveja($id)
{
    $c = conectar();
    $sql = "DELETE FROM ovejas WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("s", $id);
    $c->close();
    return $ps->execute();
}

function eliminarVaca($id)
{
    $c = conectar();
    $sql = "DELETE FROM vacas WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("s", $id);
    $c->close();
    return $ps->execute();
}

function leerOveja($id)
{
    $c = conectar();
    $sql = "SELECT * FROM ovejas WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("s", $id);
    $ps->execute();
    $r = $ps->get_result();
    $r = $r->fetch_assoc();
    $o = new Oveja($r["id"], $r["peso"], $r["especie"], $r["enferma"]);
    $c->close();
    return $o;
}

function leerVaca($id)
{
    $c = conectar();
    $sql = "SELECT * FROM vacas WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("s", $id);
    $ps->execute();
    $r = $ps->get_result();
    $r = $r->fetch_assoc();
    $v = new Vaca($r["id"], $r["peso"]);
    $c->close();
    return $v;
}

function actualizarOveja($o)
{
    $c = conectar();
    $sql = "UPDATE ovejas SET peso = ?, especie = ?, enferma = ? WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("dsis", $peso, $especie, $enferma, $id);
    $id = $o->getId();
    $peso = $o->getPeso();
    $especie = $o->getEspecie();
    $enferma = $o->getEnferma();
    $ps->execute();
    $c->close();
}

function actualizarVaca($v)
{
    $c = conectar();
    $sql = "UPDATE vacas SET peso = ? WHERE id = ?";
    $ps = $c->prepare($sql);
    $ps->bind_param("ds", $peso, $id);
    $id = $v->getId();
    $peso = $v->getPeso();
    $ps->execute();
    $c->close();
}
