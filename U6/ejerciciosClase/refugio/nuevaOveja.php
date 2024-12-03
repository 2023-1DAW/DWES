<?php
$id = $peso = $especie = "";
$enferma = false;
$idErr = $pesoErr = $especieErr = "";
$errores = false;

include "./funciones/funciones.php";
include "./bd/funcionesBD.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = securizar($_POST["id"]);
    $peso = securizar($_POST["peso"]);
    $especie = securizar($_POST["especie"]);
    if (isset($_POST["enferma"])){
        $enferma = true;
    }

    //TODO comprobar errores

    if (!$errores){
        //Crear objeto Oveja
        $o = new Oveja($id, $peso, $especie, $enferma);
        
        //Guardar en la BD
        guardarOveja($o);

        //Ir a index.php
        header("Location: ./index.php");
        exit();
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva oveja</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        ID: <input type="text" name="id"><br>
        Peso: <input type="text" name="peso"><br>
        Especie: <input type="text" name="especie"><br>
        Enferma: <input type="checkbox" name="enferma"><br>
        <input type="submit" value="Crear"><br>
    </form>
</body>

</html>