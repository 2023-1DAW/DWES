<?php
/**
 * Función para conectarme a la base de datos daw en localhost (docker...)
 * @return mysqli Objeto mysqli que representa una conexión con la BD
 */
function conectar(): mysqli
{
    $server = "127.0.0.1";  //localhost
    $user = "root";
    $pass = "Sandia4you";
    $dbname = "daw";
    $conexion = new mysqli($server, $user, $pass, $dbname);
    return $conexion;
}

function crearTabla(): bool
{
    $sql = "CREATE table if not exists users (email varchar(50) primary key, pass varchar(255))";
    $c = conectar();
    return $c->query($sql);
}

/**
 * Función para <b>insertar</b> un usuario en la base de datos daw en la tabla users con la contraseña hasheada.
 * @param mixed $email Email único (primary key)
 * @param mixed $pass Contraseña clara (no hasheada)
 * @return bool True si lo ha hecho correctamente, false en caso de errores
 */
function insertarUsuario($email, $pass): bool
{
    $sql = "INSERT into users (email, pass) values (?, ?)";
    $c = conectar();
    $prepared = $c->prepare($sql);
    $prepared->bind_param("ss", $email, $pass);
    return $prepared->execute();
}

/**
 * Summary of existeUsuario
 * @param mixed $email
 * @return bool
 */
function existeUsuario($email): bool {

}
