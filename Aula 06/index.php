<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Encapsulamento em PHP</title>
</head>
<body>
    <?php
    require_once("ControleRemoto.php");

    $controle = new ControleRemoto();

    $controle->ligar();
    
    $controle->maisVolume();
    $controle->maisVolume();
    $controle->maisVolume();
    $controle->maisVolume();
    $controle->ligarMudo();
    $controle->desligarMudo();
    
    $controle->play();
    $controle->abrirMenu();
    ?>
</body>
</html>