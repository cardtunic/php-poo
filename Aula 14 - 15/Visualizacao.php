<?php
require_once("Gafanhoto.php");
require_once("Video.php");

class Visualizacao {
    #region ATRIBUTOS
    private Gafanhoto $especatador;
    private Video $filme;
    #endregion

    function __construct(Gafanhoto $espectador, Video $filme) {
        $this->especatador = $espectador;
        $this->filme = $filme;

        $this->filme->setViews($this->filme->getViews() + 1);
        $this->especatador->setTotAssistido($this->especatador->getTotAssistido() + 1);
    }
    
    #region Getters
    public function getEspecatador(): Gafanhoto {
		return $this->especatador;
	}

    public function getFilme(): Video {
		return $this->filme;
	}
    #endregion

    #region Setters
    public function setEspecatador(Gafanhoto $especatador) {
		$this->especatador = $especatador;
	}
	
	public function setFilme(Video $filme) {
		$this->filme = $filme;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function avaliar() {
        $this->getFilme()->setAvaliacao(5);
    }

    public function avaliarNota(int $nota) {
        $this->getFilme()->setAvaliacao($nota);
    }

    public function avaliarPorc(float $porc) {
        $nota = 0;

        if ($porc <= 20) {
            $nota = 3;
        } else if ($porc <= 50) {
            $nota = 5;
        } else if ($porc <= 90) {
            $nota = 8;
        } else {
            $nota = 10;
        }

        $this->getFilme()->setAvaliacao($nota);
    }
    #endregion
}
?>