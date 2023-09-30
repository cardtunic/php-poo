<?php
class Estudar {
    // ATRIBUTOS

	public $assunto;
	public $periodo;
	public $metodo;
	public $local;
	public $estudando;
		
	// MÉTODOS
	
	function estudar() {
        if (!$this->estudando) {
            echo "<p>Estudando o assunto $this->assunto...";
            echo "<p>Usando o métdo $this->metodo";
            echo "<p>Por $this->periodo";
            echo "<p>Em $this->local";
    
            $this->estudando = true;
        } else {
            echo "<p>Você já está estudando!</p>";
        }

    }
	function pausa() {
        if ($this->estudando) {
            echo "<p>Dando uma pausa!</p>";
            $this->estudando = false;
        } else {
            echo "<p>Você não está estudando!</p>";
        }
    }
}
?>