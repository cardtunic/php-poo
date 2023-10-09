<?php
require_once("Pessoa.php");

class Visitante extends Pessoa { // Herança de implementação (pobre)
    function __construct(string $nome, int $idade, string $sexo) {
        parent::__construct($nome, $idade, $sexo);
    }
}
?>