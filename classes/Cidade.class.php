<?php
/**
 * Dados da cidade
 *
 * @author Fabio-CS
 */
class Cidade {
   
    private $idCidade;
    private $nomeCidade;
    private $naturalidade;
    private $estado;
    
    function __construct() {
        
    }
    
    public function __toString() {
        return $this->nomeCidade;
    }
    
    public function getIdCidade() {
        return $this->idCidade;
    }

    public function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    public function getNomeCidade() {
        return $this->nomeCidade;
    }

    public function setNomeCidade($nomeCidade) {
        $this->nomeCidade = $nomeCidade;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

}

?>
