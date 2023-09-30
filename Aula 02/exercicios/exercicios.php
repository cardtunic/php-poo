<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1>Aula 02 - Exercícios</h1>

    <p>Crie uma classe de um objeto concreto e uma de um objeto abstrato do seu dia-a-dia.</p>

    <h2>Objeto concreto: Pendrive</h2>
    
    <?php
    require_once("Pendrive.php");

    $pendrive = new Pendrive();
    
    $pendrive->modelo = "Cruzerblade 3.0";
    $pendrive->armazenamento = 32768;
    $pendrive->velocidade_gravacao = 100;
    $pendrive->velocidade_leitura = 100;
    $pendrive->tipo_usb = "3.0";

    var_dump($pendrive);

    $pendrive->conectar();
    $pendrive->ler();
    $pendrive->gravar();
    $pendrive->ejetar();
    $pendrive->desconectar();
    ?>

    <h2>Objeto concreto: Estudar</h2>
    <?php
    
    require_once("Estudar.php");

    $estudar = new Estudar();
    $estudar->assunto = "Programação Orientada a Objetos";
    $estudar->periodo = "3 horas";
    $estudar->metodo = "Pomodoro";
    $estudar->local = "casa";

    var_dump($estudar);

    $estudar->estudar();
    $estudar->pausa();
    ?>
</body>
</html>