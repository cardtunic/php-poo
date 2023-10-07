<?php
require_once("Pessoa.php");

class Funcionario extends Pessoa {
    #region ATRIBUTOS
    private string $setor;
    private bool $trabalhando;
    #endregion

    function __construct(string $nome, int $idade, string $sexo, string $setor) {
        parent::__construct($nome, $idade, $sexo);
        // o "::" é um operador solucionador de escopo, que permite acessarmos o construtor da classe mãe
        
        $this->setor = $setor;
        $this->trabalhando = true;
    }
    
    #region Getters
    public function getSetor(): string {
		return $this->setor;
	}

	public function getTrabalhando(): bool {
		return $this->trabalhando;
	}
    #endregion

    #region Setters
    public function setSetor(string $setor) {
		$this->setor = $setor;
	}
	public function setTrabalhando(bool $trabalhando) {
		$this->trabalhando = $trabalhando;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function mudarTrabalho() { // Alterna os valores do atributo $trabalhando
        if ($this->getTrabalhando()) {
            $this->setTrabalhando(false);
            echo "<p>O funcionário {$this->getNome()} parou de trabalhar.</p>";
            
        } else {
            $this->setTrabalhando(true);
            echo "<p>O funcionário {$this->getNome()} voltou a trabalhar.</p>";
        }
    }
    #endregion
}
?>