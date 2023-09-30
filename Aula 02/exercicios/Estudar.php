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
        // Estuda um assunto, utilizando um método, durante um período em determinado local, mudando assim o estado estudando para verdadeiro (somente caso o estado atual estudando seja falso)
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
	function pausa() { // Pausa os estudos, mudando o estado de estudando para falso
        if ($this->estudando) {
            echo "<p>Dando uma pausa!</p>";
            $this->estudando = false;
        } else {
            echo "<p>Você não está estudando!</p>";
        }
    }
}
?>