<?php
require_once(__DIR__."/../../Animais/Reptil.php");

class Tartaruga extends Reptil {
    function __construct(float $peso, int $idade, int $membros, string $corEscama) {
        parent::__construct($peso, $idade, $membros, $corEscama);
    }
    
    #region MÉTODOS PÚBLICOS
    public function locomover() {
        echo "<p>Se locomvendo beeeeeem devagar...</p>";
    }
    #endregion
}
?>