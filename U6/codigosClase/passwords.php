<?php

$server = "127.0.0.1";  //127.0.0.1
$user = "root";
$pass = "Sandia4you";
$dbname = "daw";
//Me conecto:
$conexion = new mysqli($server, $user, $pass, $dbname);


$alter = "ALTER table alumnos modify column pass varchar(255)";
if ($conexion->query($alter)) {
    echo "Alter hecho<br>";
}


//ESTO SERÍA LA PARTE DE SUSCRIPCIÓN (signup)
$passVisible = "admin1234";

$sql = "INSERT INTO alumnos (id, nombre, email, pass, edad) 
    VALUES (?, ?, ?, ?, ?)";
//1. Envío el sql preparado a la bd y me devuelve un objeto de la clase mysqli_stmt
$prepared = $conexion->prepare($sql);

//2. Bind (unir) asignar variables a cada ?
$prepared->bind_param("ssssi", $id, $nombre, $email, $pass, $edad);

//3. Asignar valores a las variables (no tienen que ser en orden)
$id = "1234";
$nombre = "Sara";
$email = "sara@gmail.com";
$edad = 55;
//Hasheo (resumo) la contraseña con el algoritmo por defecto:
$pass = password_hash($passVisible, PASSWORD_DEFAULT);

//4. Lanzo la consulta (porque ya está completa)
//$prepared->execute();


//ESTO LA PARTE DE INICIO DE SESIÓN (login)
$passVisibleIncorrecta = "admin1235";
$passVisibleCorrecta = "admin1234";
$user = "sara@gmail.com";

//Recojo de la base de datos la información que necesito
$sql = "SELECT pass from alumnos where email = ?";
$prepared = $conexion->prepare($sql);
$prepared->bind_param("s", $user);
$prepared->execute();
$resultado = $prepared->get_result();
if ($resultado->num_rows > 0) {
    echo "El usuario existe<br>";
    $fila = $resultado->fetch_assoc();
    //Leo el hash de la BD:
    $hash = $fila["pass"];
    if (password_verify($passVisibleCorrecta, $hash)) {
        echo "BIENNNN<br>";
    } else {
        echo "La contraseña no es correcta<br>";
    }
} else {
    echo "El usuario NO existe<br>";
}
