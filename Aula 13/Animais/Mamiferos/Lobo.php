<?php
require_once(__DIR__."/../../Animais/Mamifero.php");

class Lobo extends Mamifero {

    function __construct(float $peso, int $idade, int $membros, string $corPelo) {
        parent::__construct($peso, $idade, $membros, $corPelo);
    }

    #region MÉTODOS PÚBLICOS
    public function emitirSom() {
        echo "<p>Auuuuuuu!</p>";
    }
    #endregion
}
?>