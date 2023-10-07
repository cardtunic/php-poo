<?php
require_once("Pessoa.php");

class Aluno extends Pessoa {
    #region ATRIBUTOS
    
    private int $matr;
    private string $curso;
    private bool $matriculado;

    #endregion

    function __construct(string $nome, int $idade, string $sexo, int $matr, string $curso) {
        parent::__construct($nome, $idade, $sexo);
        // o "::" é um operador solucionador de escopo, que permite acessarmos o construtor da classe mãe
        
        $this->matr = $matr;
        $this->curso = $curso;
        $this->matriculado = true;
    }
    
    #region Getters
	public function getMatr(): int {
		return $this->matr;
	}

	public function getCurso(): string {
		return $this->curso;
	}

    public function getMatriculado(): bool {
		return $this->matriculado;
	}
    #endregion

    #region Setters
    public function setMatr(int $matr) {
		$this->matr = $matr;
	}

	public function setCurso(string $curso) {
		$this->curso = $curso;
	}

    public function setMatriculado(bool $matriculado) {
		$this->matriculado = $matriculado;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function cancelarMatr() { // Muda o status da matriculado do aluno para cancelada
        $this->setMatriculado(false);
        echo "<p>O aluno {$this->getNome()} teve sua matrícula cancelada.</p>";
    }
    #endregion
}
?>