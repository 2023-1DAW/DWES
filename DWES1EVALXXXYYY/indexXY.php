<?php
session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
    $n1 = $_SESSION["n1"];
    $n2 = $_SESSION["n2"];
    $op = $_SESSION["op"];
    if (isset($_SESSION["h"])){
        $historico = $_SESSION["h"];
    }else{
        $historico = array();
    }
    //Si quiero un histórico de todas las operaciones:
    if ($op){
        $historico[] = "<p>La suma de $n1 y $n2 es " . $n1+$n2 ."</p>";
    }else{
        $historico[] = "<p>La resta de $n1 y $n2 es " . $n1-$n2 ."</p>";
    }
    $_SESSION["h"] = $historico;

    //var_dump($historico);
    foreach($historico as $h){
        echo "<p>$h</p>";
    }

    ?>
</body>
</html>