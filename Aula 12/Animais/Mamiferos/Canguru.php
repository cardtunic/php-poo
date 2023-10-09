<?php
require_once(__DIR__."/../../Animais/Mamifero.php");

class Canguru extends Mamifero {
    function __construct(float $peso, int $idade, int $membros, string $corPelo) {
        parent::__construct($peso, $idade, $membros, $corPelo);
    }
    
    #region MÉTODOS PÚBLICOS
    public function locomover() {
        echo "<p>Pulando...</p>";
    }

    public function usarBolsa() {
        echo "<p>Usou a bolsa</p>";
    }
    #endregion
}
?>