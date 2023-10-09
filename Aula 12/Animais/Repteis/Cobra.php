<?php
require_once(__DIR__."/../../Animais/Reptil.php");

class Cobra extends Reptil {
    function __construct(float $peso, int $idade, int $membros, string $corEscama) {
        parent::__construct($peso, $idade, $membros, $corEscama);
    }
}
?>