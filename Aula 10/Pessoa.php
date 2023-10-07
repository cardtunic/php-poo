<?php
class Pessoa {
    #region ATRIBUTOS

    private string $nome;
    private int $idade;
    private string $sexo;

    #endregion
    
    function __construct(string $nome, int $idade, string $sexo) {
        if ($sexo !== "M" && $sexo !== "F" && $sexo !== "NB") {
            echo "
            <p class=\"error\">Informe um valor para sexo válido:</p>
            <p>M - Masculino</p>
            <p>F- Feminino</p>
            <p>NB - Não binário</p>
            ";
            return;
        }

        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
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
    #endregion

    #region Setters
    private function setNome(string $nome) {
		$this->nome = $nome;
	}
	private function setIdade(int $idade) {
		$this->idade = $idade;
	}
	private function setSexo(string $sexo) {
		$this->sexo = $sexo;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function fazerAniv() { // Adiciona 1 a idade do usuário
        $this->setIdade($this->getIdade() + 1);
        echo "<p>{$this->getNome()} fez aniversário. Agora tem {$this->getIdade()} anos de idade.</p>";
    }
    #endregion
}
?>