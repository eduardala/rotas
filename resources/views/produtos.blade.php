<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <?php
    request()->route()->parameters();
    echo("Sou o NÚMERO: ".$n."</br>");
    $letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $array2 = array("SABÃO", "ESCOVA", "PASTA", "DETERGENTE", "DESODORANTE", "FRALDA", "MASSA");
    $array = array();
    for ($i = 1; $i <= $n; $i++) {
        $misturada = substr(str_shuffle($letras),1,5);
        $array[$i]= $misturada;             
    }

    $array_resultado = array_merge($array2, $array);
    shuffle($array_resultado);
    for ($i = 1; $i <= $n; $i++) {
        echo ("Produto: ".$i."->".$array_resultado[$i]."</br>");
    }
    ?>

</body>
</html>