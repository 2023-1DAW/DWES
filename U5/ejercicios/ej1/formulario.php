<?php
//SEGUNDO: valido los datos con PHP
$nombre = $pass1 = $pass2 = $edad = $condiciones = "";
$nombreErr = $pass1Err = $pass2Err = $passDifErr = $condicionesErr = "";
$errores = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    $nombre = $_POST["nombre"];
    if (empty($nombre)){
        $nombreErr = "El nombre es obligatorio";
        $errores = true;
    }

    $pass1 = $_POST["pass1"];
    if (empty($pass1)){
        $pass1Err = "Contraseña obligatoria";
        $errores = true;
    }

    $pass2 = $_POST["pass2"];
    if (empty($pass2)){
        $pass2Err = "Tienes que repetir la contraseña";
        $errores = true;
    }

    if (!empty($pass1) && !empty($pass2) && $pass1 != $pass2){
        $passDifErr = "Las contraseñas no coinciden";
        $errores = true;
    }

    $edad = $_POST["edad"];
    
    if (!isset($_POST["condiciones"])){
        $condicionesErr = "Tienes que aceptar las condiciones";
        $errores = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio 1</title>
    <style>
        label.err{
            color: red;
            font-size: x-small;
        }
        input[type=text].err{
            border-color: red;
        }
    </style>
</head>

<body>
    <!-- PRIMERO: hago el formulario en HTML -->
    <form method="POST">
        <!-- TERCERO: imprimo errores y recupero valores -->
        <label>Nombre: *</label>
        <input type="text" name="nombre" 
            value="<?php echo $nombre;?>" 
            class="<?php if (!empty($nombreErr)) echo "err";?>">
        <label class="err"><?php echo $nombreErr;?></label>
        <br>
        <label>Contraseña: *</label>
        <input type="password" name="pass1">
        <label class="err"><?php echo $pass1Err;?></label>
        <br>
        <label>Repite la contraseña: *</label>
        <input type="password" name="pass2">
        <label class="err"><?php echo $pass2Err;?></label>
        <br>
        <label class='err'><?php if (!empty($passDifErr)) echo "$passDifErr<br>";?></label>
        <label>Grupo de edad:</label> <select name="edad">
            <option value="menor" <?php if ($edad=="menor") echo "selected";?>>Menor de edad</option>
            <option value="entre" <?php if ($edad=="entre") echo "selected";?>>Entre 18 y 65</option>
            <option value="mayor" <?php if ($edad=="mayor") echo "selected";?>>Mayor de 65</option>
        </select>
        <br><br>
        <input type="checkbox" name="condiciones">
        <label>Acepto las condiciones de uso</label>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        <br>
    </form>

    
</body>

</html>