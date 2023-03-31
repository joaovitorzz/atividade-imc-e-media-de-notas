<?php 
    $p = isset($_GET["peso"]) ?$_GET["peso"]:123;
    $p = str_replace(",",".",$p);
    $a = isset($_GET["altura"]) ?$_GET["altura"]:123;
    $a = str_replace(",",".",$a);
    $imc = $p/($a*$a);
    echo "Seu IMC esta em $imc. <br/>";

    if ($imc <17) {
     echo "Muito abaixo do peso";
     }
    if ($imc <= 18.49 && $imc >= 17  ){
        echo "Abaixo do peso";
    }
    if ($imc <= 24.99 && $imc >= 18.5 ){
        echo "Peso normal";}
    if ($imc <= 29.99 && $imc >= 25 ){
            echo "Acima do peso";}
     if ($imc <= 34.99 && $imc >= 30 ){
         echo "Obesidade 1";}
     if ($imc <= 39.99 && $imc >= 35 ){
            echo "Obesidade 2 (Severa)";}
    if ($imc > 40 ){
        echo "Obesidade 3 (Morbida)";}
     

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IMC</h1>
    Escreva as informações separadas com virgulas ou ponto
    <form method="GET">
    <fieldset>
    Peso: <input type="text" name="peso"> <br>
    Altura: <input type="text" name="altura"><br>
    <input type="submit" value="Calcular">
    </fieldset>
    </form>
</body>
</html>