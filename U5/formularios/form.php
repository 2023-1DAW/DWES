<?php
//Variables en las que guardo los valores introducidos
$nombre = $pass = $fecha = $genero = "";

//Variables en las que guardo el mensaje de error
$nombreErr = $passErr = $fechaErr = $generoErr = "";

//Variable boolean que verifica si no ha habido errores:
$errores = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Aquí es donde voy a hacer la validación de datos
    //var_dump($_SERVER);
    var_dump($_POST);
    //var_dump($_GET);


    //Valido nombre:
    $nombre = $_POST["nombre"];
    if(empty($nombre)){
        //Está vacío, relleno los errores:
        $nombreErr = "El nombre es obligatorio";
        $errores = true;
    }

    //Valido contraseña
    $pass = $_POST["pass"];
    if (empty($pass)){
        $passErr = "Tienes que meter una contraseña";
        $errores = true;
    }

    //Valido fecha nacimiento
    $nacimiento = $_POST["nacimiento"];

    //Valido genero
    $genero = $_POST["genero"];

    //Si todo está bien validado, me voy a home.php (ESTO LA SEMANA QUE VIENE)
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
</head>

<body>
<?php include "./partes/menu.php"; ?>
    <?php
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Nombre y apellidos: *</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <span class="error"><?php echo $nombreErr; ?></span>
        <br>
        <label>Contraseña: *</label>
        <input type="password" name="pass">
        <span class="error"><?php echo $passErr; ?></span>
        <br>
        <label>Fecha de nacimiento: </label>
        <input type="date" name="nacimiento"><br>
        <!-- Radio buttons -->
        <label>Género: </label><br>
        <input type="radio" name="genero" value="mujer" >Mujer<br>
        <input type="radio" name="genero" value="hombre" >Hombre<br>
        <input type="radio" name="genero" value="otro">Otro / NSNC<br>  <!-- para el lunes recuperar el radio marcado -->
        <input type="submit" value="Enviar">
    </form>


    <!-- Si el formulario se ha rellenado correctaemnte, que me imprima los datos -->
     <!-- Simulo home.php -->

     <?php
     if (!$errores){
        echo "<h2>Estos son tus datos</h2>";
        echo "<p>Tu nombre es $nombre, tu contraseña $pass, 
            has nacido el $nacimiento y tu género es $genero.</p>";
     }
     ?>
</body>
<?php include "./partes/pie.php"; ?>
</html>