<?php
require_once(__DIR__."/../../Animais/Peixe.php");

class Goldfish extends Peixe {
    function __construct(float $peso, int $idade, int $membros, string $corEscama) {
        parent::__construct($peso, $idade, $membros, $corEscama);
    }
}
?>