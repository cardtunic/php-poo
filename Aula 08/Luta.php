<?php
require_once("Lutador.php");

class Luta {
    #region ATRIBUTOS
    
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    #endregion

    function __construct() {
		$this->aprovada = false;
    }
    
    #region Getters
	private function getDesafiado() {
		return $this->desafiado;
	}
	
	private function getDesafiante() {
		return $this->desafiante;
	}
	
	private function getRounds() {
		return $this->rounds;
	}
	
	private function getAprovada() {
		return $this->aprovada;
	}
	#endregion

	#region Setters
    private function setDesafiado($desafiado) {
		$this->desafiado = $desafiado;
	}
	
	private function setDesafiante($desafiante) {
		$this->desafiante = $desafiante;
	}
	
	private function setRounds($rounds) {
		$this->rounds = $rounds;
	}
	
	private function setAprovada($aprovada) {
		$this->aprovada = $aprovada;
	}
	#endregion
    
    #region MÉTODOS PÚBLICOS
    public function marcarLuta($desafiado, $desafiante) {
		if ($desafiado === $desafiante) {
			echo "<p class=\"\">Essa luta não pode ser marcada! O desafiado e desafiante precisam ser lutadores diferentes.</p>";
			return;
		}

		if ($desafiado->getCategoria() !== $desafiante->getCategoria()) {
			echo "<p class=\"error\">Essa luta não pode ser marcada! Os jogadores são de categorias diferentes.</p>";
			return;
		}

		$this->setDesafiado($desafiado);
		$this->setDesafiante($desafiante);
		$this->setAprovada(true);

		echo "<p class=\"success\">Luta marcada com sucesso!</p>";
	}

	public function lutar() {
		if (!$this->getAprovada()) {
			echo "<p class=\"error\">A luta não foi aprovada!</p>";
			return;
		}

		$desafiado = $this->getDesafiado();
		$desfiante = $this->getDesafiante();

		$desafiado->apresentar();
		$desfiante->apresentar();

		$resultado = random_int(0, 2);

		echo "<h2>Luta iniciada!</h2>";

		switch ($resultado) {
			case 0:
				$desafiado->empatarLuta();
				$desfiante->empatarLuta();
				echo "<p>Empate entre {$desafiado->getNome()} e o {$desfiante->getNome()}!</p>";
				break;

			case 1:
				$desafiado->ganharLuta();
				$desfiante->perderLuta();
				echo "<p>O jogador {$desafiado->getNome()} ganhou a luta!</p>";
				break;

			case 2:
				$desafiado->perderLuta();
				$desfiante->ganharLuta();
				echo "<p>O jogador {$desfiante->getNome()} ganhou a luta!</p>";
				break;
		}
	}
    #endregion
}
?>