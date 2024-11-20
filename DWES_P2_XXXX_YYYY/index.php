<?php
include "./funciones/funciones.php";
include "./clases/Publicacion.php";
include "./clases/Libro.php";
include "./clases/Revista.php";
session_start();

$isbn = $titulo = $num = $autoria = "";
$ejempalres = 1;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //var_dump($_POST);
    //Falta la comprobación de que estén rellenados
    $isbn = securizar($_POST["isbn"]);
    $titulo = securizar($_POST["titulo"]);
    $num = securizar($_POST["num"]);
    $autoria = securizar($_POST["autoria"]);
    if (isset($_POST["ejempalres"])) {
        $ejempalres = $_POST["ejempalres"];
    }
    if (isset($_POST["libro"])) {
        //He dado al submit de libro
        $l = new Libro($isbn, $titulo, $num, $autoria, $ejempalres);
        //var_dump($l);
        if (!isset($_SESSION["libros"])) {
            $_SESSION["libros"] = array();
        }
        $_SESSION["libros"][] = $l;
        //var_dump($_SESSION["libros"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./estilos/estilo.css">
</head>

<body>
    <?php
    include "./partes/menu.php";
    ?>
    <div class="contenedor">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="fila">
                <div class="col25">
                    <label>ISBN: *</label>
                </div>
                <div class="col75">
                    <input type="text" name="isbn"><br>
                </div>
                <div class="col25">
                    <label>Título: *</label>
                </div>
                <div class="col75">
                    <input type="text" name="titulo"><br>
                </div>
                <div class="col25">
                    <label>Número de páginas: *</label>
                </div>
                <div class="col75">
                    <input type="number" name="num"><br>
                </div>
                <div class="col25">
                    <label>Autoría: *</label>
                </div>
                <div class="col75">
                    <input type="text" name="autoria"><br>
                </div>
                <div class="col25">
                    <label>Ejemplares:</label>
                </div>
                <div class="col75">
                    <input type="number" name="ejemplares"><br>
                </div>
                <div class="fila">
                    <input type="submit" value="Crear libro" name="libro">
                    <input type="reset" value="Borrar">
                </div>
            </div>
        </form>
    </div>

    <?php
    if (isset($_SESSION["libros"]) && count($_SESSION["libros"])) {
        //Hago la tabla de libros
        echo "<table>";
        echo "<tr><th>ISBN</th><th>Título</th><th>Páginas</th><th>Autoría</th><th>Ejemplares</th></tr>";
        foreach($_SESSION["libros"] as $l){
            echo "<tr><td>{$l->getIsbn()}</td>
            <td>{$l->getTitulo()}</td>
            <td>{$l->getNumPaginas()}</td>
            <td>{$l->getAutoria()}</td>
            <td>{$l->getNumEjemplares()}</td>
            </tr>";
        }


        echo "</table>";
    }

    ?>

</body>

<?php
include "./partes/pie.php";
?>

</html>