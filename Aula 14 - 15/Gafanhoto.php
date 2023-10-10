<?php
require_once("Pessoa.php");
require_once("Video.php");

class Gafanhoto extends Pessoa {
    #region ATRIBUTOS
    private string $login;
    private int $totAssistido;
    #endregion

    function __construct(
        string $nome,
        int $idade,
        string $sexo,
        string $login,
        int $totAssistido
    ) {
        parent::__construct($nome, $idade, $sexo);

        $this->login = $login;
        $this->totAssistido = $totAssistido;
    }
    
    #region Getters
    public function getLogin(): string {
		return $this->login;
	}

    public function getTotAssistido(): int {
		return $this->totAssistido;
	}
    #endregion

    #region Setters
    public function setLogin(string $login) {
		$this->login = $login;
	}
	
	public function setTotAssistido(int $totAssistido) {
		$this->totAssistido = $totAssistido;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function viuMaisUm(Video $video) {
        $this->setTotAssistido($this->getTotAssistido() + 1);
        $video->setViews($video->getViews() + 1);
        
        echo "O gafanhoto {$this->getNome()} assistiu o {$video->getTitulo()}.";
        $this->ganharExp(30);
    }
    #endregion
}
?>