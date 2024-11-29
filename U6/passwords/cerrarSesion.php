<?php

session_start();    //Tengo que iniciar sessión para poder destruirla
unset($_SESSION);   //No es necesario
session_destroy();

//Si existen cookies: eliminarlas
setcookie("conectado", $email, time() - 3600, "/");

//Redirigimos donde queramos (login):
header("Location: ./login.php");