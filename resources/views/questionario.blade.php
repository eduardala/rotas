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
        if ($q1 == 'A') {
            echo("Acertou a questão 01 - A.</br>");
        } else {
            echo ("01: A</br>");
        }
        if ($q2 == 'B') {
            echo("Acertou a questão 02 - B.</br>");
        } else {
            echo ("02: B</br>");
        }
        if ($q3 == 'C') {
            echo("Acertou a questão 03 - C.</br>");
        } else {
            echo ("03: C</br>");
        }
        if ($q4 == 'D') {
            echo("Acertou a questão 04 - D.</br>");
        } else {
            echo ("04: D</br>");
        }
        if ($q5 == 'E') {
            echo("Acertou a questão 05 - E.</br>");
        } else {
            echo ("05: E</br>");
        }
        if ($q6 == 'E') {
            echo("Acertou a questão 06 - E.</br>");
        } else {
            echo ("06: E</br>");
        }        
        if ($q7 == 'D') {
            echo("Acertou a questão 07 - D.</br>");
        } else {
            echo ("07: D</br>");
        }
        if ($q8 == 'C') {
            echo("Acertou a questão 08 - C.</br>");
        } else {
            echo ("08: C</br>");
        }
        if ($q9 == 'B') {
            echo("Acertou a questão 09 - B.</br>");
        } else {
            echo ("09: B</br>");
        }
        if ($q10 == 'A') {
            echo("Acertou a questão 10 - A.</br>");
        } else {
            echo ("10: A</br>");
        }
    ?>

</body>
</html>