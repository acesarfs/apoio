<?php

require_once ('Loader.class.php');

class VotoCedulaDAOPersistivel extends DAOPersistivel {
	const NOME_TABELA = "votocedula";

	public function __construct() {
		parent::__construct(VotoCedulaDAOPersistivel::NOME_TABELA);
	}

	public function incluir(DAOBanco $banco, $camposValores) {
		return parent::incluir($banco, $camposValores);
	}

	public function alterar(DAOBanco $banco, $camposValores, FiltroSQL $filtro = null, $sql = null) {
		return parent::alterar($banco, $camposValores, $filtro, $sql);
	}

	public function excluir(DAOBanco $banco, FiltroSQL $filtro = null) {
		return parent::excluir($banco, $filtro);
	}

	public function consultar(DAOBanco $banco, $campos, FiltroSQL $filtro = null, $camposOrdem = null, $sql = null) {
		$resultados = array();
		$resultados = parent::consultar($banco, $campos, $filtro, $camposOrdem, $sql);
		return $this->criaObjetos($resultados);
	}

	public function criaObjetos($resultados) {
		$resultvotocedulas = array();
		foreach ($resultados as $linha) {
			$votocedula = new VotoCedula();
			foreach ($linha as $campo => $valor) {
				if (strcasecmp($campo, "idcedula") == 0) {
					$votocedula->setIDCedula($valor);
				}
				elseif (strcasecmp($campo, "idvotante") == 0) {
					$votocedula->setIDVotante($valor);
				}
				elseif (strcasecmp($campo, "nome") == 0) {
					$votocedula->setNome($valor);
				}
				elseif (strcasecmp($campo, "voto") == 0) {
					$votocedula->setVoto($valor);
				}
				elseif (strcasecmp($campo, "dhinclusao") == 0) {
					$votocedula->setDHInclusao($valor);
				}
			}
			$resultvotocedulas[] = $votocedula;
		}
		return $resultvotocedulas;
	}
}
?>
