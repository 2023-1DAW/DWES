<?php
session_start();    //Abro sesión.
//session_destroy();    //Finaliza una sesión
require "./funciones.php";

$comentario = "";
$publico = false;
$comentarioErr = $comentarioCortoErr = "";
$errores = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Comprueba si he llegado a través del botón submit
    //Recojo los valores del formulario:
    $comentario = securizar($_POST["comment"]);

    //$publico = $_POST["public"];//No lo hago porque no existe ni no está marcado
    
    if(empty($comentario)){
        $comentarioErr = "El comentario es obligatorio";
        $errores = true;
    }else if (strlen($comentario)<5){
        $comentarioCortoErr = "El comentario es menor de 5 caracteres";
        $errores = true;
    }

    if (isset($_POST["public"])){
        $publico = true;    //Si no, será false.
    }

    //Si se ha verificado el formulario, abro sesión y me voy a index
    if (!$errores){
        $_SESSION["comment"] = $comentario;
        $_SESSION["public"] = $publico;
        $_SESSION["origin"] = "formComment";
       // $_SESSION["miNombre"] = "sete";


        //Redirijo a otra página (indexComentarios.php)
        header("Location: ./indexComentarios.php");
        //Termino la ejecución de este script
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
</head>
<body>
    <?php include "./partes/menu.php"; ?>
    <form method="POST" action="<?php echo securizar($_SERVER["PHP_SELF"]); ?>">
        <label>Comentario: *</label>
        <input type="text" name="comment" value="<?php if(!empty($comentarioCortoErr)) echo $comentario; ?>">
        <label class="error"><?php echo $comentarioErr ?></label>
        <label class="error"><?php echo $comentarioCortoErr ?></label>
        <br>
        <label>Quiero que sea público</label>
        <input type="checkbox" name="public" <?php if($publico) echo "checked"; ?>>
        <input type="submit" value="Enviar">
    </form>
</body>
<?php include "./partes/pie.php"; ?>
</html>