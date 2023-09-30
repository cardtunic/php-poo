<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Criando Classes e Objetos</title>
</head>
<body>
    <?php
    require_once("Caneta.php"); // Importa a classe caneta de um arquivo externo

    // CANETA 1

    $c1 = new Caneta(); // Cria uma nova instância da classe caneta, e armazena na variável $c1
    
    // Trecho de código para acessar e mudar os valores dos atributos cor e ponta
    
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
 
    $c1->tampar(); // Chama o método tampar() para mudar o valor do atributo $tampada para true
    
    var_dump($c1); // Exibe o estado atual do objeto $c1

    // CANETA 2

    $c2 = new Caneta(); // Cria uma nova instância da classe caneta, que não está relacionada com a instância acima
    
    // Trecho de código para acessar e mudar os valores dos atributos cor, ponta e carga
    
    $c2->cor = "Vermelho"; 
    $c2->ponta = 2.0;
    $c2->carga = 90;

    $c2->tampar(); // Chama o método tampar() para mudar o valor do atributo $tampada para true

    var_dump($c2); // Exibe o estado atual do objeto $c2
    ?>

    <a href="./exercicios/exercicios.php">Veja os exercícios dessa aula</a>
</body>
</html>