<?php
require_once("AcoesVideo.php");

class Video implements AcoesVideo {
    #region ATRIBUTOS
    private string $titulo;
    private float $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;
    #endregion

    function __construct(
        string $titulo, 
        float $avaliacao, 
        int $views, 
        int $curtidas, 
        bool $reproduzindo
    ) {
        $this->titulo = $titulo;
        $this->avaliacao = $avaliacao;
        $this->views = $views;
        $this->curtidas = $curtidas;
        $this->reproduzindo = $reproduzindo;
    }
    
    #region Getters
    public function getTitulo(): string {
		return $this->titulo;
	}

	public function getAvaliacao(): float {
		return $this->avaliacao;
	}

	public function getViews(): int {
		return $this->views;
	}

	public function getCurtidas(): int {
		return $this->curtidas;
	}

	public function getReproduzindo(): bool {
		return $this->reproduzindo;
	}
    #endregion

    #region Setters
    public function setTitulo(string $titulo) {
		$this->titulo = $titulo;
	}
	
	public function setAvaliacao(int $avaliacao) {
        if (!$this->avaliacao) {
            $this->avaliacao = $avaliacao;
            return;
        }

        $media = ($this->avaliacao + $avaliacao) / $this->views;
		$this->avaliacao = $media;
	}
	
	public function setViews(int $views) {
		$this->views = $views;
	}
	
	public function setCurtidas(int $curtidas) {
		$this->curtidas = $curtidas;
	}
	
	public function setReproduzindo(bool $reproduzindo) {
		$this->reproduzindo = $reproduzindo;
	}
    #endregion

    #region MÉTODOS PÚBLICOS
    public function play() {
        if (!$this->getReproduzindo()) {
            $this->setReproduzindo(true);
            echo "<p>O vídeo {$this->getTitulo()} está sendo reproduzido...</p>";
        }
    }

    public function pause() {
        if ($this->getReproduzindo()) {
            $this->setReproduzindo(false);
            echo "<p>O vídeo {$this->getTitulo()} parou de ser reproduzido</p>";
        }
    }

    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
        echo "<p>O vídeo {$this->getTitulo()} acabou de ganhar mais um like! Total: {$this->getCurtidas()}.</p>";
    }
    #endregion
}
?>