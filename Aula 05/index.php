<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Exemplo prático com objetos</title>
</head>
<body>
    <?php
    require_once("ContaBancaria.php");

    $conta1 = new ContaBancaria();
    
    $conta1->abrirConta(
        "Kaleb Souza Mendes",
        "0001",
        "24635368-0",
        "cc"
    );

    $conta1->depositar(100);
    $conta1->fecharConta();
    $conta1->pagarMensal();
    $conta1->consultarSaldo();
    $conta1->sacar(138);
    $conta1->fecharConta();
    
    var_dump($conta1);

    $conta2 = new ContaBancaria();
    
    $conta2->abrirConta(
        "João Menezes da Silva Machado",
        "0043",
        "2412321468-0",
        "CP"
    );

    $conta2->consultarSaldo();
    $conta2->depositar(10000);
    $conta2->sacar(500);
    $conta2->fecharConta();

    $conta2->abrirConta(
        "João Menezes da Silva Machado",
        "0043",
        "2412321468-0",
        "CP"
    );

    var_dump($conta2);
    ?>
</body>
</html>