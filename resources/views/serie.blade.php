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
        $numeros = array();
        $soma = $x;
        $media = 0;
        $qnt = 0;
        for ($i = $x; $i <= $y; $i++) {
            $numeros[$i] = $i;  
            $intervalo = $numeros[$i]+$z;
            $soma = $soma+$intervalo;
            $media = ($soma)/count($numeros);
            echo(($intervalo)." ");
        }
        echo ("</br>Soma: ".$soma);
        echo ("</br>Média: ".$media);
        echo ("</br>Quantidade: ".count($numeros));
    ?>

</body>
</html>