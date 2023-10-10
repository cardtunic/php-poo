<?php
abstract class Pessoa {
    #region ATRIBUTOS
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected int $experiencia;
    #endregion

    function __construct(
        string $nome, 
        int $idade, 
        string $sexo, 
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }
    
    #region Getters
    public function getNome(): string {
		return $this->nome;
	}

	public function getIdade(): int {
		return $this->idade;
	}

	public function getSexo(): string {
		return $this->sexo;
	}

	public function getExperiencia(): int {
		return $this->experiencia;
	}
    #endregion

    #region Setters
    public function setNome(string $nome) {
		$this->nome = $nome;
	}

	public function setIdade(int $idade) {
		$this->idade = $idade;
	}

	public function setSexo(string $sexo) {
		$this->sexo = $sexo;
	}

	public function setExperiencia(int $experiencia) {
		$this->experiencia = $experiencia;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    protected function ganharExp(int $valor) {
        $this->setExperiencia($this->getExperiencia() + $valor);
        echo "<p>A pessoa {$this->getNome()} ganhou $valor exp, agora ela possui {$this->getExperiencia()}!</p>";
    }
    #endregion
}
?>