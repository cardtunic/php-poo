<?php
require_once(__DIR__."/../../Animais/Ave.php");

class Arara extends Ave {
    function __construct(float $peso, int $idade, int $membros, string $corPena) {
        parent::__construct($peso, $idade, $membros, $corPena);
    }
}
?>