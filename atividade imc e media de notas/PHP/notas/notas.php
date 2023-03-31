<?php   
    $nome = isset($_GET["nome"]) ?$_GET["nome"]:123;
    $n1 = isset($_GET["n1"]) ?$_GET["n1"]:123;
    $n2 = isset($_GET["n2"]) ?$_GET["n2"]:123;
    $media = ($n1+$n2) / 2 ;
    echo "Ola $nome <br/> Sua media foi de $media.<br/>";
    if ($media < 4){
        echo "Com essa media voce esta reprovado";
    }
    else{
    if ($media >= 6){
        echo "Com essa media voce esta de aprovado";
    }
    else {
        echo "Com essa media voce esta de exame final";
    }
}


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
    <h1> Media de notas </h1>
    <form method="$_GET">
        Nome do aluno:
        <input type="name" name="nome">
        Nota 1:
        <input type="number" name="n1">
        Nota 2:
        <input type="number" name="n2">
        <input type="submit" value="calcular">
    </form>

    
</body>
</html>