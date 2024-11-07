<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pr = $_POST["product"];
    $like = $_POST["like"];
    $_SESSION["product"] = $pr;
    $_SESSION["like"] = $like;
    $_SESSION["origin"] = "com2";
    header("Location: ./indexComentarios.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Producto: *</label>
        <input type="text" name="product">
        <br>
        <label>Me gusta</label>
        <input type="checkbox" name="like">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>