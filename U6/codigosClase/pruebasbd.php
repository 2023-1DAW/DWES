<?php
$server = "127.0.0.1";  //127.0.0.1
$user = "root";
$pass = "Sandia4you";
$dbname = "daw";

$c = new mysqli($server, $user, $pass, $dbname);

//create table:
$sql = "create table if not exists alumnos (
    id varchar(8) primary key,
    nombre varchar(50) not null,
    email varchar(50) not null,
    pass varchar(50) not null, 
    edad int)";
    //

//query es un método de la clase mysqli que lanza una consulta SQL a la BD
if ($c->query($sql)) {
    echo "La tabla se ha creado correctamente<br>";
} else {
    echo "No ha funcionado<br>";
}

// INSERT:
$sql = "INSERT INTO alumnos (id, nombre, email, pass, edad) 
    VALUES ('259','Otro','o@a.com','admin12345',37)";

//$c->query($sql);    //lanza la consulta
//echo "Se han insertado " . $c->affected_rows . " filas<br>";


//UPDATE:
$sql = "UPDATE alumnos SET nombre = 'Juan', edad = 66 WHERE id = '259'";
$c->query($sql);    //lanza la consulta
echo "Se han actualizado " . $c->affected_rows . " filas<br>";

//DELETE:
$sql = "DELETE FROM alumnos WHERE id = '259'";
//$c->query($sql);    //lanza la consulta
echo "Se han eliminado " . $c->affected_rows . " filas<br>";

//SELECT
$sql = "SELECT * from alumnos";
$resultado = $c->query($sql);   //$resultado es de tipo mysqli_result
echo "El select me ha dado " . $resultado->num_rows . " filas<br>";
while (($fila = $resultado->fetch_assoc()) != null){
    //$fila es un array asociativo 
    //var_dump($fila);
    echo $fila['id'] . "<br>";
    echo $fila['nombre']. "<br>";
    echo $fila['email']. "<br>";
    echo $fila['pass']. "<br>";
    echo $fila['edad']. "<br><br><br><br>";
}

$sql = "SELECT email, pass From alumnos where id = '259'";
$resultado = $c->query($sql);
while ($fila = $resultado->fetch_assoc()){
    var_dump($fila);
}


//SENTENCIAS PREPARADAS
$sql = "INSERT INTO alumnos (id, nombre, email, pass, edad) 
    VALUES (?, ?, ?, ?, ?)";
//1. Envío el sql preparado a la bd y me devuelve un objeto de la clase mysqli_stmt
$prepared = $c->prepare($sql);

//2. Bind (unir) asignar variables a cada ?
$prepared->bind_param("ssssi", $id, $nombre, $email, $pass, $edad);

//3. Asignar valores a las variables (no tienen que ser en orden)
$pass = "1234";
$id = "449";
$nombre = "Sara";
$email = "a@s.com";
$edad = 55;

//4. Lanzo la consulta (porque ya está completa)
$prepared->execute();

//Para volver a utilizarla: solo los pasos 3 y 4:
$pass = "1234";
$id = "445";
$nombre = "Sara";
$email = "a@s.com";
$edad = 55;
$prepared->execute();

$pass = "1234";
$id = "447";
$nombre = "Sara";
$email = "a@s.com";
$edad = 55;
$prepared->execute();

$pass = "1234";
$id = "446";
$nombre = "Sara";
$email = "a@s.com";
$edad = 55;
$prepared->execute();

echo "---------------------------------<br>";
buscarMayores18($c);  
buscarMayoresAEdad($c, 55);

function buscarMayores18($conexion){
    //select * from alumnos where edad >= 18
    //No devuelve nada, imprime los resultados
    $r = $conexion->query("SELECT * from alumnos where edad >= 18");
    while($f = $r->fetch_assoc()){
        var_dump($f);
    }
}

//buscarMayoresAEdad($c, "1; delete from alumnos where 1=1;");
function buscarMayoresAEdad($conexion, $edad){
    //select * from alumnos where edad >= $edad
    //No devuelve nada, imprime los resultados
    $sql = "select * from alumnos where edad >= ?";
    $p = $conexion->prepare($sql);
    $p->bind_param("i", $edad);
    $p->execute();
    //Con los SELECT necesito recoger el mysqli_result con get_result
    $r = $p->get_result();
    while($f = $r->fetch_assoc()){
        var_dump($f);
    }
}

