<?php
abstract class Animal {
    #region ATRIBUTOS
    protected float $peso; 
    protected int $idade; 
    protected int $membros; 
    #endregion

    function __construct(float $peso, int $idade, int $membros) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }
    
    #region Getters
    public function getPeso(): float {
		return $this->peso;
	}

	public function getIdade(): int {
		return $this->idade;
	}

	public function getMembros(): int {
		return $this->membros;
	}
    #endregion

    #region Setters
    public function setPeso(float $peso) {
		$this->peso = $peso;
	}

	public function setIdade(int $idade) {
		$this->idade = $idade;
	}

	public function setMembros(int $membros) {
		$this->membros = $membros;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
    #endregion
	
}
?>