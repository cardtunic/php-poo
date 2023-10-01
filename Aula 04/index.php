<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Métodos Getters, Setters e Constructor</title>
</head>
<body>
    <?php
    require_once("Caneta.php");

    $c1 = new Caneta("BIC Cristal", "Azul", 0.5, 90);
    // Construtor é executado quando o objeto é instanciado, definindo os atributo $modelo, $cor, $ponta e $carga com setters
    
    // // Modificam os valores dos atributos $modelo e $ponta

    // $c1->setModelo("BIC Cristal");
    // $c1->setPonta(2.0);

    // Mostra os valores de cada uma das propriedades com métodos especiais getters

    echo "<p> Tampada?: {$c1->getTampada()} </p>";
    echo "<p> Modelo: {$c1->getModelo()} </p>";
    echo "<p> Ponta: {$c1->getPonta()} </p>";
    echo "<p> Carga: {$c1->getCarga()} </p>";
    echo "<p> Cor: {$c1->getCor()} </p>";

    var_dump($c1);
    ?>
</body>
</html>