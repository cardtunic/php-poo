<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Configurando a visibilidade de atributos e métodos</title>
</head>
<body>
    <?php
    require_once("Caneta.php");

    $c1 = new Caneta();
    
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";

    // $c1->ponta = 0.5; Retorna um erro fatal, pois ponta é um atributo privado!
    // $c1->carga = 0.5; Retorna um erro fatal, pois ponta é um atributo protegido!
    // $c1->tampada = 0.5; Retorna um erro fatal, pois ponta é um atributo protegido!

    $c1->destampar(); // Funciona perfeitamente mesmo que o atributo que ele altere $tampada seja protegido
    $c1->rabiscar();
    $c1->tampar();

    var_dump($c1);
    ?>
</body>
</html>