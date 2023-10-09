<?php
class Bolsista extends Aluno { // Herança paa diferença
    #region ATRIBUTOS
    private int $bolsa;
    #endregion

    function __construct(
        string $nome, 
        int $idade, 
        string $sexo, 
        int $matr, 
        string $curso, 
        int $bolsa
    ) {
        parent::__construct($nome, $idade, $sexo, $matr, $curso);
        // O construtor da classe pai (Aluno) recebe os parâmetros utilizados pela classe raiz (Pessoa) 
        
        $this->bolsa = $bolsa;
    }
    
    #region Getters
    public function getBolsa(): string {
		return $this->bolsa;
	}
    #endregion

    #region Setters
	public function setBolsa(int $bolsa) {
		$this->bolsa = $bolsa;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function renovarBolsa() { // Exibe na tela uma mensagem de renovação da bolsa
        echo "<p>Renovou a bolsa.</p>";
    }

    public function pagarMensalidade(int $valor) { // Sobrescreve o método de pagamento de mensalidade
        $mensalidade = $valor - $this->getBolsa();
        echo "<p>O aluno {$this->getNome()} com R\${$this->getBolsa()} de desconto! Total: R\$$mensalidade</p>";
    }
    #endregion
}
?>