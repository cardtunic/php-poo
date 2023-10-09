<?php
require_once("Pessoa.php");

class Professor extends Pessoa { // Herança para diferença
    #region ATRIBUTOS
    private string $especialidade;
    private float $salario;
    #endregion

    function __construct(string $nome, int $idade, string $sexo, string $especialidade, float $salario) {
        parent::__construct($nome, $idade, $sexo);        
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }
    
    #region Getters
    public function getEspecialidade(): string {
		return $this->especialidade;
	}
	
	public function getSalario(): float {
		return $this->salario;
	}
    #endregion

    #region Setters
    public function setEspecialidade(string $especialidade) {
		$this->especialidade = $especialidade;
	}
    
	public function setSalario(float $salario) {
		$this->salario = $salario;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function receberAum(int $valor) { // Adiciona o valor passado ao salário atual do professor
        $this->setSalario($this->getSalario() + $valor);
        echo "<p>O professor {$this->getNome()} teve seu salário aumentado em $valor. Salário atual = R\${$this->getSalario()}.</p>";
    }
    #endregion
	
}
?>